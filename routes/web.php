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

Auth::routes([
    'login' => false,
    'register' => false,
    'reset' => false,
    'verify' => false
]);
Route::namespace('SiteControllers')->group(function (){
    Route::get('/','HomeController@home')->name('home');
});
