<?php 
namespace App\Http\Controllers;
use Cart;
use App\customer;
use App\bill;
use App\bill_detail;
class adminController extends Controller{
	public function customer(){
		$customer = customer::all();
		return view('admin-shop.customer',compact('customer'));
	}
	public function bill($id){
		$bill = bill::where('customer_id',$id)->select('id','total','date_order')->get()->toArray();
		// $bill_id = $bill['id'];
		// $bill_detail = bill_detail::where('id',$bill_id)->select('id','bill_id','product_id','qty')->get()->toArray();
		print_r($bill);
		print_r($bill[0][0]) ;
	}
}

 ?>