<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index()
    {
        $students = $Student::all();
       return view("index", [
        
       ]);
    }
    
}
