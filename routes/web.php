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

// Authentication routes...

Auth::routes();

// Status module routes...

Route::group(['prefix' => 'status'], function () {

    Route::get('/', 'StatusController@index')->name('status_index');
    Route::get('create', 'StatusController@create')->name('status_create');
    Route::post('store', 'StatusController@store')->name('status_store');
    Route::get('{id}/show', 'StatusController@show')->name('status_show');
    Route::get('{id}/edit', 'StatusController@edit')->name('status_edit');
    Route::post('{id}/update', 'StatusController@update')->name('status_update');
    Route::get('{id}/destroy', 'StatusController@destroy')->name('status_destroy');

});

// Task module routes...

Route::group(['prefix' => 'task'], function () {

    Route::get('/', 'TaskController@index')->name('task_index');
    Route::get('create', 'TaskController@create')->name('task_create');
    Route::post('store', 'TaskController@store')->name('task_store');
    Route::get('{id}/show', 'TaskController@show')->name('task_show');
    Route::get('{id}/edit', 'TaskController@edit')->name('task_edit');
    Route::post('{id}/update', 'TaskController@update')->name('task_update');
    Route::get('{id}/destroy', 'TaskController@destroy')->name('task_destroy');

});
