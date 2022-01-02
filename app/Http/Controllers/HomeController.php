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

    /*This method is used to login a user.
    :param request: it's a HttpResponse from user.
    :type request: HttpResponse.
    :return: this method returns a home page
     which is a HTML page.
    :rtype: HttpResponse.
    */
    
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
   /*
    This method is used to display home page.

    :param request: it's a HttpResponse from user.

    :type request: HttpResponse.

    :return: this method returns a home page which is a HTML page.
    :rtype: HttpResponse.
    */
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
    /*This method is used to make appointment for registered users.
    :param request: it's a HttpResponse from user.
    :type request: HttpResponse.
    :return: this method returns to the userdashboard page after successfull submission.
    :rtype: HttpResponse.
    */
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
    /*
    This method is used to view the appointment taken by a registered users.
    :param request: it's a HttpResponse from user.
    :type request: HttpResponse.
    :return: this method returns to the myappointment page .
    :rtype: HttpResponse.
    */
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
    /*
     This method is used to cancel the appointment that was requested by a registered users.
    :param request: it's a HttpResponse from user.
    :type request: HttpResponse.
    :return: this method returns to the userdashboard page after successfull
    registration.
    :rtype: HttpResponse.
    */
       {
            $data=appointment::find($id);

            $data->delete();

            return redirect()->back();
       }
}
