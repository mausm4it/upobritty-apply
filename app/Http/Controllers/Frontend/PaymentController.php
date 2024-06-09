<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentInfo;
use App\Models\ApplyStudent;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class PaymentController extends Controller 
{
    public function index(){
        return view('frontend.payment_view');
    }

    public function submit_number(){
        return view('frontend.submit_number');
    }

    public function payment_info_input(Request $request){

        
        $payment = new PaymentInfo;
        $payment->info =  $request->info;
        $payment->apply_student_id = $request->apply_student_id;
        $payment->save();

        $id = session('apply_student');
        //SMS
        $students_apply = ApplyStudent::find($id);
        $user_id= $students_apply->users()->first()->user_id;
        $password= $students_apply->users()->first()->show_password;

        $client = new Client();
        $response = $client->post('http://sms.insafhost.com/api/v2/SendSMS', [
            'json' => [
                'SenderId' => env('SMS_SENDER_ID'),
                'ApiKey' => env('SMS_API_KEY'),
                'ClientId' => env('SMS_CLIENT_ID'),
                'Message' => 'Hello'.$students_apply->english_name.'! Welcome to Upobrrity.com. Please Login and Download Your Application. Your User ID: '.$user_id.' Password: '.$password,
                'MobileNumbers' => '88'.$students_apply->phone_number
            ]
        ]);

        if ($response->getStatusCode() == 200) {
           
           return redirect()->route('success')->with('success', 'ধন্যবাদ! আপনার এপ্লিকেশন এবং পেমেন্ট সাবমিট হয়েছে। আমাদের প্রতিনিধি দল পর্যবেক্ষন করে শীগ্রই এস.এম.এস এর মাধ্যমে আপনাকে আপনার ইউজার এবং পাসওয়ার্ড জানিয়ে দিবে। এবং ওয়েব সাইটে লগইন করে আপনার এপ্লিকেশনটি ডাউনলোড দিতে পারবেন।');
        } else {
            return redirect()->back()->with('error' , "Fail to sen SMS");
        }

        
    }
}