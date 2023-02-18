<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Career;

class CareerController extends Controller
{
    public function index(){
        $careers = Career::paginate(6);
        return view('project.career', compact('careers'));
    }

    public function show($id){
        $career = Career::find($id);
        return view('project.career_detail', compact('career'));
    }
}
