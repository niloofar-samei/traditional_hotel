<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/hotel', 'App\Http\Controllers\RoomController');
Route::resource('/guest', 'App\Http\Controllers\GuestController');

Route::get('/reservation/{room_number}', 'App\Http\Controllers\GuestController@reservation')->name('reservation');
Route::get('/dashbord', 'App\Http\Controllers\GuestController@dashbord');


