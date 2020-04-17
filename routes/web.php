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
    Route::resource('/profile', 'ProfileController');

    // Transaksi #START#
    Route::post('transaksi/update/{id}','TransaksiController@batalkan')->name('transaksi.batalkan');
    Route::get('/cari', 'SearchController@search')->name('carisiswa');
    // Transaksi #END#

    // Report #START#
    Route::get('/report', 'ReportController@index')->name('report');
    // Report #END#

});
// Help #START#
Route::group(['prefix' => 'help'], function () {
    Route::get('/', 'HelpController@index')->name('help');
    Route::get('/login', 'HelpController@login')->name('hlogin');
    Route::get('/data/siswa', 'HelpController@dsiswa')->name('hsiswa');
    Route::get('/data/kelas', 'HelpController@dkelas')->name('hkelas');
    Route::get('/report', 'HelpController@report')->name('hreport');
    Route::get('/transaksi', 'HelpController@tran')->name('htran');
});
// Help #END#

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
