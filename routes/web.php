<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('dosen','DosenController');
Route::resource('mahasiswa','MahasiswaController');
Route::resource('wali','WaliController');
Route::resource('hobi','HobiController');