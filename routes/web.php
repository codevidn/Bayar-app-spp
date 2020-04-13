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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'app', 'middleware' => ['auth']], function () {
    Route::resource('/transaksi', 'TransaksiController');
    Route::resource('/dashboard', 'DashController');
    Route::resource('/siswa', 'SiswaController');
    Route::resource('/kelas', 'KelasController');
    Route::get('/cari', 'SearchController@search')->name('carisiswa');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
