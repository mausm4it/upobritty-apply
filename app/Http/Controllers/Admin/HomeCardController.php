<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeCard;
use Illuminate\Support\Facades\Storage;

class HomeCardController extends Controller
{
    public function index(){
        $home_cards = HomeCard::latest()->get();
        return view('admin.home_card.index', compact('home_cards'));
    }

    public function CreateView(){
        return view('admin.home_card.create');
    }

     public function Edit($id){
        $home_card = HomeCard::find($id);
        return view('admin.home_card.edit', compact('home_card'));
    }

   public function updateStatus(Request $request, $id ){
      $homecard_status = HomeCard::findOrFail($id);
      $homecard_status->status = $request->input('status');
      $homecard_status->save();
       return redirect()->back()->with('success', 'Payment Status updated successfully!');

   }

 

    public function Create(Request $request){

        $request->validate([
            'card_name'=> 'required',
            'card_image'=> 'required|image|dimensions:width=300,height=300'
           ]);

           
        $home_card = new HomeCard();
        if ($request->hasFile('card_image')) {
              
            if ($home_card->card_image) {
                Storage::delete($home_card->card_image);
            }
            $imagePath = $request->file('card_image')->storeAs('student_card_image', 'card_image' . now()->format('YmdHis') . '.' . $request->file('card_image')->getClientOriginalExtension());
            $home_card->card_image = $imagePath;
           
        }
         $home_card->card_name = $request->card_name;
         $home_card->save();
         
        
        return redirect()->route('home_card')->with('success', 'Home Card Create Successfully !');
    }

        public function Update(Request $request,$id){

         $request->validate([
            'card_name'=> 'required',
            'card_image'=> 'required|image|dimensions:width=300,height=300'
           ]);

        $home_card = HomeCard::find($id);
        
        if ($request->hasFile('card_image')) {
              
            if ($home_card->card_image) {
                Storage::delete($home_card->card_image);
            }
            $imagePath = $request->file('card_image')->storeAs('student_card_image', 'card_image' . now()->format('YmdHis') . '.' . $request->file('card_image')->getClientOriginalExtension());
            $home_card->card_image = $imagePath;
           
        }
         $home_card->card_name = $request->card_name;
         $home_card->save();
         
        
        return redirect()->route('home_card')->with('success', 'Home Card Update Successfully !');
    }


    
     public function Delete($id){
        $home_card = HomeCard::find($id);
        $home_card->delete();
        return redirect()->route('home_card')->with('success', 'Home Card Delete Successfully !');
       
        
        
    }

}