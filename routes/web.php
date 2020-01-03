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

use Illuminate\Support\Facades\Hash;

Route::get('tryMe',function (){
    $pass = Hash::make("123123");
    return $pass;
});
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);
Route::namespace('SiteControllers')->group(function (){
    Route::get('/','BlogController@index')->name('blog.index');
    Route::get('/page/{page}','BlogController@index')->name('blog.page');

    Route::get('/category/{id}/page/{page}','BlogController@getLikeCategory')->name('blog.category.page');

    Route::post('/search','BlogController@searchPost')->name('blog.search');
    Route::get('/search/{keyword}/page/{page}','BlogController@searchPage')->name('blog.search.page');

    Route::get('/show/{id}','BlogController@show')->name('blog.show');

    Route::get('/comment','BlogController@setNewComment')->name('blog.set-comment');

    Route::get('/hakkimda','HomeController@hakkimda')->name('hakkimda');
    Route::get('/services','HomeController@services')->name('services');
    Route::get('/portfolio','HomeController@portfolio')->name('portfolio');

    Route::get('/contact','HomeController@contact')->name('contact');
    Route::post('/contact','HomeController@contactPost')->name('contact-post');
});

Route::namespace('AuthControllers')->prefix('auth')->group(function (){
    Route::get('/','HomeController@dashboard')->name('admin.dashboard');
    Route::get('/dashboard','HomeController@dashboard')->name('admin.dashboard');

    Route::get('/blog','HomeController@blog')->name('admin.blog');
});
