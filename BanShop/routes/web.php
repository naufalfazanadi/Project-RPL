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
// use App\Ban;

Route::get('/', 'FrontController@index');
Route::get('produk', 'ProdukController@index');
Route::get('single/{id_ban}', 'ProdukController@single');
Route::get('konfirmasi', function() { return view('konfirmasi'); });
Route::get('faq', function() { return view('faq'); });
Route::get('kontak', function() { return view('kontak'); });

Route::get('admin', 'AdminController@index');

// Authentication
Auth::routes();

Route::get('/home', 'HomeController@index');
