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
    return redirect("/login");
});

Route::prefix('admin')->group(function(){
	Route::middleware('auth')->group(function(){
		Route::get('dashboard','admins\AdminController@index')->name('dashboard');

		Route::get('product','admins\ProductController@index')->name('admin.product');
		Route::get('product/test','admins\ProductController@test')->name('admin.test');
		Route::post('product/store','admins\ProductController@store')->name('admin.product.store');
		Route::delete('product/{id}','admins\ProductController@destroy')->name('admin.product.delete');
		Route::put('product/{id}','admins\ProductController@update')->name('admin.product.update');
		Route::get('productDetail/{id}','admins\ProductController@createDetailProduct')->name('admin.create.detailProduct');
		Route::get('product.image/{id}','admins\ProductController@image')->name('admin.product.image');

		Route::get('category','admins\CategoryController@index')->name('admin.category');
		Route::post('category/store','admins\CategoryController@store')->name('admin.category.store');
		Route::delete('category/{id}','admins\CategoryController@destroy')->name('categories.destroy');
		Route::put('category/{id}','admins\CategoryController@update');

		Route::get('manufacture','admins\ManufactureController@index')->name('admin.manufacture');
		Route::post('manufacture/store','admins\ManufactureController@store')->name('admin.manufacture.store');
		Route::delete('manufacture/{id}','admins\ManufactureController@destroy');
		Route::put('manufacture/{id}','admins\ManufactureController@update');

		Route::get('color','admins\ColorController@index')->name('admin.color');
		Route::post('color/store','admins\ColorController@store')->name('admin.color.store');
		Route::delete('color/{id}','admins\ColorController@destroy');
		Route::put('color/{id}','admins\ColorController@update');
		Auth::routes();
	});
	
});

Route::get('shop','shops\ShopController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
