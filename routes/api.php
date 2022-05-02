<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Convert;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/fileConvert/convert', [Convert::class, "convert"]);
Route::post('/WordToPDF/convert', [Convert::class, "WordToPDF"]);
Route::post('/PDFToWord/convert', [Convert::class, "PDFToWord"]);
Route::post('/ExcelToPDF/convert', [Convert::class, "ExcelToPDF"]);
Route::post('/PDFToImage/convert', [Convert::class, "PDFToImage"]);
Route::post('/WordToImage/convert', [Convert::class, "WordToImage"]);
