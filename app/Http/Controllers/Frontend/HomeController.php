<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplyStudent;

class HomeController extends Controller
{
   public function index(){
    return view('frontend.home');
   }
}