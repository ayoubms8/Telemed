<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    
    public function redirect()


    {

    	if(Auth::id() )
    	{
    		if(Auth::user()->usertype =='0')
    		{
                $doctor = Doctor::all();
    			return view('user.home',compact('doctor'));
    		}


         elseif (Auth::user()->usertype =='2') {
                $user =Doctor::where('Email_Adress', '=', Auth::user()->email)->get();

                    return view('doctor.home',compact('user'));

        }
    		else
    		{
    			return view('admin.home');

    		}


    	}
    	else
    	{
    		       return redirect()-> back();

    	}
       

    }

    public function index()
    {

        if(Auth::id())
        {


            return redirect('home');
        }

       else
       {

         $doctor = Doctor::all();
       return view ('user.home',compact('doctor'));
       }
      
    }

    public function appointment(Request $request)
    {
                $data =new appointment;
              $data->name=$request->name;
              $data -> email=$request->email;
              $data -> date=$request->date;
              $data -> phone=$request->number;
              $data -> message=$request->message;
              $data -> doctor=$request->doctor;
              $data -> status='In progress';
              if(Auth::id())
              {
                $data -> user_id=Auth::user()->id;

              }
             
              $data -> save();
              return redirect()->back()->with('message','Appointment Request Successful . We will contact you as soon as possible');
    }

    public function myappointment()
    {
        if(Auth::id())
      {
        
        if(Auth::user()->usertype == 0)
        {
          $userid=Auth::user()->id;
          $appoint=appointment::where('user_id',$userid)->get();
         return view ('user.my_appointment',compact('appoint'));
        }
          else
              {
                 return redirect()-> back();
              }

    }
    else
    {
       return redirect('login');
    }
    }


    public function cancel_appoint($id)
    {
         $data = appointment::find($id);
         $data -> delete();
         return redirect()->back();
    }


public function alldoctors()
{


     if(Auth::id())
      {
        
        if(Auth::user()->usertype == 0)
        {
          
                   $doctors = Doctor::all();

         return view ('user.alldoctors',compact('doctors'));
        }
          else
              {
                 return redirect()-> back();
              }

    }
    else
    {
       return redirect('login');
    }

    }


        public function about()
    {
     
         return view('user.about_us');
    }

           public function contact()
    {
     
         return view('user.contact');
    }

}


