<?php


//Route::resource('/','TaskController');

Route::get('/', ['as' => 'task.index', 'uses' => 'TaskController@index']);
Route::get('/create', ['as' => 'task.create', 'uses' => 'TaskController@create']);
Route::post('/store', ['as' => 'task.store', 'uses' => 'TaskController@store']);
Route::get('/show/{task}', ['as' => 'task.show', 'uses' => 'TaskController@show']);
Route::delete('/delete/{task}', ['as' => 'task.delete', 'uses' => 'TaskController@destry']);

/*
|        | GET|HEAD  | /       | index   | App\Http\Controllers\TaskController@index   | web        |
|        | POST      | /       | store   | App\Http\Controllers\TaskController@store   | web        |
|        | GET|HEAD  | create  | create  | App\Http\Controllers\TaskController@create  | web        |
|        | DELETE    | {}      | destroy | App\Http\Controllers\TaskController@destroy | web        |
|        | PUT|PATCH | {}      | update  | App\Http\Controllers\TaskController@update  | web        |
|        | GET|HEAD  | {}      | show    | App\Http\Controllers\TaskController@show    | web        |
|        | GET|HEAD  | {}/edit | edit    | App\Http\Controllers\TaskController@edit    | web        |
*/

/*
|        | GET|HEAD | /      | task.index  | App\Http\Controllers\TaskController@index  | web        |
|        | GET|HEAD | create | task.create | App\Http\Controllers\TaskController@create | web        |
|        | GET|HEAD | store  | task.store  | App\Http\Controllers\TaskController@store  | web        |
*/