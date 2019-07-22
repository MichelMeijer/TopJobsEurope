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

Route::get('/', 'MainController@index');

Route::get('/jobs/{id}', 'JobsController@showJob');

Route::get('/api', 'ApiController@test');

Route::get('/api/jobs', 'ApiController@index');

Route::post('/api/jobs', 'ApiController@createJob');

Route::get('/api/jobs/create', 'ApiController@createJobForm');
