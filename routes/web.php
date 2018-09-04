<?php

route::get('/', 'Testcontroller@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
