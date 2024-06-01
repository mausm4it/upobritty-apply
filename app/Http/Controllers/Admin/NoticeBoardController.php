<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NoticeBoard; 

class NoticeBoardController extends Controller
{
    public function index(){
       
        return view('admin.notice_board');
    }

    public function create_notice(Request $request){
        

        $notice = new NoticeBoard();
        $notice->notice = $request->notice;
        $notice->content = $request->content;
        $notice->save();

        return redirect()->back()->with('success', 'Notice Create Successfully !');
    }


    public function delete_notice(Request $request, $id){
        

        $notice = NoticeBoard::find($id);
       
        $notice->delete();

        return redirect()->back()->with('success', 'Notice Delete Successfully !');
    }
}