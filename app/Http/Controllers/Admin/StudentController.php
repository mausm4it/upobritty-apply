<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    public function index(){
        $users = User::where('id', '!=', 1)->get();
        return view('admin.student.index', compact('users'));
    }

    public function DeleteUser($id){
        $user =  User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'User Delete Successfully!');
    }
}