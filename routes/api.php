<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('weather/get','WeatherController@indexid');
Route::post('weather/post','WeatherController@store');
Route::get('weather/{id}','WeatherController@findget');
Route::get('weather/delete/{id}','WeatherController@destroy');

//Route::resource('weather', 'WeatherController');
