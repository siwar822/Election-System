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

Route::get('/admin', function () {
    return view('admin.dashbord');
});
Route::get('/candidates', function () {
    return view('admin.candidates');
});
Route::post('/demandestr','Admin\DemandeController@store')->name('store');

Auth::routes();

Route::get('/home', 'AppController@home')->name('home')->middleware('auth');


Route::middleware('auth')->group(function () {


 

    Route::group([
                'middleware' => 'admin',
                'namespace' => 'Admin',
                'prefix' => 'admin'
            ], function () {

                Route::prefix('requests')->group(function () {
                    Route::get('all', 'demandecontroller@index');
                    Route::get('waiting', 'demandeController@waiting');
                    Route::get('approved', 'demandeController@approved');
                    Route::get('rejected', 'demandeController@rejected');
                });

          
Route::resource('/demande','DemandeController');
Route::get('/demandeac/{id}','DemandeController@accept')->name('accept');
Route::get('/demanderej/{id}','DemandeController@refuse')->name('refuse');
Route::any('/demandephot/{id}','DemandeController@photo')->name('photo');
            });
});
