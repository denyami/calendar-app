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
    return view('home');
});

Route::get('/calendar','CalendarController@index');
Route::get('/create','PlansController@create');
Route::get('/plan','PlansController@index');
Route::get('/result','CalendarController@result');

Route::post('/send','CalendarController@send');
Route::post('/plan','PlansController@store');
Route::post('/edit','PlansController@edit');
Route::post('/destroy','PlansController@destroy');

Route::resource('plans', 'PlansController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
