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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    // return $request->user();
    

});

Route::get('/antrian', 'Api\AntrianController@index');
Route::post('/antrian' , 'Api\AntrianController@store');
Route::get('/antrian/{id}', 'Api\AntrianController@show');
Route::put('/antrian', 'Api\AntrianController@update');


