<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.index');
});

Route::get('/index','PageController@index')->name('index');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact',['as'=>'contact.send', 'uses' => 'ContactController@sendContact']);

Route::get('/shipping','PageController@shipping')->name('shipping');
Route::get('/terms','PageController@term')->name('terms');

Route::get('/all-product', 'PageController@all')->name('allProduct');

Route::get('/your-cart','CartController@show')->name('your-cart');
Route::post('your-cart/addItem', 'CartController@AddToCart')->name('addItem');
Route::get('/your-cart/removeItem/{rowId}', 'CartController@deleteItem')->name('removeItem');
Route::get('your-cart/removeAllItem', 'CartController@removeAll')->name('removeAllItem');
Route::get('/your-cart/search/{productId}', 'CartController@search')->name('searchItem');
Route::post('your-cart/update/{rowId}', 'CartController@update')->name('updateItem');
Route::post('filter', 'SearchController@filter');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'my','middleware' => 'auth'], function () {
    Route::get('logout', 'Auth\LogOutController@logout')->name('logout');
    Route::get('order-history', 'OrderController@showHistory')->name('order-history');
    Route::post('checkout','OrderController@checkout')->name('checkout');

});

//Seach 
Route:: get('json/product' , ['as'=>'all-product-json','uses'=>'SearchController@index']);
Route:: get('result-for/{type}/{name}', ['as' => 'search', 'uses' => 'SearchController@showResult']);


Route::get('/admin/login', 'AdminAuth\LoginController@showLoginForm');
Route::post('/admin/login', 'AdminAuth\LoginController@login');
Route::get('/admin/logout', 'AdminAuth\LogOutController@logout')->name('admin.logout');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
	Route::get('/','AdminController@index')->name('admin.index');
	Route::get('/category', 'CategoryController@index')->name('admin.category.index');
	Route::post('/category', 'CategoryController@store')->name('admin.category.store');
	Route::put('/category/{slug}/edit', 'CategoryController@update')->name('admin.category.update');
	Route::get('/category/{slug}/delete', 'CategoryController@destroy')->name('admin.category.delete');
	Route::get('/product', 'ProductController@index')->name('admin.product.index');
	Route::post('/product', 'ProductController@store')->name('admin.product.store');
	Route::put('/product/{slug}/edit', 'ProductController@update')->name('admin.product.update');
	Route::get('/product/{slug}/delete', 'ProductController@destroy')->name('admin.product.delete');
	Route::get('/order', 'OrderController@index')->name('admin.order.index');
	Route::get('/order/{id}', 'OrderController@show')->name('admin.order.show');



});
Route::get('/{slugCategory}/{slugProduct}', 'ProductController@show')->name('product.show');
Route::get('/{slugCategory}', 'CategoryController@show')->name('category.show');
/*Route::get('/care', ['as' => 'care', function () {
  return view('frontend.pages.care');
}]);*/

/*Route::get('/kitchen', ['as' => 'kitchen', function () {
  return view('frontend.pages.kitchen');
}]);*/

/*Route::get('/hold', ['as' => 'hold', function () {
  return view('frontend.pages.hold');
}]);*/









