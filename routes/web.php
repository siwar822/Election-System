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
    return view('landing');
});
/*Route::get('/dashboard', function () {
    return view('admin.dashbord');
});*/

Route::resource('/candidates', 'CandidatController');




Route::get('dashboard', 'CandidatController@dashboard');


Auth::routes();

Route::get('/home', 'AppController@home')->name('home')->middleware('auth');

