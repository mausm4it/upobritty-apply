<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplyStudent;
use App\Models\Division;
use App\Models\User;
use Hash;


class ApplyStudentController extends Controller
{
    public function index(){
        $students_apply = ApplyStudent::latest()->get();
        return view('admin.apply_student.index', compact('students_apply'));
    }


    public function Submit(){
        $divisions = Division::all();
        return view('admin.apply_student.create', compact('divisions'));
    }


    public function Make(Request $request){
         $request->validate([
            'bangla_name'=> 'required',
            'engish_name'=> 'required',
            'birth_date'=> 'required',
            'birth_date_number'=> 'required',
            'nationality'=> 'required',
            'national_id_number'=> 'required',
            'religion'=> 'required',
            'gender'=> 'required',
            'marital_status'=> 'required',
            // 'partner_name'=> 'required',
            'phone_number'=> 'required|unique:apply_students,phone_number',
        //    'email' => 'unique:apply_students,email',
            'minorities'=> 'required',
            // 'minorities_name'=> 'required',
            'freedom_fighter'=> 'required',
            // 'freedom_fighter_document'=> 'required',
            // 'freedom_fighter_name'=> 'required',
            // 'freedom_fighter_relation'=> 'required',
            'division_id'=> 'required',
            'district_id'=> 'required',
            'thana_id'=> 'required',
            'union_id'=> 'required',
            // 'home_no'=> 'required',
            'exam_name'=> 'required',
            'board_name'=> 'required',
            'roll'=> 'required',
            'subject'=> 'required',
            'result_type'=> 'required',
            'result'=> 'required',
            'passing_year'=> 'required',
            'father_bangla_name'=> 'required',
            'father_english_name'=> 'required',
            'mother_english_name'=> 'required',
            'mother_bangla_name'=> 'required',
            'father_national_id_number'=> 'required',
            'mother_national_id_number'=> 'required',
            'guardian'=> 'required',
            // 'guardian_education'=> 'required',
            'guardian_name'=> 'required',
            'guardian_name_national_id_number'=> 'required',
            'guardian_address'=> 'required',
            'profile_picture'=> 'required|image|dimensions:width=300,height=300'
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
            $apply_student->profile_picture = $imagePath;
           
        }

            $apply_student->bangla_name = $request->bangla_name;
            $apply_student->engish_name = $request-> engish_name;
            $apply_student->birth_date  = $request->birth_date;
            $apply_student->birth_date_number = $request-> birth_date_number;
            $apply_student->nationality =  $request->nationality;
            $apply_student->national_id_number =$request-> national_id_number ;
            $apply_student->religion =  $request->religion;
            $apply_student->gender =  $request->gender;
            $apply_student->marital_status =  $request->marital_status;
            $apply_student->partner_name =  $request->partner_name;
            $apply_student->phone_number =  $request->phone_number;
            $apply_student->email =  $request->email;
            $apply_student->minorities = $request-> minorities;
            $apply_student->minorities_name = $request-> minorities_name;
            $apply_student->freedom_fighter =  $request->freedom_fighter;
            // $apply_student->freedom_fighter_document =$request-> freedom_fighter_document ;
            $apply_student->freedom_fighter_name =  $request->freedom_fighter_name;
            $apply_student->freedom_fighter_relation =  $request->freedom_fighter_relation;
            $apply_student->division_id = $request-> division_id;
            $apply_student->district_id = $request-> district_id;
            $apply_student->thana_id =  $request->thana_id;
            $apply_student->union_id =  $request->union_id;
            $apply_student->home_no = $request-> home_no;
            $apply_student->exam_name =  $request->exam_name;
            $apply_student->board_name = $request-> board_name;
            $apply_student->roll =  $request->roll;
            $apply_student->subject =  $request->subject;
            $apply_student->result_type =  $request->result_type;
            $apply_student->result =  $request->result;
            $apply_student->passing_year =  $request->passing_year;


            $apply_student->father_bangla_name = $request->father_bangla_name ;
            $apply_student->father_english_name =  $request->father_english_name;
            $apply_student->mother_english_name =  $request->mother_english_name;
            $apply_student->mother_bangla_name =  $request->mother_bangla_name;
            $apply_student->father_national_id_number =  $request->father_national_id_number;
            $apply_student->mother_national_id_number =  $request->mother_national_id_number;
        
          
            $apply_student->guardian =  $request->guardian;
            $apply_student->guardian_education =  $request->guardian_education;
            $apply_student->guardian_name =  $request->guardian_name;
            $apply_student->guardian_name_national_id_number =  $request->guardian_name_national_id_number;
            $apply_student->guardian_address =  $request->guardian_address;

            
            //status
            $apply_student->status =  $request->status;
            $apply_student->payment_status =  $request->payment_status;

            $apply_student->save();

            $user = new User();
            $user->name = $request-> engish_name;
            $user->email=  $request->email;
            $user->phone_number =  $request->phone_number;
           
           
           
           //userId father- 1-5  phone- 2-3, roll- 2-3, mother- 1-5, 
           //upobritty 2-4-6-8

             
          //userId father- 1-5  phone- 2-3, roll- 2-3, mother- 1-5, 
           //upobritty 1-3-5-7-9
           
            $phone= $request->phone_number;
            $roll= $request->roll;
            $mother= $request->mother_national_id_number;
            $father = $request->father_national_id_number;

            $pattern_phone = '/\d{2,3}/';
            $pattern_nationalid = '/\d{1,5}/';
             
            //phone
            if (preg_match($pattern_phone, $phone, $matches))
              {
                 $phoneDigits = $matches[0];
              }
              else 
              
              {
                 $phoneDigits = null;
              }

              //father

              if (preg_match($pattern_phone, $roll, $matches))
              {
                 $rollDigits = $matches[0];
              }
              else 
              
              {
                 $rollDigits = null;
              }

              //mother

              if (preg_match($pattern_nationalid, $mother, $matches))
              {
                 $motherDigits = $matches[0];
              }
              else 
              
              {
                 $motherDigits = null;
              }

              //father

              if (preg_match($pattern_nationalid, $father, $matches))
              {
                 $fatherDigits = $matches[0];
              }
              else 
              
              {
                 $fatherDigits = null;
              }

            $user->user_id= "p".$apply_student->id.$phoneDigits."B".$rollDigits."i".$motherDigits."T".$fatherDigits;
            $user->password= Hash::make("U".$apply_student->id.$phoneDigits."o".$rollDigits."R".$motherDigits."t".$fatherDigits."Y");
            $user->save();

            $apply_student->users()->attach($user);
 


            

            return redirect()->route('apply_list')->with('success', 'Apply Submit Successfully');

    }
}