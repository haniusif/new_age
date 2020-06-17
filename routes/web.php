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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/passport', 'HomeController@passport')->name('passport');
Route::get('/pusher', 'HomeController@pusher')->name('pusher');
Route::get('/pusher/test', 'HomeController@pusher_test')->name('pusher.test');
Route::get('/firebase', 'HomeController@firebase')->name('firebase');
Route::get('/push', 'HomeController@push')->name('push');



Route::post('formSubmit','PostController@formSubmit');



