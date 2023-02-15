<?php

namespace App\Http\Controllers\Backend;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::all();
        return view('backend.pages.doctor.all_doctor', compact('doctors'));
    }
}
