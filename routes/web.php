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

Route::get('/offer', 'PageController@offer')->name('offer');

Route::get('/your-cart','CartController@show')->name('your-cart');
Route::post('your-cart/addItem', 'CartController@AddToCart')->name('addItem');
Route::get('/your-cart/removeItem/{rowId}', 'CartController@deleteItem')->name('removeItem');
Route::get('your-cart/removeAllItem', 'CartController@removeAll')->name('removeAllItem');



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






Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'my'], function () {
    Route::get('logout', 'Auth\LogOutController@logout')->name('logout');

});

