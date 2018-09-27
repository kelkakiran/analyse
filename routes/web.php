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

Route::get('/', 'IndexController@index');


Auth::routes();

Route::middleware(['role:recruiter', 'profile-verified'])->group(function () {

    Route::get('/register/step-2', 'Auth\StepTwoDetails@index');

    Route::post('/register/step-2', 'Auth\StepTwoDetails@store');
});


Route::get('/dashboard', 'HomeController@index')
    ->middleware(['auth', 'verify-profile'])
    ->name('home');


Route::middleware(['role:recruiter', 'verify-profile'])->group(function () {

    Route::get('/post-job', 'Recruiter\PostNewJob@index');
    Route::post('/post-job', 'Recruiter\PostNewJob@store');
});


Route::middleware(['role:job-seeker', 'verify-profile'])->group(function () {

    Route::any('/seeker', 'JobSeeker\DemoController@index');
});
