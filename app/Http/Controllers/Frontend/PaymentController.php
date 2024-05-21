<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentInfo;

class PaymentController extends Controller 
{
    public function index(){
        return view('frontend.payment_view');
    }

    public function payment_info_input(Request $request){
        $payment = new PaymentInfo;
        $payment->info =  $request->info;
        $payment->apply_student_id = $request->apply_student_id;
        $payment->save();

        return redirect()->route('success')->with('success', 'ধন্যবাদ! আপনার এপ্লিকেশন এবং পেমেন্ট সাবমিট হয়েছে। আমাদের প্রতিনিধি দল পর্যবেক্ষন করে শীগ্রই এস.এম.এস এর মাধ্যমে আপনাকে আপনার ইউজার এবং পাসওয়ার্ড জানিয়ে দিবে। এবং ওয়েব সাইটে লগইন করে আপনার এপ্লিকেশনটি ডাউনলোড দিতে পারবেন।');
    }
}