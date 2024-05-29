<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ApplyStudent;


class StudentController extends Controller
{
    public function my_applications(){
        
        return view('student.dashboard');
    }


    public function delete_application($id){
      $apply = ApplyStudent::find($id);


      if ($apply) {
            $apply->delete();
            return redirect()->back()->with('success', 'Application Delete Successfully');
        }
      return redirect()->back()->with('error', 'Application not found.');
    }
}