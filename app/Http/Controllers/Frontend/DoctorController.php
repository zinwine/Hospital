<?php

namespace App\Http\Controllers\Frontend;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function doctor_detail($id){
        $doctor = Doctor::find($id);
        return view('project.doctor_profile', compact('doctor'));
    }
}
