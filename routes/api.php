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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register','MyController@register');
Route::get('register','MyController@register');

Route::post('login','MyController@login');
Route::get('login','MyController@login');

Route::post('edit/{id}','MyController@edit');
Route::get('edit/{id}','MyController@edit');