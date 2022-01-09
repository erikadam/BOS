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

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/buy', function () {
    return view('buy');
});
Route::get('/EventProduction', function () {
    return view('eventProduction');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/marketing', function () {
    return view('marketing');
});
Route::get('/media', function () {
    return view('media');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/venue', function () {
    return view('venue');
});
Route::get('/stream', function () {
    return view('stream');
});