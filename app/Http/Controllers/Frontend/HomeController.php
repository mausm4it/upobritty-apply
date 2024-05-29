<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplyStudent;
use App\Models\HomeCard;
use App\Models\Page;



class HomeController extends Controller
{
   public function index(){
     $home_cards = HomeCard::where('status',1)->latest()->get();
   
    return view('frontend.home', compact('home_cards'));
   }


   public function page_view($id){
     $page = Page::where('status',1)->find($id);
     if ($page === null) {
        abort(404, 'Page not found');
    }
   
    return view('frontend.page_view', compact('page'));
   }
}