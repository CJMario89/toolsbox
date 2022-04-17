<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Language;

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

Route::middleware(['guest', 'locale'])->group(function(){
    Route::get('/', function () {
        return view('index');
    })->name('home');

    Route::get('simpleCalculator/', function () {
        return view('simpleCalculator');
    });

    Route::get('positionalConvert/', function () {
        return view('positionalConvert');
    });

    Route::get('lengthConvert/', function () {
        return view('lengthConvert');
    });

    Route::get('massConvert/', function () {
        return view('massConvert');
    });

    Route::get('capacityConvert/', function () {
        return view('capacityConvert');
    });

    Route::get('exchangeRateConvert/', function () {
        return view('exchangeRateConvert');
    });


    Route::get('hash/', function () {
        return view('hash');
    });
    Route::get('endecode/', function () {
        return view('endecode');
    });
    Route::get('hmacHash/', function () {
        return view('hmacHash');
    });
    Route::get('endecrypt/', function () {
        return view('endecrypt');
    });

    Route::get('CsvToJson/', function () {
        return view('CsvToJson');
    });
    Route::get('JsonToCsv/', function () {
        return view('JsonToCsv');
    });
    Route::get('fileConvert/', function () {
        return view('fileConvert');
    });

    Route::get('WordToPDF/', function () {
        return view('WordToPDF');
    });

    Route::get('setLocale/{locale}', [Language::class, 'setLanguage']);
});

Route::get('metaverse/', function () {
    return view('metaverse');
});