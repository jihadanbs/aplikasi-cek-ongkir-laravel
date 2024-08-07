<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/store', 'HomeController@store')->name('store');
Route::get('/api/province/{id}/cities', 'HomeController@getCities');
Route::post('/api/cities', 'HomeController@searchCities');
