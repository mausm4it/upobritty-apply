<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware' => ['role:student']], function () {


   Route::get('/my_applications', 'StudentController@my_applications')->name('student_dashboard');

   
   Route::post('/delete_application/{id}', 'StudentController@delete_application')->name('delete_application');
 });

 