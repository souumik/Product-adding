<?php

use Illuminate\Support\Facades\Route;

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
    return view('product');
});

Route::get('/db', function () {
    return view('db');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('user_list','App\Http\Controllers\AdminController@get_user_list');
Route::post('save_info','App\Http\Controllers\AdminController@save_info');

Route::get('/delete_user/{id}','App\Http\Controllers\AdminController@delete_user');

Route::get('/edit_user/{id}','App\Http\Controllers\AdminController@edit_user');
Route::post('edit_info/{id}','App\Http\Controllers\AdminController@edit_info');