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

//Participant routes

//insert
Route::post('participant', 'ParticipantController@store');

//update
Route::put('participant', 'ParticipantController@store');


//Question routes

//get random 10 questions
Route::get('questions', 'QuestionController@index');

//get answer
Route::get('answer/{id}', 'QuestionController@show');
