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
    return view('landing');
});


Route::get('/account', function () {
    return view('users.account');
});

Route::get('/contact', function () {
    return view('users.contact_us');
});

Route::get('/about', function () {
    return view('users.about_us');
});

Route::get('/user', function () {
    return view('layouts.user_layout');
});

Route::get('/admin', function () {
    return view('layouts.admin_layout');
});


Route::post('/user/registration', 'UserController@store')->name('registration');
