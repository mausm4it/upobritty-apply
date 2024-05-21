<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/apply-for-uporitty-view', 'ApplyController@index')->name('apply-for-uporitty-view');
Route::post('/apply-uporitty', 'ApplyController@ApplyUpobritty')->name('apply-uporitty');

Route::get('/payment_view', 'PaymentController@index')->name('payment_view');
Route::post('/payment_info_input', 'PaymentController@payment_info_input')->name('payment_info_input');



Route::get('/success', function(){
    return view('frontend.success');
})->name('success');