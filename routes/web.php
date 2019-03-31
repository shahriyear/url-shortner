<?php



Route::get('/',  'CreateUrlController@index');
Route::post('/save_url','CreateUrlController@store')->name('save_url');
Route::get('/testRedirect/{code}','CreateUrlController@testRedirect')->name('testRedirect');