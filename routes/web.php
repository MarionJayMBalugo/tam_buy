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
    return view('home');
});
Route::post('/','pageController@home')->name('home');

Route::get('/login', 'pageController@loginForm')->name('user.loginForm');
Route::get('/register', 'pageController@registerForm')->name('signup');
Route::post('/login', 'pageController@login')->name('user.login');
Route::post('/register', 'pageController@register')->name("user.register");

Route::get('/logout', 'usersController@logout')->name("user.logout");
Route::get('/home', 'usersController@home')->name('user_home');
Route::get('/paiditems', 'usersController@paidItems')->name("user_paid_items");
Route::get('/cart', 'usersController@cart')->name("user_cart");
Route::get('/pendings', 'usersController@pendings')->name("user_pendings");
Route::get('/search', 'usersController@search')->name("user_search");

Route::get('/admin', 'adminController@home')->name('admin_home');
Route::post('/admin/search', 'adminController@search')->name("admin_search");
Route::get('/admin/pendings', 'adminController@pendings')->name('admin_pendings');
Route::get('/admin/product', 'adminController@addProduct')->name('admin_addProduct');
Route::post('/admin/product', 'adminController@create')->name('admin_create');
Route::get('/admin/paiditems', 'adminController@paidItems')->name("admin_paid_items");
Route::get('/admin/update/{id}', 'adminController@updateForm')->name("admin_updateForm");
Route::get('/admin/delete/{id}', 'adminController@deleteForm')->name("admin_deleteForm");
Route::post('/admin/update/{id}', 'adminController@update')->name("admin_update");
Route::get('/admin/delete/{id}', 'adminController@delete')->name("admin_delete");

Route::get('/profile', function() {
    return view('user.profile');
})->name('user_profile');
