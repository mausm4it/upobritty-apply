<?php

use Illuminate\Support\Facades\Route;


 Route::group(['middleware' => ['role:student']], function () {
  Route::get('/student_dashboard', function () 
   {
      return view('student.dashboard');
   })->name('student_dashboard');
 });