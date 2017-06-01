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
    return redirect( 'dashboard' );
});

Route::get( '/dashboard', 'dashboardController@index' );

Route::get( '/dashboard/modules', 'dashboardController@modules' );

Route::get( '/dashboard/settings', 'dashboardController@settings' );

Route::get( '/dashboard/users', 'dashboardController@users' );