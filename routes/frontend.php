<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/apply-for-upbritty', 'ApplyController@index')->name('apply-for-upbritty');