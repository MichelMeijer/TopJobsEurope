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

//Implement this later
Route::get('/jobs', 'ApiController@index');

//should be deleted??
Route::get('/', 'ApiController@test');

Route::post('/jobs', 'ApiController@store');

Route::delete('/jobs/{id}', 'ApiController@destroy');

Route::patch('/jobs/{id}', 'ApiController@update');







