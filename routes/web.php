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

// Route::get('/', 'HomeController@home');
// Route::get('/data-tables', 'HomeController@dataTables');

Route::get('/pertanyaan', 'QuestionController@index');
Route::get('/pertanyaan/{id}', 'QuestionController@detail');
Route::get('/pertanyaan/create', 'QuestionController@create');
Route::get('/pertanyaan/{id}/edit', 'QuestionController@edit');

Route::post('/pertanyaan/store', 'QuestionController@store');
Route::put('/pertanyaan/{id}', 'QuestionController@update');
Route::delete('/pertanyaan/{id}', 'QuestionController@delete');


// Route::get('/jawaban/{pertanyaan_id}', 'AnswerController@index');
Route::post('/jawaban/{pertanyaan_id}', 'AnswerController@store');
