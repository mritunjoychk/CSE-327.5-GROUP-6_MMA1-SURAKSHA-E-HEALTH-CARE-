<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
class DoctorController extends Controller
{
    //
    function show(){
 $data= Doctor::all();
 return view('list',['doctors'=>$data]);

    }
}
