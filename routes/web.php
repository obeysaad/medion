<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes(['verify' => true]);


Route::group(['namespace'=>'Web'],function(){

    Route::get('/' , 'PageController@index')->name('land');;
    Route::get('doctor' , 'PageController@doctor')->name('doctor')->middleware('verified');
    Route::get('clini' , 'PageController@clini')->name('clini');
    Route::get('about' , 'PageController@about')->name('about');
    Route::get('contact' , 'PageController@contact')->name('contact');

});


Route::get('logout', 'Auth\LoginController@logout')->name('logouts');
