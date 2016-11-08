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

Route::get('/index', ['as' => 'index', function () {
  return view('frontend.pages.index');
}]);

Route::get('/about', ['as' => 'about', function () {
  return view('frontend.pages.about');
}]);

Route::get('/care', ['as' => 'care', function () {
  return view('frontend.pages.care');
}]);

Route::get('/offer', ['as' => 'offer', function () {
  return view('frontend.pages.offer');
}]);

Route::get('/wishlist', ['as' => 'wishlist', function () {
  return view('frontend.pages.wishlist');
}]);

Route::get('/contact', ['as' => 'contact', function () {
  return view('frontend.pages.contact');
}]);

Route::get('/single', ['as' => 'single', function () {
  return view('frontend.pages.single');
}]);

Route::get('/kitchen', ['as' => 'kitchen', function () {
  return view('frontend.pages.kitchen');
}]);

Route::get('/hold', ['as' => 'hold', function () {
  return view('frontend.pages.hold');
}]);

Route::get('/login', ['as' => 'login', function () {
  return view('frontend.pages.login');
}]);
