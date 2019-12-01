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

Route::get('/jobs/create', 'JobsController@createJobForm')->middleware('auth');
Route::get('/update/jobs/{id}', 'JobsController@edit')->middleware('auth');


Route::get('/jobs/{id}', 'JobsController@showJob');

Route::get('/jobs/cityfilter/{city}', 'MainController@getJobs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/{id}', 'UserController@showUser');

route::get('/about', function() {
    return view('about');
});

route::get('/register/overview', function() {
    return view('registerOverview');
});

route::get('/register/recruiter', function() {
    return view('auth/registerRecruiter');
});

route::get('/register/recruitment_services', function() {
    return view('auth/registerRecruitmentService');
});

route::get('/register/job_search', function() {
    return view('auth/registerJobSearch');
});
