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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plan', 'PlanController@list');
Route::get('/plan/{id}', 'PlanController@detail');
Route::post('/plan', 'PlanController@add');

Route::get('/group/{id}', 'GroupController@detail');
Route::post('/group/{id}/measure', 'GroupController@measure');
Route::post('/group/{id}/edit', 'GroupController@edit');
Route::delete('/group/{id}', 'GroupController@delete');

Route::get('/indicator/{id}', 'IndicatorController@detail');
Route::post('/indicator/{id}/measure', 'IndicatorController@measure');
