<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use DataTables;

class MedicineController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function getMedicines(Request $request)
    {
        if ($request->ajax()) {
            $data = Medicine::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }
}
