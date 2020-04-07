<?php

use Illuminate\Support\Facades\Route;

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
//PAGES
Route::get('/', 'PageController@index');
Route::get('/search', 'PageController@index');
Route::post('/results', 'PageController@results');
Route::get('/search/{keyword}', 'PageController@search');

//ACCOUNTS
Route::get('/account', 'AccountController@index');
//ACCOUNTS//PROJECTS
Route::get('/account/projects', 'ProjectController@index');
Route::get('/account/projects/create', 'ProjectController@create');
Route::post('/account/projects', 'ProjectController@store');
Route::get('/account/projects/{id}', 'ProjectController@show');
Route::get('/account/projects/{id}/edit', 'ProjectController@edit');
Route::put('/account/projects/{id}', 'ProjectController@update');
Route::delete('/account/projects/{id}/delete', 'ProjectController@destroy');

//INSPIRATIONS
Route::get('/projects/inspiration/{image_info}/add', 'InspirationController@create')->middleware('auth');
Route::get('/projects/inspiration/{image_info}/delete', 'InspirationController@destroy')->middleware('auth');

Auth::routes();
