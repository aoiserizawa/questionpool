<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'HomeController@showBase');

Route::resource('questionlist','QuestionListController');

Route::resource('addquestion', 'QuestionController');

Route::get('questiontrial', 'QuestionController@getQuestionTrial');
Route::get('questionpreview', 'QuestionController@getQuestionPreview');
//Sessions
Route::post('log-in', 'SessionsController@store');
Route::get('loginpage', 'SessionsController@create');
Route::get('log-out', 'SessionsController@destroy');
//Users
Route::post('register', 'UsersController@store');
Route::get('registerpage', 'UsersController@create');
Route::get('usersettings', 'UsersController@settings');









