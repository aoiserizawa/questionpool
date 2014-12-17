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
// Route::get('/','HomeController@showQuestionList');

Route::resource('questionlist','QuestionListController');

Route::resource('addquestion', 'QuestionController');

Route::get('questiontrial', 'QuestionController@getQuestionTrial');
Route::get('questionpreview', 'QuestionController@getQuestionPreview');

Route::resource('login','SessionsController');

Route::resource('user','UsersController');






