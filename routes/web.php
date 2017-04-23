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
    return view('layouts.admin');
});

Auth::routes();


Route::group([
    'middleware' => ['web', 'auth'],
], function () {


    Route::get('/dashboard', 'HomeController@index');


//    Route::group();



    // owner
    Route::group([
        'middleware' => ['owner'],
    ], function () {
        Route::get('/dashboard', 'HomeController@index');

//        Route::get('report-cane-truck');
    });

    // members
    Route::group([
        'middleware' => ['members'],
    ], function () {

    });

    // drivers
    Route::group([
        'middleware' => ['drivers'],
    ], function () {

    });

});