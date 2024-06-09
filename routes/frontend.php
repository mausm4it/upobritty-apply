<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;


Route::get('/', 'HomeController@index')->name('home');
Route::get('/page_view/{id}', 'HomeController@page_view')->name('page_view');
Route::get('/apply-for-uporitty-view', 'ApplyController@index')->name('apply-for-uporitty-view');
Route::post('/apply-uporitty', 'ApplyController@ApplyUpobritty')->name('apply-uporitty');

Route::get('/payment_view', 'PaymentController@index')->name('payment_view');
Route::get('/submit_number', 'PaymentController@submit_number')->name('submit_number');
Route::post('/payment_info_input', 'PaymentController@payment_info_input')->name('payment_info_input');

//pages
Route::get('/download_application', 'HomeController@download_application')->name('download_application');
Route::get('/application_status', 'HomeController@application_status')->name('application_status');

//user login
Route::get('/user_login_view', 'HomeController@user_login_view')->name('user_login_view');
Route::post('/user_login', 'HomeController@user_login')->name('user_login');


//student dashboard

  Route::get('/student_application', 'HomeController@student_application')->name('student_application');
  Route::get('/student_application_status', 'HomeController@student_application_status')->name('student_application_status');

  //notice board
  Route::get('/notice_board_list', 'HomeController@notice_board_list')->name('notice_board_list');
  Route::get('/notice/{id}', 'HomeController@notice_view')->name('notice_view');


  //bkash


Route::post('/create-payment', [PaymentController::class, 'createPayment'])->name('create-payment');
Route::post('/execute-payment', [PaymentController::class, 'executePayment']);
Route::post('/query-payment', [PaymentController::class, 'queryPayment']);



Route::get('/success', function(){
    return view('frontend.success');
})->name('success');