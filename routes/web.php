<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home_Controller;
use App\Http\Controllers\Admin_Controller;
use App\Http\Controllers\Category_Controller;
use App\Http\Controllers\Thuonghieu_Controller;
use App\Http\Controllers\Sanpham_Controller;
use App\Http\Controllers\Ajax_Controller;
use App\Http\Controllers\Cart_Controller;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\Thanhtoan_Controller;
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
// wweb
Route::get('/',[Home_Controller::class,'index']);
route::get('trangchu',[Home_Controller::class,'index']);

//admin
route::get('login',[Admin_Controller::class,'index']);
route::post('admin_dangnhap',[Admin_Controller::class,'dangnhap']);

route::group(['prefix'=>'admin','middleware'=>'login'],function(){
	route::get('dasboard',[Admin_Controller::class,'dasboard']);
	route::get('admin_dangxuat',[Admin_Controller::class,'dangxuat']);
	//category_admin
	route::group(['prefix'=>'danhmucsanpham'],function(){
		route::get('them',[Category_Controller::class,'addcategory']);
		route::post('postdanhmuc',[Category_Controller::class,'postdanhmuc']);
		route::get('sua/{n}',[Category_Controller::class,'suadanhmuc']);
		route::post('postdmuc/{n}',[Category_Controller::class,'postdmuc']);
		route::get('xoa/{n}',[Category_Controller::class,'xoa']);

		//dôi status0->1
		route::get('un_active/{n}',[Category_Controller::class,'un_active']);
		route::get('active/{n}',[Category_Controller::class,'active']);
	});
	route::get('danhmucsanpham',[Category_Controller::class,'showcategory']);

	//thuonghieu
	route::group(['prefix'=>'thuonghieu'],function(){
		route::get('them',[Thuonghieu_Controller::class,'addthuonghieu']);
		route::post('postthuonghieu',[Thuonghieu_Controller::class,'postthuonghieu']);
		route::get('sua/{n}',[Thuonghieu_Controller::class,'suathuonghieu']);
		route::post('postthieu/{n}',[Thuonghieu_Controller::class,'postthieu']);
		route::get('xoa/{n}',[Thuonghieu_Controller::class,'xoa']);
		route::get('un_active/{n}',[Thuonghieu_Controller::class,'un_active']);
		route::get('active/{n}',[Thuonghieu_Controller::class,'active']);
	});
	route::get('thuonghieu',[Thuonghieu_Controller::class,'showthuonghieu']);

	//sanpham
	route::group(['prefix'=>'sanpham'],function(){
		route::get('them',[Sanpham_Controller::class,'addsanpham']);
		route::post('postspham',[Sanpham_Controller::class,'postspham']);
		route::get('sua/{n}',[Sanpham_Controller::class,'suasanpham']);
		route::post('postsanpham/{n}',[Sanpham_Controller::class,'postsanpham']);
		route::get('xoa/{n}',[Sanpham_Controller::class,'xoa']);
		route::get('un_active/{n}',[Sanpham_Controller::class,'un_active']);
		route::get('active/{n}',[Sanpham_Controller::class,'active']);
	});
	route::get('sanpham',[Sanpham_Controller::class,'showsanpham']);

	//ajax
	route::group(['prefix'=>'ajax'],function(){
		route::get('danhmuc/{id}',[Ajax_Controller::class,'danhmuc']);
	});
	route::group(['prefix'=>'order'],function(){
		route::get('chitiet_donhang/{id}',[Thanhtoan_Controller::class,'chitiet_donhang']);
		route::get('delete_donhang/{id}',[Thanhtoan_Controller::class,'delete_donhang']);
	});
	route::get('order',[Thanhtoan_Controller::class,'order']);
});
//index
route::get('sanpham',[Sanpham_Controller::class,'sanpham']);
route::get('danhmuc_sanpham/{id}',[Category_Controller::class,'danhmucsanpham']);
route::get('thuonghieu_sanpham/{id}',[Thuonghieu_Controller::class,'thuonghieusanpham']);
route::get('chi-tiet-san-pham/{id}',[Sanpham_Controller::class,'chitietsanpham']);
route::post('addcart',[Cart_Controller::class,'addcart']);
route::get('giohang',[Cart_Controller::class,'giohang']);
route::get('delete_giohang/{id}',[Cart_Controller::class,'delete_giohang']);
route::get('delete_all',[Cart_Controller::class,'delete_all']);
route::post('capnhap',[Cart_Controller::class,'capnhap']);

//giohang_tructiep
route::get('them_gh/{id}',[Cart_Controller::class,'them_gh']);
//thanh toan
route::get('user_login',[User_Controller::class,'user_login']);
route::post('dangki',[User_Controller::class,'dangki']);
route::post('dangnhap',[User_Controller::class,'dangnhap']);
route::get('dangxuat',[User_Controller::class,'dangxuat']);
route::get('thongtin_donhang',[Thanhtoan_Controller::class,'thongtin_donhang']);
route::post('donhang',[Thanhtoan_Controller::class,'donhang']);
route::get('thanhtoan',[Thanhtoan_Controller::class,'thanhtoan']);
route::post('hinhthucthanhtoan',[Thanhtoan_Controller::class,'hinhthucthanhtoan']);
route::get('thanhtoantienmat',[Thanhtoan_Controller::class,'thanhtoantienmat']);

//tìm kiếm sản phẩm
route::post('timkiemsanpham',[Home_Controller::class,'timkiemsanpham']);


