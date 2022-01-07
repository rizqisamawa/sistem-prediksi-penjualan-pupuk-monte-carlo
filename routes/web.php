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


Route::get('/','AuthController@login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');


Route::get('/dashboard','AuthController@db');

//Data Jenis Pupuk
    Route::get('/djp','DJPController@djp');
    Route::get('/createdjp','DJPController@createdjp');
    Route::post('/postcdjp','DJPController@postcdjp');
    Route::get('/djp/{id}/editdjp','DJPController@editdjp');
    Route::post('/djp/{id}/postedjp','DJPController@postedjp');        
    Route::get('/djp/{id}/hapusdjp','DJPController@hapusdjp');
//Data Jenis Pupuk

//Data Penjualan Pupuk
    Route::get('/dpp','DPPController@dpp');
    Route::get('/createdpp','DPPController@createdpp');
    Route::post('/hitung','DPPController@hitung');
    Route::post('/perhitungan','DPPController@perhitungan');
//Data Penjualan Pupuk

//Bilangan Acak
    Route::get('/ba','BAController@ba');
    Route::post('/hitungba','BAController@hitungba');
    Route::post('/simpanba','BAController@simpanba');
//Bilangan Acak

// Hasil Prediksi
    Route::get('/hp','HPController@hp');
// Hasil Prediksi