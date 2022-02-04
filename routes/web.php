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
    return view('index');
});

Route::get('simpleCalculator', function () {
    return view('simpleCalculator');
});

Route::get('positionalConvert', function () {
    return view('positionalConvert');
});

Route::get('lengthConvert', function () {
    return view('lengthConvert');
});

Route::get('weightConvert', function () {
    return view('weightConvert');
});

Route::get('exchangeRateConvert', function () {
    return view('exchangeRateConvert');
});


Route::get('hash', function () {
    return view('hash');
});