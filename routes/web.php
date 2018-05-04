<?php

/**
* Routes Panel
*/
Route::group(['prefix' => 'panel'], function () {
	Route::get('/', 'DashboardController@index');
});


Route::get('/', 'Site\SiteController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
