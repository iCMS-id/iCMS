<?php 

Route::get('/', ['as' => 'app.home', 'uses' => 'HomeController@index']);

Route::group(['prefix' => 'admin'], function () {
	Route::get('/', ['uses' => 'AdminController@index', 'as' => 'admin.home']);
	Route::get('home/{address}', function ($address) {
		return $address;
	});
});
