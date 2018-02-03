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

Auth::routes();

Route::get('/', function () {
    return view('index');
});
Route::get('/tables', function () {
    return view('tables-basic');
});

//this routes are for the admin

Route::prefix('user')->group(function (){

    Route::get('add_user','UsersController@create');
    Route::post('new_user','UsersController@store');
    Route::get('user/{id}/edit','UsersController@edit');
    Route::get('user/{id}/show','UsersController@show');
    Route::get('user/{id}/supprimer','UsersController@destroy');

    route::resource('users','UsersController');

    });

Route::prefix('quiz')->group(function (){


    Route::get('quizzes','QuizController@index');
    Route::get('ajouter_quiz','QuizController@create');
    Route::post('nouveau_quiz','QuizController@store');
    Route::get('{id}/edit','QuizController@edit');
    Route::get('{id}/show','QuizController@show');
    Route::get('{id}/supprimer','QuizController@destroy');

    Route::resource('quizzes','QuizController');
});



Route::group(['middleware'=>'Authentifier'],function(){

    Route::get('/page', function () {
        return view('welcome');
    });

});

