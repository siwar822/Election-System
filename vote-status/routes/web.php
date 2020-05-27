<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->group(function () {

    Route::get('/home', 'AppController@home')->name('home');
    Route::resource('/candidat', 'CandidatController');
    Route::resource('/user', 'UserController');
    Route::group(['middleware'=> 'votingstatus'],function () {
        //Route::get('/user','UserController@update');
        //Route::resource('/user', 'UserController');
        Route::get('/confirmation','CandidatController@confirmer')->name('candidat.confirmation');
    });
});