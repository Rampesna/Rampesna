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
    Route::get('/services','HomeController@services')->name('services');
    Route::get('/portfolio','HomeController@portfolio')->name('portfolio');
    Route::get('/contact','HomeController@contact')->name('contact');
    Route::prefix('blog')->group(function (){
        Route::get('/','BlogController@index')->name('blog.index');
        Route::get('/show/{id}','BlogController@index')->name('blog.show');
    });
});
