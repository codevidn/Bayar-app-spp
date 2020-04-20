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
// Administrator Access #START#
Route::group(['prefix' => 'app', 'middleware' => ['auth'],'middleware' => ['checkrole']], function () {
    Route::resource('/transaksi', 'TransaksiController');
    Route::resource('/dashboard', 'DashController');
    Route::resource('/siswa', 'SiswaController');
    Route::resource('/kelas', 'KelasController');
    Route::resource('/petugas', 'PetugasController');
    Route::resource('/profile', 'ProfileController');

    // Transaksi #START#
    Route::post('transaksi/update/{id}','TransaksiController@batalkan')->name('transaksi.batalkan');
    Route::get('/cari', 'SearchController@search')->name('carisiswa');
    // Transaksi #END#

    // Report #START#
    Route::get('/report', 'ReportController@index')->name('report');
    // Report #END#

});
// Administrator Access #END#

// Officer Access #START#
Route::group(['prefix' => 'app', 'middleware' => ['auth'],'middleware' => ['petugas']], function () {
    Route::resource('/transaksi', 'TransaksiController');
    Route::resource('/dashboard', 'DashController');

    // Transaksi #START#
    Route::post('transaksi/update/{id}','TransaksiController@batalkan')->name('transaksi.batalkan');
    Route::get('/cari', 'SearchController@search')->name('carisiswa');
    // Transaksi #END#
});
// Officer Access #END#

// Officer Access #START#
Route::group(['prefix' => 'app', 'middleware' => ['auth'],'middleware' => ['siswa']], function () {
    Route::resource('/profile', 'ProfileController');
    Route::get('/home', 'HomeController@index')->name('home');
});
// Officer Access #END#

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

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
