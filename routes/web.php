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

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/chat', 'App\Http\Controllers\PusherController@index')->name('chat'); //   ->name('chat') == привязывает имя используемое в видах! использование контроллера через href="{{route('chat')}}" 
Route::post('/broadcast', 'App\Http\Controllers\PusherController@broadcast'); //украв с гайда хи хи даже не старался
Route::post('/receive', 'App\Http\Controllers\PusherController@receive');

Route::get('/fuckyou', function () {
    return view('fuckingshit');
});