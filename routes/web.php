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

Route::get('/index', 'DrawingController@index');
Route::get('/map', 'DrawingController@map');
Route::get('/about', 'DrawingController@about');

Route::get('/city/{city}','DrawingController@show')->name('city');


Route::get('/buy/{city}', function($city) {
	return view('buy', ['city' => $city]);
});
Route::post('/sendemail','EmailController@sendemail');