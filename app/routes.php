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

Route::post('choicecount', array(
            'as'=>'questionpreview.choiceCount',
            'uses'=>'QuestionListController@countChoices'
));

Route::resource('addquestion', 'QuestionController');

Route::get('questiontrial', 'QuestionController@getQuestionTrial');
Route::get('questionpreview', 'QuestionController@getQuestionPreview');
//Sessions
Route::post('log-in', 'SessionsController@store');
Route::get('loginpage', 'SessionsController@create');
Route::get('log-out', 'SessionsController@destroy');
Route::get('forgotpass', 'UsersController@forgotpass');
Route::get('/account/recover/{code}', array(
            'as'=>'account-recover',
            'uses'=> 'UsersController@getRecover'
));
Route::post('retrievepass', 'UsersController@retrievepass');

//Users
Route::post('register', 'UsersController@store');
Route::get('registerpage', 'UsersController@create');
Route::get('usersettings', 'UsersController@settings');
Route::post('updateaccount', 'UsersController@update');









