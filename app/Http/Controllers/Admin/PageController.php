<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
   public function index(){
    $pages = Page::all();
    return view('admin.pages.index', compact('pages'));
   }
   public function  page_create_view(){
  
    return view('admin.pages.create');
   }

    public function page_create(Request $request){
      
      $page = new Page();
      $page->page_name = $request->page_name;
      $page->page_details = $request->page_details;
      $page->status = $request->status;
      $page->save();


       return redirect()->route('pages')->with('success', 'Page Create successfully!');
  
    
   }
     public function  page_edit_view($id){

     $page = Page::find($id);
  
    return view('admin.pages.edit', compact('page'));
     }

   public function page_update(Request $request, $id){
      
      $page = Page::find($id);
      $page->page_name = $request->page_name;
      $page->page_details = $request->page_details;
      $page->status = $request->status;
      $page->save();


       return redirect()->route('pages')->with('success', 'Page Updated successfully!');
  
    
   }


   public function  page_delete($id){

     $page = Page::find($id);
     $page->delete();
  
    return redirect()->route('pages')->with('success', 'Page Delete successfully!');
     }

   

  
}