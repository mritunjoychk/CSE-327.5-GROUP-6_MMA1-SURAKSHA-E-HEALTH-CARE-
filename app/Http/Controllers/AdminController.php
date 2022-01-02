<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Donor;
use App\Models\Medicine;

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
   public function addview2()
   {
       return view('admin.add_donor');
   }

   public function upload2(Request $request)
   {
    $donor=new donor; 
    $donor->name=$request->name; 
    $donor->age=$request->age; 
    $donor->blood_group=$request->blood_group;
    $donor->contact=$request->contact;  
    
    $donor->save();

    return redirect()->back()->with('message','Data Added Successfully');
   }
   public function addview3()
   {
       return view('admin.add_medicine');
   }

   public function upload3(Request $request)
   {
    $medicine=new medicine; 
    $medicine->product_name=$request->product_name; 
    $medicine->power=$request->power; 
    $medicine->price=$request->price;  
    
    $medicine->save();

    return redirect()->back()->with('message','Data Added Successfully');
   }
    public function showdoctor()
    {
    $data= doctor::all();
    return view ('admin.showdoctor',compact('data'));
    }
    public function showdonor()
    {
    $data= donor::all();
    return view ('admin.showdonor',compact('data'));
    }
    public function showmedicine()
    {
     $data= medicine::all();
    return view ('admin.showmedicine',compact('data'));
    }
    public function deletedoctor($id)
    {
      $data=doctor::find($id);
      $data->delete();
      return redirect()->back();

    }
    public function deletedonor($id)
    {
      $data=donor::find($id);
      $data->delete();
      return redirect()->back();

    }
    public function deletemedicine($id)
    {
      $data=medicine::find($id);
      $data->delete();
      return redirect()->back();

    }
    public function updatedoctor($id)
    {
        $data=doctor::find($id);
        return view ('admin.update_doctor',compact('data'));
    }
    public function updatedonor($id)
    {
        $data=donor::find($id);
        return view ('admin.update_donor',compact('data'));
    }
    public function updatemedicine($id)
    {
        $data=medicine::find($id);
        return view ('admin.update_medicine',compact('data'));
    }
    public function editdoctor(Request $request, $id)
    {
        $doctor=doctor::find($id);
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        $doctor-> save();
        return redirect()->back()->with('message','Doctor details updated successfully');
        
    }
    public function editdonor(Request $request, $id)
    {
        $donor=donor::find($id);
        $donor->name=$request->name;
        $donor->age=$request->age;
        $donor->blood_group=$request->blood_group;
        $donor->contact=$request->contact;
        $donor-> save();
        return redirect()->back()->with('message','Donor details updated successfully');
    }
    public function editmedicine(Request $request, $id)
    {
        $medicine=medicine::find($id);
        $medicine->product_name=$request->product_name;
        $medicine->power=$request->power;
        $medicine->price=$request->price;
        $medicine-> save();
        return redirect()->back()->with('message','Medicine details updated successfully');
    }

}