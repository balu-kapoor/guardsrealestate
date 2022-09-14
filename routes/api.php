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
Route::post('/contact/book-viewing','Contact@bookViewing')->name('api-bookviewing');
Route::post('/contact/book-valuation','Contact@bookValuation')->name('api-bookvaluation');
Route::post('/payments/getCrypt',  'Payments@getCrypt')->name('payments-getcrypt');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
