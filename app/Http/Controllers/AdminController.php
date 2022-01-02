<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
   public function addview()

   {
       return view('admin.add_doctor');
   }

   public function upload(Request $request)

    /*
    This function is used to display the view list of add doctor page inside admin dashboard.
    :param request: it's a HttpResponse from user.
    :type request: HttpResponse.
    :return: this method returns a page for add medicines. 
     which is a HTML page.
    :rtype: HttpResponse.
    */
   {
    $doctor=new doctor; 
    $doctor->name=$request->name; 
    $doctor->phone=$request->number; 
    $doctor->room=$request->room;
    $doctor->speciality=$request->speciality;  
    
    $doctor->save();

    return redirect()->back()->with('message','Data Added Successfully');
   }
   public function showappointment()
   /*
    This function is used to display the appointment list of showappointment page inside admin dashboard.
    :param request: it's a HttpResponse from user.
    :type request: HttpResponse.
    :return: this method returns a page for view appointments. 
     which is a HTML page.
    :rtype: HttpResponse.
    */
   {
    $data=appointment::all();
    return view('admin.showappointment',compact('data'));
   }
   public function approved($id)
   /*
    This function is used to approve the appointment of showappointment page inside admin dashboard.
    :param request: it's a HttpResponse from user.
    :type id: HttpResponse.
    :return: this method returns a page for appointments where the user get a message for approval. 
     which is a HTML page.
    :rtype: HttpResponse.
    */
   {
    $data=appointment::find($id);
    $data->status='Approved';
    $data-> save();
    return redirect()->back();
   }
   public function canceled($id)
   /*
    This function is used to cancel the appointment of showappointment page inside admin dashboard.
    :param request: it's a HttpResponse from user.
    :type id: HttpResponse.
    :return: this method returns a page for appointments where the user get a message for approval. 
     which is a HTML page.
    :rtype: HttpResponse.
    */
   {
    $data=appointment::find($id);
    $data->status='Canceled';
    $data-> save();
    return redirect()->back();
   }
}
