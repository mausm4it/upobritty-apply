<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\District;
use App\Models\Thana;
use App\Models\Union;
use App\Models\ApplyStudent;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    public function index(){
     
       return view ('frontend.apply' );
    }



     public function ApplyUpobritty(Request $request){
        
        $request->validate([
            'bangla_name'=> 'required',
            'engish_name'=> 'required',
            'birth_date'=> 'required',
            'nationality'=> 'required',
            'nid_number'=> 'required',
            'gender'=> 'required',
            'phone_number'=> 'required|unique:apply_students,phone_number',
            'father_name'=> 'required',
            'mother_name'=> 'required',

            
            'division'=> 'required',
            'district'=> 'required',
            'thana'=> 'required',
            'union'=> 'required',
           
            'exam_name'=> 'required',
            'class_name'=> 'required',
            'roll'=> 'required',
            'institute_name'=> 'required',
            'prottoyon_potro'=> 'required',
            
            'profile_picture'=> 'required|image'
           ]);


           $apply_student = new ApplyStudent();


           if ($request->hasFile('profile_picture')) {
              
            if ($apply_student->profile_picture) {
                Storage::delete($apply_student->profile_picture);
            }
            $imagePath = $request->file('profile_picture')->storeAs('student_profile_picture', 'profile_picture' . now()->format('YmdHis') . '.' . $request->file('profile_picture')->getClientOriginalExtension());
            $apply_student->profile_picture = $imagePath;
           
        }


        if ($request->hasFile('freedom_fighter_document')) {
              
            if ($apply_student->freedom_fighter_document) {
                Storage::delete($apply_student->freedom_fighter_document);
            }
            $imagePath = $request->file('freedom_fighter_document')->storeAs('student_freedom_fighter_document', 'freedom_fighter_document' . now()->format('YmdHis') . '.' . $request->file('freedom_fighter_document')->getClientOriginalExtension());
            $apply_student->freedom_fighter_document = $imagePath;
           
        }


        if ($request->hasFile('minorities_document')) {
              
            if ($apply_student->minorities_document) {
                Storage::delete($apply_student->minorities_document);
            }
            $imagePath = $request->file('minorities_document')->storeAs('student_minorities_document', 'freedom_fighter_document' . now()->format('YmdHis') . '.' . $request->file('minorities_document')->getClientOriginalExtension());
            $apply_student->minorities_document = $imagePath;
           
        }


       if ($request->hasFile('otizom_document')) {
              
            if ($apply_student->otizom_document) {
                Storage::delete($apply_student->otizom_document);
            }
            $imagePath = $request->file('otizom_document')->storeAs('student_otizom_document', 'freedom_fighter_document' . now()->format('YmdHis') . '.' . $request->file('otizom_document')->getClientOriginalExtension());
            $apply_student->otizom_document = $imagePath;
           
        }

      
       if ($request->hasFile('prottoyon_potro')) {
              
            if ($apply_student->prottoyon_potro) {
                Storage::delete($apply_student->prottoyon_potro);
            }
            $imagePath = $request->file('prottoyon_potro')->storeAs('student_prottoyon_potro', 'freedom_fighter_document' . now()->format('YmdHis') . '.' . $request->file('prottoyon_potro')->getClientOriginalExtension());
            $apply_student->prottoyon_potro = $imagePath;
           
        }

            $apply_student->bangla_name = $request->bangla_name;
            $apply_student->engish_name = $request-> engish_name;
            $apply_student->birth_date  = $request->birth_date;
            $apply_student->nationality =  $request->nationality;
            $apply_student->nid_number =$request->nid_number ;
            $apply_student->gender =  $request->gender;
           
            $apply_student->phone_number =  $request->phone_number;
            $apply_student->land =  $request->land;
            $apply_student->father_name =  $request->father_name;
            $apply_student->mother_name =  $request->mother_name;


            $apply_student->division = $request-> division;
            $apply_student->district = $request-> district;
            $apply_student->thana =  $request->thana;
            $apply_student->union =  $request->union;
            $apply_student->home_no = $request-> home_no;

            
            $apply_student->exam_name =  $request->exam_name;
            $apply_student->class_name = $request->class_name;
            $apply_student->roll =  $request->roll;
            $apply_student->subject =  $request->subject;
            $apply_student->institute_name =  $request->institute_name;
            
            
            $apply_student->minorities_name = $request->minorities_name;
            $apply_student->otizom_name = $request->otizom_name;
            $apply_student->freedom_fighter_name =  $request->freedom_fighter_name;
            $apply_student->freedom_fighter_relation =  $request->freedom_fighter_relation;
            

            $apply_student->guardian_education =  $request->guardian_education;
            $apply_student->guardian_name =  $request->guardian_name;
            $apply_student->guardian_address =  $request->guardian_address;

            $apply_student->save();


            
         if (Auth::check()) {
            $user = Auth::user();
            $apply_student->users()->attach($user);
          }else{
            
            $user = new User();
            $user->name = $request-> engish_name;
            $user->phone_number =  $request->phone_number;

         
           
           
           
           //userId father- 1-5  phone- 2-3, roll- 2-3, mother- 1-5, 
           //upobritty 2-4-6-8

             
          //userId father- 1-5  phone- 2-3, roll- 2-3, mother- 1-5, 
           //upobritty 1-3-5-7-9
           
            $phone= $request->phone_number;
            $roll= $request->roll;
            $nid= $request->nid_number;
          
            $pattern_phone = '/\d{1,1}/';
            $pattern_nid = '/\d{1,1}/';
             
            //phone
            if (preg_match($pattern_phone, $phone, $matches))
              {
                 $phoneDigits = $matches[0];
              }
              else 
              
              {
                 $phoneDigits = null;
              }

             
              //nid

              if (preg_match($pattern_nid, $nid, $matches))
              {
                 $nidDigits = $matches[0];
              }
              else 
              
              {
                 $nidDigits = null;
              }

             

            $user->user_id= "p".$apply_student->id.$phoneDigits."Bi".$nidDigits."T";
            $password = $user->show_password="U".$apply_student->id.$phoneDigits."oR".$nidDigits."tY";
            $user->password= Hash::make($password);
            $user->save();
            
            $user->assignRole('student');
            
            $apply_student->users()->attach($user);
          }


            

            return view('frontend.payment_view' , compact('apply_student'));


          
     }


     
}