<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'UserController@index')->name('site.home');

Route::get('/login', function () {
    return view('site.login');
})->name('site.login');

Route::get('/registation', function () {
    return view('site.registration');
})->name('site.registration');


// User
Route::post('/saveUser', 'UserController@store')->name('site.saveUser');

Route::post('/verifyEmail', 'UserController@verifyEmail')->name('site.verifyEmai');

// Car
Route::get('/details', function () {
    return view('site.details');
})->name('site.details');

Route::get('/newCar', 'CarController@index')->name('site.newCar');

Route::post('/saveNewCar', 'CarController@store')->name('site.saveNewCar');
