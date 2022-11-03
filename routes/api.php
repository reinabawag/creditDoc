<?php

use Illuminate\Http\Request;

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

Route::namespace('API')->middleware('auth.basic')->group(function () {
    Route::get('documents/docs', 'DocumentController@docs');
    Route::apiResource('documents', 'DocumentController');
});
