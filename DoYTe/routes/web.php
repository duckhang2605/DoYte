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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("home",function(){
	// di chuyển đến route user
	return redirect(url("admin/user"));
});
// dieu phoi duong dan admin
Route::get("admin",function(){
	// di chuyen den route admin/user
	return redirect(url("admin/user"));
});
// group phaan admin thong qua tag co ten la admin
Route::group(array("prefix"=>"admin","middleware"=>"auth"),function(){
	// logout
	Route::get("logout",function(){
		Auth::logout();
		// di chuyen den url chi dinh
		return redirect("login");
	});
	// list user
	Route::get("user","backend\userController@list_user");
	// edit user
	Route::get("user/edit/{id}","backend\userController@edit");
	// do edit user
	Route::post("user/edit/{id}","backend\userController@do_edit");
	// add user
	Route::get("user/add","backend\userController@add");
	// do add user
	Route::post("user/add","backend\userController@do_add");
	// delete user
	Route::get("user/delete","backend\userController@delete");
	// list product
	Route::get("product","backend\productController@list_product");
	// edit product
	Route::get("product/edit/{id}","backend\productController@edit");
	// do edit product
	Route::post("product/edit/{id}","backend\productController@do_edit");
	// add product
	Route::get("product/add","backend\productController@add");
	// do add product
	Route::post("product/add","backend\productController@do_add");
	// delete product
	Route::get("delete/{id}","backend\productController@delete");
	// =============
	// list news
	Route::get("new","newsContrller@list_news");
	// edit news
	Route::get("new/edit/{id}","newsContrller@edit");
	// do edit news
	Route::post("new/edit/{id}","newsContrller@do_edit");
	// ad news
	Route::get("new/add","newsContrller@add");
	// do add news
	Route::post("new/add","newsContrller@do_add");
	// delete news
	Route::get("new/delete/{id}","newsContrller@delete");
	// ============
	// list category
	Route::get("category","backend\categoryController@list_category");
	// edit category
	Route::get("category/edit/{id}","backend\categoryController@edit");
	// do edit category
	Route::post("category/edit/{id}","backend\categoryController@do_edit");
	// add category
	Route::get("category/add","backend\categoryController@add");
	// do add category
	Route::post("category/add","backend\categoryController@do_add");
	// delete
	Route::get("category/delete/{id}","backend\categoryController@delete");
	// cart
	Route::get('muahang/{id}/{tensanpham}',['as'=>'muahang','uses'=>"backend\cartController@muahang"]);
});
	// =================
	// frondend
	// trang dau tien
Route::get('/', function () {
    return view('frontend.home');
 });
// ===============
	// Route::get('/', function () {
 //    return view('frontend.views_detail');
// });
	// Route::get('/', function () {
		
 //    return view('frontend.product_detail');
	// });
	// chi tiết tin tuc
	Route::get('news/detail/{id}',function($id){
		$data["id"] = $id;
		return view('frontend.views_detail',$data);
	});
	Route::get('news/',function(){
		return view('frontend.news');
		
	});
	Route::get('product/',function(){
		return view('frontend.product');
	});
	//hien thi danh sach san pham
	//chi tiet san pham
	Route::get('product/detail/{id}',function($id){
		$data['id'] = $id;
		//goi view
		return view('frontend.product_detail',$data);
		});
	// // gio hang
	// Route::get('giohang',function(){
	// 	return view("frontend.cart");
	// });
// cart
	Route::get('muahang/{id}/',"backend\cartController@muahang");
	// gio hang
	Route::get('giohang',['as'=>'giohang','uses'=>'backend\cartController@giohang']);
	Route::get('xoa/{id}','backend\cartController@xoa');
	// Route::get('search','backend\searchController@search');
	Route::get('search',function(){
		return view('frontend.search');
	});



