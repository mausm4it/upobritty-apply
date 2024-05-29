<?php

use Illuminate\Support\Facades\Route;




Route::group(['middleware' => ['role:admin']], function () { 
    //dashboard
   Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

   //Home_card
   Route::get('/home_card', 'HomeCardController@index')->name('home_card');
   Route::get('/home_card_create_view', 'HomeCardController@CreateView')->name('home_card_create_view');
   Route::get('/home_card_edit/{id}', 'HomeCardController@Edit')->name('home_card_edit');
   Route::post('/home_card_update/{id}', 'HomeCardController@Update')->name('home_card_update');
  Route::get('/home_card_delete/{id}', 'HomeCardController@Delete')->name('home_card_delete');
  Route::post('/home_card_create', 'HomeCardController@Create')->name('home_card_create');
  Route::put('/home_card_status/{id}/update_home_card_status','HomeCardController@updateStatus')->name('update_home_card_status');

   //apply
   Route::get('/apply_student_list', 'ApplyStudentController@index')->name('apply_list');
   Route::get('/submit_student_apply_view', 'ApplyStudentController@Submit')->name('submit_student_apply_view');  
   Route::post('/create_student_apply', 'ApplyStudentController@Make')->name('create_student_apply');
   Route::get('/edit_student_apply/{id}', 'ApplyStudentController@Edit')->name('edit_student_apply');
   Route::get('/show_student_apply/{id}', 'ApplyStudentController@View')->name('show_student_apply');
   Route::post('/update_student_apply/{id}', 'ApplyStudentController@Update')->name('update_student_apply');
   Route::get('/delete_student_apply/{id}', 'ApplyStudentController@Delete')->name('delete_student_apply');
   Route::post('/send_sms_uid_pass/{id}', 'ApplyStudentController@sendSMS')->name('send_sms_uid_pass');
  
   
  //status
    Route::put('/apply_student_list/{id}/update-status','ApplyStudentController@updateStatus')->name('updateStatus');
    Route::put('/apply_student_list/{id}/update-payment-status','ApplyStudentController@updatePaymentStatus')->name('updatePaymentStatus');


    //notice_board 

    Route::get('/notice_list', 'NoticeBoardController@index')->name('notice_list');
    Route::post('/create_notice', 'NoticeBoardController@create_notice')->name('create_notice');
    Route::get('/delete_notice/{id}', 'NoticeBoardController@delete_notice')->name('delete_notice');


    //settings

    Route::get('/settings','SettingController@index')->name('settings');
    Route::post('/logo_upload/{id}','SettingController@logo_upload')->name('logo_upload');
    Route::post('/siteName_upload/{id}','SettingController@siteName_upload')->name('siteName_upload');


    //student
    Route::get('/students','StudentController@index')->name('students');
     Route::get('/delete_student/{id}','StudentController@DeleteUser')->name('delete_student');

    //sms
    // routes/web.php or routes/api.php
     Route::post('/sendSms','SmsController@sendSms')->name('send-sms');
     Route::get('/send-sms-view','SmsController@index')->name('send-sms-view');

     //pages
    Route::get('/pages','PageController@index')->name('pages');
    Route::get('/page_create_view', 'PageController@page_create_view')->name('page_create_view'); 
    Route::post('/page_create', 'PageController@page_create')->name('page_create');  
    Route::get('/page_edit_view/{id}', 'PageController@page_edit_view')->name('page_edit_view'); 
    Route::post('/page_update/{id}', 'PageController@page_update')->name('page_update');  
    Route::get('/page_delete/{id}', 'PageController@page_delete')->name('page_delete'); 
    
    
    //payment_info

    
    
     Route::get('/payment_info_view','PaymentController@payment_info_view')->name('payment_info_view');
    
 });