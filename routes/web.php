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
    return view('welcome');
});

Route::group(['prefix' => '/kuliner'], function(){
    Route::get('/', 'KulinerController@index')->name('view-kuliner');
    Route::get('/show/{id}','KulinerController@show')->name('show-kuliner');
    Route::post('/store',"KulinerController@store")->name('store-kuliner');
    Route::post('/update/{id}','KulinerController@update')->name('update-kuliner');
    Route::get('/delete/{id}','KulinerController@destroy')->name('destroy-kuliner');
});

Route::group(['prefix' => '/wisata'], function(){
    Route::get('/', 'WisataController@index')->name('view-wisata');
    Route::get('/show/{id}','WisataController@show')->name('show-wisata');
    Route::post('/store',"WisataController@store")->name('store-wisata');
    Route::post('/update/{id}','WisataController@update')->name('update-wisata');
    Route::get('/delete/{id}','WisataController@destroy')->name('destroy-wisata');
});

Route::group(['prefix' => '/kue-artis'], function(){
    Route::get('/', 'KueArtisController@index')->name('view-kueartis');
    Route::get('/show/{id}','KueArtisController@show')->name('show-kueartis');
    Route::post('/store',"KueArtisController@store")->name('store-kueartis');
    Route::post('/update/{id}','KueArtisController@update')->name('update-kueartis');
    Route::get('/delete/{id}','KueArtisController@destroy')->name('destroy-kueartis');
});