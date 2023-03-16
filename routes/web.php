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
})->name('home');

Route::get('/ListYourCar', 'App\Http\Controllers\sellController@index')->name('sellcar');
Route::get('/LoginPage', 'App\Http\Controllers\buyerController@index')->name('login');
Route::get('/ListedCars', 'App\Http\Controllers\carController@index')->name('all_cars');
Route::get('/Contact Us', 'App\Http\Controllers\contactController@index')->name('contact');
Route::post('/Listed/Results', 'App\Http\Controllers\carController@search')->name('search');
Route::post('/Contact Us', 'App\Http\Controllers\contactController@store')->name('store');
