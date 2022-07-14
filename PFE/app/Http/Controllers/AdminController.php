<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use Auth;
use App\Models\Appointment;
use DB;
use DateTime;
use App\Traits\DoctorTrait;
use Notification;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
	    use DoctorTrait;

    public function addview(){

  if(Auth::id() )
      {
        if(Auth::user()->usertype =='1')
        {
                    return view('admin.add_doctor');

        }

         else {

                return redirect()->back();
        }
      }

        else
        {
          return redirect('login');

        }

    }

        public function upload(Request $request)
    {

 
      


       
        $file_name = $this -> saveImage($request -> photo,'images/doctors');

        $Full_Name = $request->input('Full_Name');

        
        $Date_Of_Birth = $request->input('date_of_birth');
       
        $Adress = $request->input('Adress');
        $Phone_Number = $request->input('Phone_number');
        $Social_Account = $request->input('Social_Account');
        $Speciality = $request->input('Speciality');
        $Email_Adress = $request->input('Email_Adress');
        $Gender = $request->input('Gender');

        $data=array('Photo'=> $file_name,'Full_Name'=> $Full_Name,'Date_Of_Birth' =>$Date_Of_Birth,'Adress' => $Adress
        ,'Phone_Number'=>$Phone_Number,"Social_Account"=> $Social_Account ,'Speciality'=>$Speciality  ,'Email_Adress'=>$Email_Adress,'Gender'=>$Gender)  ;
        DB::table('doctors')->insert($data);

         return redirect()->back()->with('message','Doctor Added Succcssfully');
               }


               public function showappointment()
               {


                      if(Auth::id() )
                            {
                              if(Auth::user()->usertype =='1')
                              {
                                   $data =appointment::all();


                                return view('admin.showappointment',compact(('data')));

                              }

                               else {

                                      return redirect()->back();
                              }
                            }

                              else
                              {
                                return redirect('login');

                              }






               
               }

        public function approved($id)
        {
              $data = appointment::find($id);
              $data ->status='Approved';
               $data ->save();
             return redirect()-> back();

        }

        public function canceled($id)
        {
              $data = appointment::find($id);
              $data ->status='Canceled';
               $data ->save();
             return redirect()-> back();

        }

          public function showdoctor()
               {
                

              $data = doctor::all();

                return view('admin.showdoctor',compact('data'));
               }


         public function deletedoctor($id)
            {
              $data = doctor::find($id);
               $data ->delete();
             return redirect()-> back();

            }

          public function updatedoctor($id)
            {
                            $data = doctor::find($id);

             return view('admin.update_doctor',compact('data'));  
                       }

          public function editdoctor(Request $request, $id)
            {
               $doctor = doctor::find($id);

              $doctor->Full_Name=$request->firstname;
              $doctor->Date_Of_Birth=$request->date_of_birth;
              $doctor->Phone_Number=$request->Phone_Number;
              $doctor->Adress=$request->Adress;
              $doctor->Social_Account=$request->Social_Account;
              $doctor->Speciality=$request->Speciality;
              $doctor->Email_Adress=$request->Email_Adress;
              $doctor->Gender=$request->Gender;

              $image=$request->photo;
              if($image){
              $imagename=time().'.'.$image->getClientOriginalExtension();
              $request->photo->move('images/doctors',$imagename);
              $doctor->Photo=$imagename;
              }
            
              $doctor->save();
              return redirect()->back()->with('message','Doctor Details Updated Succcssfully');;
              }


            public function emailview($id)

            {
            $data = appointment::find($id);

              return view('admin.email_view',compact('data'));
            }

        public function sendemail(Request $request,$id)
        {
               $data = appointment::find($id);
               $details=[

                'greeting' => $request->greeting,
                'body' => $request->body,
                'actiontext' => $request->actiontext,
                'actionurl' => $request->actionurl,
                'endpart' => $request->endpart,                

               ];


               Notification :: send($data,new SendEmailNotification($details));
                            return redirect()-> back();

        }


            public function showappointment1()
               {
               
                   $user =Doctor::where('Email_Adress', '=', Auth::user()->email)->get();

                 $user1 = Auth::user();
                $data = $user1->doctor;
                $data1 =appointment::where('doctor', '=', Auth::user()->name)->get();

                return view('doctor.showappointment1',compact('data','data1','user'));
               }



        public function approved1($id)
        {
              $data = appointment::find($id);
              $data ->status='Approved';
               $data ->save();
             return redirect()-> back();

        }

        public function canceled1($id)
        {
              $data = appointment::find($id);
              $data ->status='Canceled';
               $data ->save();
             return redirect()-> back();

        }


            public function emailview1($id)

            {

              $user =Doctor::where('Full_Name', '=', Auth::user()->name)->get();
            $data = appointment::find($id);

              return view('doctor.email_view',compact('data','user'));
            }


             public function myprofil()
               {
                                $user =Doctor::where('Email_Adress', '=', Auth::user()->email)->get();

                $user1 = Auth::user();
                $data = $user1->email;
                $data1 =Doctor::where('Email_Adress', '=', Auth::user()->email)->get();


                return view('doctor.myprofil',compact('data','data1','user'));
               }   

 public function uploadDoct(Request $request)
    {

       
        $file_name = $this -> saveImage($request -> photo,'images/doctors');

        $Full_Name= $request->input('Full_Name');

        
        $Date_Of_Birth = $request->input('date_of_birth');
       
        $Adress = $request->input('Adress');
        $Phone_Number = $request->input('Phone_number');
        $Social_Account = $request->input('Social_Account');
        $Speciality = $request->input('Speciality');
        $Email_Adress = $request->input('Email_Adress');
        $Gender = $request->input('Gender');
        $id = $request->input('userid');

        $data=array('Photo'=> $file_name,'Full_Name'=> $Full_Name ,'Date_Of_Birth' =>$Date_Of_Birth,'Adress' => $Adress
        ,'Phone_Number'=>$Phone_Number,"Social_Account"=> $Social_Account ,'Speciality'=>$Speciality  ,'Email_Adress'=>$Email_Adress,'Gender'=>$Gender)   ;
        DB::table('doctors')->insert($data);
        
            
              
              $user3 = User::find($id);
              $user3 ->usertype='2';
            
              $user3->save();

         return redirect('/')->with('message','Doctor Added Succcssfully');
   

}


          public function showotherdoctors()
               {
                
                 $user =Doctor::where('Email_Adress', '=', Auth::user()->email)->get();

               
                $data = doctor::all();

                return view('doctor.showotherdoctor',compact('data','user'));
               }


}
