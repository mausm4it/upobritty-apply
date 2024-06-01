<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplyStudent;
use App\Models\HomeCard;
use App\Models\Page;
use App\Models\NoticeBoard;
use Auth;




class HomeController extends Controller
{
   public function index(){
     $home_cards = HomeCard::where('status',1)->latest()->get();
   
    return view('frontend.home', compact('home_cards'));
   }

    public function notice_board_list(){
    return view('frontend.notice_board');
   }

    public function notice_view($id){
      $notice = NoticeBoard::find($id);
    return view('frontend.notice_view', compact('notice'));
   }

   


   public function page_view($id){
     $page = Page::where('status',1)->find($id);
     if ($page === null) {
        abort(404, 'Page not found');
    }
   
    return view('frontend.page_view', compact('page'));
   }


   public function student_application(){

    if(Auth::user()){
       $student_apply =  Auth::user()->applies()->first();
       return view('student.application', compact('student_apply'));
       }else{
       return redirect()->route('user_login_view');
       }
       
    }

     public function student_application_status(){

      if(Auth::user()){
      $student_apply =  Auth::user()->applies()->first();
        return view('student.application_status', compact('student_apply'));
       }else{
       return redirect()->route('user_login_view');
       }
   
       
        

    }
   
   
   public function download_application(){

   if(Auth::user()){
      return redirect()->route('student_application');
   }else{
       return redirect()->route('user_login_view');
   }
   
   }

     public function application_status(){

   if(Auth::user()){
      return redirect()->route('student_application_status');
   }else{
       return redirect()->route('user_login_view');
   }
   
   }

   


   

   public function user_login_view(){
   
    return view('frontend.login');
   }


   

   public function user_login(Request $request){
    $credentials = $request->validate([
            'user_id' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('student_application');
        }

         return back()->withErrors([
            'user_id' => 'The provided credentials do not match our records.',
        ])->onlyInput('user_id');

   }
   
   
   
}