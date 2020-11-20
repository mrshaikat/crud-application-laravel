<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show form

    public function showForm(){
        return view('crud.index');
    }

    // Insert Student

    public function insertStudent(Request $request){

        // validation
        $this -> validate($request, [
            'name' => 'required',
            'email' => 'required | unique:students',
            'cell' => 'required | unique:students',
            'uname' => 'required | unique:students',
        ]);
        
        Student::create([

            'name' => $request-> name,
            'email' => $request-> email,
            'cell' => $request-> cell,
            'uname' => $request-> uname,

        ]);

        return redirect() -> back() -> with('success', 'Student added successfull');
    }
}
