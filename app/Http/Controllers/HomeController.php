<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Donor;
use App\Models\Medicine;

class HomeController extends Controller
{
    public function redirect()
   {
       if(Auth::id())
       {
         if(Auth::user()->usertype=='0')
         {
            $doctor = doctor::all();
            return view('user.home',compact('doctor'));
         }
         else
         {
            return view('admin.home');
         }
       }
       else
       {
           return redirect()->back();
       }
   }
   public function index()
       {

        if(Auth::id())
        {
            return redirect('home');
        }
        else{
            $doctor = doctor::all();

            return view('user.home',compact('doctor'));
        }
       }

       public function appointment (Request $request)
       {
        $data = new appointment;
           if(Auth::id())
           {
            $data->name=$request->name;
            $data->email=$request->email;
            $data->date=$request->date;
            $data->phone=$request->number;
            $data->message=$request->message;
            $data->doctor=$request->doctor;
            $data->status='In Progress';
            $data->user_id=Auth::user()->id;
           }
            $data->save();
            
            return redirect()->back()->with('message','Your appointment request is successfully sent to the authority.We will contact with you soon!Wear Musk,Stay Safe!');   
       }
       public function myappointment (Request $request)
       {
           if(Auth::id())
           {
               $userid=Auth::user()->id;
               $appoint=appointment::where('user_id',$userid)->get();
            return view('user.my_appointment',compact('appoint'));
           }
           else
           {
                return redirect()->back();
           }
       }
       public function cancel_appoint($id)
       {
            $data=appointment::find($id);
            
            $data->delete();
             
            return redirect()->back();
       }
       public function donor()
       {
       $data= donor::all();
       return view ('user.donor',compact('data'));
       }
}
