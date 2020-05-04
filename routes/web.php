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
    return view('welcome');
});
Route::get('/','HomeController@index');

//---LOGIN ADMIN---
Route::get('/admin/login','AuthController@login')->name('admin.login');
Route::post('/admin/postlogin', 'AuthController@postlogin')->name('admin.postLogin');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');

Route::get('/login','LoginController@login');
Route::post('/postlogin','LoginController@postlogin')->name('user.postLogin');


//----CRUD DATA PRODUCT DAN MIDDLEWARE---
Route::group(['middleware'=>'admin'], function (){
    Route::get('/products', 'ProductsController@index');//untuk mengarahkan ke /products
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::post('/products/create', 'ProductsController@create'); //untuk create atau menambahkan data
    Route::get('/products/{id}/edit', 'ProductsController@edit'); //untuk update atau edit
    Route::post('/products/{id}/update', 'ProductsController@update'); //menangkap data dari edit blade
    Route::get('/products/{id}/delete', 'ProductsController@delete'); //delete data
    Route::get('/products/{id}/gambar', 'ProductsController@gambar');
    Route::get('/products/{id}/diskon', 'ProductsController@diskon');
    Route::post('/products/diskon_insert', 'ProductsController@diskon_insert');
});