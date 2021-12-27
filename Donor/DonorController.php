<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{
    //
    function show(){
    $data= Donor:: all();
    return view('lista',['donors'=>$data]);
    }
}
