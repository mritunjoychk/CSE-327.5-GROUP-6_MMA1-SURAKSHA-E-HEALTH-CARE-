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
   {
    $data=appointment::all();
    return view('admin.showappointment',compact('data'));
   }
   public function approved($id)
   {
    $data=appointment::find($id);
    $data->status='Approved';
    $data-> save();
    return redirect()->back();
   }
   public function canceled($id)
   {
    $data=appointment::find($id);
    $data->status='Canceled';
    $data-> save();
    return redirect()->back();
   }
}
