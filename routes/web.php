<?php
Route::resource ('/','HomeController');
Route::get('/','HomeController@index');
// Create
Route::post('main/create','MainController@store')->name('main.create');
// delete
Route::delete('main/delete/{main}','MainController@destroy')->name('main.destroy');
//update
Route::post('main/{main}','MainController@update')->name('main.update2');

//Route::get('update','MainController@update')->name('main.update2');
//edit
Route::get('edit/{main}','MainController@edit')->name('main.update');

//Auth::routes();

Route::get('/index', 'MainController@index');

Auth::routes();

Route::get('/home', 'HomeController@add')->name('home');

//sort
