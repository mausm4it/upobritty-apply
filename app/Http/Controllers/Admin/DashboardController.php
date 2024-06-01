<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplyStudent;
use App\Models\User;

class DashboardController extends Controller
{
     public function index(){
        $total_apply = ApplyStudent::count();
        $total_student = User::where('id', '!=', 1)->count();
        $total_paid_payment = ApplyStudent::where('payment_status','paid')->count();
        $total_reject_application =  ApplyStudent::where('status','reject')->count();
        return view('dashboard' , compact('total_apply','total_student','total_paid_payment', 'total_reject_application'));
     }


      public function paid_payment(){
        $students_apply = ApplyStudent::where('payment_status', 'paid')->latest()->get();
        return view('admin.dashboard.paid_payment', compact('students_apply'));
    }


     public function reject_apply(){
        $students_apply = ApplyStudent::where('status', 'reject')->latest()->get();
        return view('admin.dashboard.paid_payment', compact('students_apply'));
    }

    public function college_wise_list(){
        $students_apply = ApplyStudent::orderBy('institute_name')->get();
        return view('admin.dashboard.college_wise_list', compact('students_apply'));
    }

    public function ssc_wise_list(){
        $students_apply = ApplyStudent::where('exam_name', 'মাধ্যমিক/সমমান')->latest()->get();
        return view('admin.dashboard.ssc_wise_list', compact('students_apply'));
    }

    public function hsc_wise_list(){
        $students_apply = ApplyStudent::where('exam_name', 'উচ্চমাধ্যমিক/সমমান')->latest()->get();
        return view('admin.dashboard.hsc_wise_list', compact('students_apply'));
    }
    
    public function honarce_wise_list(){
        $students_apply = ApplyStudent::where('exam_name', 'স্নাতক/সমমান')->latest()->get();
        return view('admin.dashboard.honarce_wise_list', compact('students_apply'));
    }
}