<?php


//Route::resource('/','TaskController');

Route::get('/', 'TaskController@index');
Route::get('/create', 'TaskController@create');