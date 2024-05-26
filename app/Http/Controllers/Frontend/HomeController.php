<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplyStudent;
use App\Models\HomeCard;


class HomeController extends Controller
{
   public function index(){
     $home_cards = HomeCard::where('status',1)->latest()->get();
    return view('frontend.home', compact('home_cards'));
   }
}