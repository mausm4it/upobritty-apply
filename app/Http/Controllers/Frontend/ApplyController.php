<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;

class ApplyController extends Controller
{
    public function index(){
        $divisions = Division::all();
        return view ('frontend.apply' , compact('divisions'));
    }
}