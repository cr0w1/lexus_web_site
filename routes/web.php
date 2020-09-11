<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('site.home');

Route::get('/registation', function () {
    return view('site.registration');
})->name('site.registration');

// login

Route::get('/login', 'LoginController@index')->name('site.login');

Route::post('/auth', 'LoginController@auth')->name('site.auth');

Route::get('/logout', 'LoginController@logout')->name('site.logout');

// User
Route::post('/saveUser', 'UserController@store')->name('site.saveUser');

Route::post('/verifyEmail', 'UserController@verifyEmail')->name('site.verifyEmai');

Route::get('/user', 'UserController@show')->name('site.getUser');

Route::post('/update', 'UserController@update')->name('site.update');

// Car
Route::get('/details', 'CarController@show')->name('site.details');

Route::get('/newCar', 'CarController@index')->name('site.newCar');

Route::post('/saveNewCar', 'CarController@store')->name('site.saveNewCar');

Route::get('/carUpdate', 'CarController@showCarUpdate')->name('site.carUpdate');

Route::post('/updateCar', 'CarController@update')->name('site.updateCar');

Route::get('/delte', 'CarController@deleteCar')->name('site.deleteCar');
