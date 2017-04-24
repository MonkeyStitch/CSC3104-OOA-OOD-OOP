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
    Route::get('/report-cane-truck', 'HomeController@report');

    Route::get('/work-table', 'HomeController@work');


    Route::group([
        'prefix' => 'managements'
    ], function () {

        // owner


        // members
        Route::resource('members', 'driversController');


        // drivers
        Route::resource('drivers', 'driversController');


        // trunk
        Route::resource('trunk', 'TrunkController');


        // sugarcane
        Route::resource('sugarcane', 'TrunkController');


    });









//
//    // owner
//    Route::group([
//        'middleware' => ['owner'],
//    ], function () {
//        Route::get('/dashboard', 'HomeController@index');
//
////        Route::get('report-cane-truck');
//    });
//
//    // members
//    Route::group([
//        'middleware' => ['members'],
//    ], function () {
//
//    });
//
//    // drivers
//    Route::group([
//        'middleware' => ['drivers'],
//    ], function () {
//
//    });

});