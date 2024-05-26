<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplyStudent;
use App\Models\Division;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;


class ApplyStudentController extends Controller
{
    public function index(){
        $students_apply = ApplyStudent::latest()->get();
        return view('admin.apply_student.index', compact('students_apply'));
    }

     public function sendSMS($id){
        $students_apply = ApplyStudent::find($id);

         

         $user_id= $students_apply->users()->first()->user_id;
         $password= $students_apply->users()->first()->show_password;

        $client = new Client();
        $response = $client->post('http://sms.insafhost.com/api/v2/SendSMS', [
            'json' => [
                'SenderId' => env('SMS_SENDER_ID'),
                'ApiKey' => env('SMS_API_KEY'),
                'ClientId' => env('SMS_CLIENT_ID'),
                'Message' => 'Hello'.$students_apply->english_name.'! Welcome to Upobrrity.com. Please Login and Download Your Application. Your User ID: '.$user_id.' Password: '.$password,
                'MobileNumbers' => '88'.$students_apply->phone_number
            ]
        ]);
// if ($response->getStatusCode() == 200) {
//         $responseData = json_decode($response->getBody(), true);
//         return response()->json($responseData);
//     } else {
//         return response()->json(['error' => 'Failed to send SMS'], $response->getStatusCode());
//     }
        // Check if the response is successful
        if ($response->getStatusCode() == 200) {
           
            return redirect()->back()->with('success' , "User ID Password Send Successfully");
        } else {
            return redirect()->back()->with('error' , "Fail to sen SMS");
        }
        
    }




    public function Submit(){
        $divisions = Division::all();
        return view('admin.apply_student.create', compact('divisions'));
    }
    public function Edit($id){
       $student_apply = ApplyStudent::find($id);
        return view('admin.apply_student.edit', compact('student_apply'));
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
            'division'=> 'required',
            'district'=> 'required',
            'thana'=> 'required',
            'union'=> 'required',
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
            $apply_student->division = $request-> division;
            $apply_student->district = $request-> district;
            $apply_student->thana =  $request->thana;
            $apply_student->union =  $request->union;
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
            $password = $user->show_password="U".$apply_student->id.$phoneDigits."o".$rollDigits."R".$motherDigits."t".$fatherDigits."Y";
            $user->password= Hash::make($password);
            
            $user->save();
            $user->assignRole('student');
            $apply_student->users()->attach($user);
 


            

            return redirect()->route('apply_list')->with('success', 'Apply Submit Successfully');

    }

       public function Update(Request $request , $id){
       


           $apply_student = ApplyStudent::find($id);


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
            $apply_student->division = $request-> division;
            $apply_student->district = $request-> district;
            $apply_student->thana =  $request->thana;
            $apply_student->union =  $request->union;
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

           //userId father- 1-5  phone- 2-3, roll- 2-3, mother- 1-5, 
           //upobritty 2-4-6-8

             
          //userId father- 1-5  phone- 2-3, roll- 2-3, mother- 1-5, 
           //upobritty 1-3-5-7-9
           
            
 


            

            return redirect()->route('apply_list')->with('success', 'Application Updated Successfully');

    }


    public function updateStatus(Request $request, $id ){
      $student_apply = ApplyStudent::findOrFail($id);
      $student_apply->status = $request->input('status');
      $student_apply->save();

      return redirect()->back()->with('success', 'Status updated successfully!');
    }


      public function updatePaymentStatus(Request $request, $id ){
      $student_apply = ApplyStudent::findOrFail($id);
      $student_apply->payment_status = $request->input('payment_status');
      $student_apply->save();

      return redirect()->back()->with('success', 'Payment Status updated successfully!');
    }

    public function View($id){
        $student_apply = ApplyStudent::find($id);
        return view('admin.apply_student.view', compact('student_apply'));
    }

      public function Delete($id){
       $student_apply = ApplyStudent::find($id);
      $student_apply->delete();
      return redirect()->back()->with('success', 'Application Delete successfully!');
    }
}