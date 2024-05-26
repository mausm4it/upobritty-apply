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
}