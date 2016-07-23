<?php 

Route::get('/', ['as' => 'app.home', 'uses' => 'HomeController@index']);