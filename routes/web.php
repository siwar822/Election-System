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

Route::get('/', 'AppController@index')->name('welcome');
// Route::get('/about', 'AppController@about');
// Route::get('/team', 'AppController@team');

Auth::routes();


Route::middleware('auth')->group(function () {

    Route::get('/home', 'AppController@home')->name('home');
    Route::resource('/candidat', 'CandidatController');

    Route::group([
                'middleware' => 'admin',
                'namespace' => 'Admin',
                'prefix' => 'admin'
            ], function () {

                Route::prefix('bookings')->group(function () {
                    Route::get('today', 'BookingController@today');
                    Route::get('coming', 'BookingController@coming');
                    Route::get('history', 'BookingController@history');
                });

                Route::resource('meals', 'MealsController');

            });
});
