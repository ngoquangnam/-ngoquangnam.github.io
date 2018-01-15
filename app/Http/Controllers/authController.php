
<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use DB;
use Cart;
use App\product;
use App\productcolor;
use App\productsize;
use App\size;
use App\color;
use App\image;
use App\category;
use App\customer;
use App\bill;
use App\bill_detail;
class authController extends Controller 
{

	public function formValidation()
	{
		$product = product::select('id','name','price','keywords','image','add_info','discription','review','category_id')->orderBy('id','DESC')->skip(0)->take(8)->get()->toArray();
		 $data = category::select('name','parent_id')->get()->toArray();
		return view('layouts.master',compact('product'));
	}

	public function sanpham($id)
	{
		$sanpham = product::where('id',$id)->first();
		$color_id = productcolor::where('product_id',$id)->select('color_id')->get()->toArray();
		$color = color::all();
		$size_id = productsize::where('product_id',$id)->select('size_id')->get()->toArray();
		$size = size::all();
		$image1 = image::where('product_id',$id)->get()->first()->toArray();
		$image2 = image::where('id','>',$image1['id'])->get()->first()->toArray();
		return view('sanpham',compact('sanpham','color_id','color','size_id','size','image1','image2'));

	}
	public function formValidationPost(Request $request)
	{
		 $validator = Validator::make($request->all(),[
			'name' =>'required|unique:admins',
			'email' =>'required',
			'password' => 'required',
			'confirm' => 'required|same:password',
			

		],[
			
			'name.required' => 'vui long nhap name',
			'email.required' => 'vui long nhap email',
			'password.required' => 'vui long nhap password',
			'confirm.required' => 'nhap dung password',
			'confirm.same' => 'mat khau nhap lai khong dung',
			'name.unique' => 'name bi trung'
			
		]);

		  if ($validator->fails()) {
            return redirect()->route('getform')
                    ->withErrors($validator)
                    ->withInput();
        } else {
        	$tv = new admin;
        	$tv->name = $request->name;
        	$tv->email = $request->email;
        	$tv->password = Hash::make($request->password);
        	$tv->lever = 1;
        	$tv->remember_token = $request->_token;
        	$tv->save();
        	return redirect()->back();
        			
        }
	}

	public function postlogin(Request $request)
	{
		$validator = validator::make($request->all(),
			[
				'name' =>'required',
				'password' => 'required',
			],
			[
				'name.required' => 'vui long nhap ten dang nhap',
				'password.required' => 'vui long nhap password',
			]);

			if($validator->fails())
			{
				return redirect()->route('index')
				->withErrors($validator)->withInput();
			} 
			else
			{//phai xoa auth controller mac dinh 
				 if(Auth::attempt([
					'name' => $request->name,
					'password' => $request->password]))
				{
					return view('main1');
				}
				else{
						return redirect()->back();
					}
			}
	}
	public function search (Request $request)
	{
		$product1 = product::where('name','like','%'.$request->key.'%')->orWhere('price','like','%'.$request->key.'%')->get()->toArray();
		return view('search',compact('product1'));
	}
		public function loaisanpham($id){
		$product = product::where('category_id',$id)->select('id','name','price','keywords','image','add_info','discription','review','category_id')->get()->toArray();
		return view('layouts.loaisanpham',compact('product'));
	}

	
	public function muahang($id){
		$product_buy = product::where('id',$id)->first();
		Cart::add(array('id'=>$id,'name'=>$product_buy->name,'qty'=>1,'price'=>$product_buy->price,'options'=>array('img'=>$product_buy->image)));		
		$giohang = Cart::content();
		return redirect()->route('giohang');

	}
	public function giohang(){
		$giohang = Cart::content();
		$total = Cart::total();
		$count = Cart::count();
		return view('checkout',compact('giohang','total','count'));
		
	}
	public function xoagiohang($id){
		Cart::remove($id);
		return redirect()->route('giohang');
	}
	public function thongtin(){
		$giohang = Cart::content();
		$total = Cart::total();
		$count = Cart::count();
	
		return view('shoppy.checkout_customer',compact('giohang','total','count'));
	}
	public function donhang(Request $request){
		$giohang = Cart::content();
		$total = Cart::total();
		$count = Cart::count();
			$validator = validator::make($request->all()
		,[
			'email' => 'required',
			'ten' => 'required',
			'thanhpho' => 'required',
			'huyen' => 'required',
			'xa' => 'required',
			'diachi' => 'required',
			'sodt' => 'required',

		],[
			'email.required'=>'vui long nhap email',
			'ten.required' => 'vui long nhap ten',
			'thanhpho.required' => 'vui long nhap thanh pho',
			'huyen.required' => 'vui long nhap huyen',
			'xa.required' => 'vui long nhap xa',
			'diachi.required' => 'vui long nhap dia chi',
			'sodt.required' => 'vui long nhap so dien thoai',
		]);
		if($validator->fails())
			{
				return redirect()->back()
				->withErrors($validator)->withInput();
			} 
			else{
				$data = array('email'=>$request->email,'ten'=>$request->ten,'thanhpho'=>$request->thanhpho,'huyen'=>$request->huyen,'xa'=>$request->xa,'diachi'=>$request->diachi,'sodt'=>$request->sodt);
				$request->session()->put('validator',$data);
				return view('shoppy.hoadon',compact('giohang','total','count'));
			}
	}
	public function dathang(){

		echo (session()->get('validator'))['email'];
		$customer = new customer;
		$customer->email = session()->get('validator')['email'];
		$customer->ten = session()->get('validator')['ten'];
		$customer->thanhpho = session()->get('validator')['thanhpho'];
		$customer->huyen = session()->get('validator')['huyen'];
		$customer->xa = session()->get('validator')['xa'];
		$customer->diachi = session()->get('validator')['diachi'];
		$customer->sodt = session()->get('validator')['sodt'];
		$customer->note = 1;
		$customer->save();

		$bill = new bill;
		$bill->customer_id = $customer->id;
		$bill->date_order = date('Y-m-d H:i:s');
		$bill->total = Cart::total();
		$bill->save();

		if(Cart::count()>0){
			foreach(Cart::content() as $item){
				$bill_detail = new bill_detail;
				$bill_detail->bill_id = $bill->id;
				$bill_detail->product_id = $item->id;
				$bill_detail->qty = $item->qty;
				$bill_detail->save();
			}
		}
	}

}
