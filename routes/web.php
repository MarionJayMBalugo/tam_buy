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

// Route::get('/', function () {
//     return view('landingPage');
// });
// Route::post('/','pageController@home')->name('home');

// Route::get('/login', 'pageController@loginForm')->name('loginForm');
// Route::get('/register', 'pageController@registerForm')->name('signup');
// Route::post('/login', 'pageController@login')->name('user.login');
// Route::post('/register', 'pageController@register')->name("user.register");

// Route::get('/logout', 'usersController@logout')->name("user.logout");
// Route::get('/home', 'usersController@home')->name('user_home');
// Route::get('/paiditems', 'usersController@paidItems')->name("user_paid_items");
// Route::get('/cart', 'usersController@cart')->name("user_cart");
// Route::get('/pendings', 'usersController@pendings')->name("user_pendings");
// Route::get('/search', 'usersController@search')->name("user_search");

// Route::get('/admin', 'adminController@home')->name('admin_home');
// Route::post('/admin/search', 'adminController@search')->name("admin_search");
// Route::get('/admin/pendings', 'adminController@pendings')->name('admin_pendings');
// Route::get('/admin/product', 'adminController@addProduct')->name('admin_addProduct');
// Route::post('/admin/product', 'adminController@create')->name('admin_create');
// Route::get('/admin/paiditems', 'adminController@paidItems')->name("admin_paid_items");


//marion login routes


// Route::get('/home', function () {
//     return view('user.home');
// })->name('user_home');

// Route::get('/profile', function() {
//     return view('user.profile');
// })->name('user_profile');


// Auth::routes();

// Route::get('/home', 'HomeController@home')->name('home');

// Route::get('/', 'HomeController@login')->name('user.login');

// Route::get('/register', 'HomeController@register')->name('user.register');

Route::group(['middleware' => 'guest:user'], function () {
    //User: Login
    Route::get('/', function (){
        return view('landingPage');
    });
    Route::get('/login', 'UserLoginController@showLogin')->name('guest.loginForm');
    Route::post('/login', 'UserLoginController@login')->name('login');
    Route::get('/register', 'UserLoginController@showRegister')->name('guest.registerForm');
    Route::post('/register', 'UserLoginController@register')->name('guest.register');

});




Route::group(['middleware' => 'auth:user'], function() {

    //user Routes
    Route::get('/userhome', 'pageController@usersHome')->name('users.home');

    //Admin Routes
    Route::get('/adminhome', 'pageController@adminHome')->name('admins.home');

    //User and Admin Routes
    Route::get('/logout', 'UserLoginController@logout')->name('logout');

});




// Route::group(['middleware' => 'auth:admin'], function() {

//     Route::get('/adminhome', 'pageController@adminsHome')->name('admins.home');

// });









