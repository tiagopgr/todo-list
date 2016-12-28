<?php


//Route::resource('/','TaskController');

Route::get('/', ['as' => 'task.index', 'uses' => 'TaskController@index']);
Route::get('/create', ['as' => 'task.create', 'uses' => 'TaskController@create']);
