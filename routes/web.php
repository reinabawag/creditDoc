<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
    Route::get('/classification', 'ClassificationController@index')->name('classification.index');
    Route::get('/classification/create', 'ClassificationController@create')->name('classification.create');
    Route::post('/classification', 'ClassificationController@store')->name('classification.store');
    Route::get('/classification/{classification}/edit', 'ClassificationController@edit')->name('classification.edit');
    Route::match(['put', 'patch'], '/classification/{classification}', 'ClassificationController@update')->name('classification.update');
    Route::delete('/classification/{classification}', 'ClassificationController@destroy')->name('classification.destroy');

    // Customer route group
    Route::prefix('customer')->name('customer.')->group(function() {
        Route::get('/', 'CustomerController@index')->name('index');
        Route::post('customer', 'CustomerController@store')->name('store');
        Route::get('{customer}/edit', 'CustomerController@edit')->name('edit');
        Route::match(['put', 'patch'], '{customer}', 'CustomerController@update')->name('update');
        Route::delete('{customer}', 'CustomerController@delete')->name('destroy');
    });

    Route::resource('documents', 'DocumentController')->except([
        'create'
    ]);
});