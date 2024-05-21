<?php

use Illuminate\Support\Facades\Route;




Route::group(['middleware' => ['role:admin']], function () { 
    //dashboard
   Route::get('/dashboard', function () 
   {
      return view('dashboard');
   })->name('dashboard');
   Route::get('/apply_student_list', 'ApplyStudentController@index')->name('apply_list');
   Route::get('/submit_student_apply_view', 'ApplyStudentController@Submit')->name('submit_student_apply_view');  
   Route::post('/create_student_apply', 'ApplyStudentController@Make')->name('create_student_apply');  

 });