<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('admin','adminController');
Route::resource('cate','cate');
Route::resource('product','productController');
Route::resource('color','colorController');
Route::resource('size','sizeController');
Route::get('form',function(){
	return view('admin');
});



Route::get('loginAdmin',['as'=>'getRegister','uses'=>'authController@getRegister']);

Route::get('/', ['as'=>'index' ,'uses'=> 'authController@formValidation']);
Route::post('postform',['as'=>'postform' ,'uses'=> 'authController@formValidationPost']);

Route::get('getlogin', ['as'=>'getlogin' ,'uses'=> 'authController@formValidation']);
Route::post('postlogin',['as'=>'postlogin' ,'uses'=> 'authController@postlogin']);

Route::get('sanpham/{id}',['as'=>'sanpham','uses'=>'authcontroller@sanpham']);
Route::get('main',function()
{
	return view('main1');
});Route::get('home',function()
{
	return view('layouts.master');
});
Route::post('search',['as'=>'search','uses'=>'authcontroller@search']);
Route::get('loaisanpham/{id}',['as'=>'loaisanpham','uses'=>'authcontroller@loaisanpham']);
Route::get('demo',function(){
	return view('admin-shop.customer');
});
//shoppingcart
Route::get('muahang/{id}',['as'=>'muahang','uses'=>'authcontroller@muahang']);
Route::get('giohang',['as'=>'giohang','uses'=>'authcontroller@giohang']);
Route::get('xoagiohang/{id}',['as'=>'xoagiohang','uses'=>'authcontroller@xoagiohang']);
Route::get('thongtin',['as'=>'thongtin','uses'=>'authcontroller@thongtin']);
Route::post('donhang',['as'=>'donhang','uses'=>'authcontroller@donhang']);
Route::get('dathang',['as'=>'dathang','uses'=>'authcontroller@dathang']);

//admin
Route::get('customer',['as'=>'customer','uses'=>'adminController@customer']);
Route::get('bill/{id}',['as'=>'bill','uses'=>'adminController@bill']);
