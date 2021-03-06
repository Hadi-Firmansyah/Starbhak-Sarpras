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
    return view('home/home');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/pinjamBarang', 'PeminjamanController@index');
Route::get('/pengembalianBarang', 'PengembalianController@index');

Route::post('/pinjamBarang', 'PeminjamanController@pinjam')->name('action');
Route::post('/pengembalianBarang', 'PengembalianController@pengembalian')->name('action');

Route::get('/cetak_pdf/barangs', 'BarangController@cetak_pdf');
Route::get('/export_excel/barangs', 'BarangController@export_excel');
