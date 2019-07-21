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

Route::get('/graph', function () {
    return view('admin.graph');
});

Route::get('/summary', function () {
    return view('users.summary');
});

Route::get('/home', function () {
    return view('users.home');
});

Route::get('/contact', function () {
    return view('users.contact_us');
});

Route::get('/about', function () {
    return view('users.about_us');
});

Route::get('/graph', function () {
    return view('admin.graph');
});


Route::get('/user/profile', 'UserController@show')->name('users');
Route::get('/inventory', 'InventoryController@index')->name('inventory');


/* only admin pages */
Route::group(['middleware' => 'App\Http\Middleware\admin'], function () { });

/* only checker pages */
Route::group(['middleware' => 'App\Http\Middleware\checker'], function () { });

/* only contributor pages */
Route::group(['middleware' => 'App\Http\Middleware\contributor'], function () { });

/* only facilitator pages*/
Route::group(['middleware' => 'App\Http\Middleware\facilitator'], function () { });


/* user CRUD */
Route::post('/user/registration', 'UserController@store')->name('registration');
Route::post('/user/login', 'UserController@auth');
Route::get('/logout', 'UserController@logout');

/* summary */
Route::get('/summary/{id}', 'PointsController@index');
