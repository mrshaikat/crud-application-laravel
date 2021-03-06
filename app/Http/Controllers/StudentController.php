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


        //Image Uploda system

       if( $request -> hasFile('picture')){
           
        $picture = $request -> file('picture');
        $picture_name = md5(time().rand()).'.'. $picture -> getClientOriginalExtension();
        $picture -> move(public_path('student_photos'), $picture_name );
       }else{

           $picture_name = '';
       }

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
            'photo' => $picture_name,

        ]);

        return redirect() -> back() -> with('success', 'Student added successfull');
    }




    public function allStudent(){
          
        $all_data = Student::latest() -> get();
        return view('crud.all', [

            'students'  => $all_data
        ]);
    }


    public function singleStudent($id){
        
        $single_student = Student::find($id);
        return view('crud.single_view', [

            'show_single'  => $single_student
        ]);
    }

    public function deleteStudent($id){

        $delete_student = Student::find($id);

        $delete_student -> delete();

        return redirect() -> back() -> with('success','Student Delete successfull');
    }

    public function editStudent($id){

        $edit_student = Student::find($id);
        return view('crud.edit', [

            'edit_data' => $edit_student
        ]);

    }

    public function updateStudent(Request $request, $id){

        $update = Student::find($id);

        if( $request -> hasFile('new_picture') ){

            $picture = $request -> file('new_picture');
            $picture_name = md5(time().rand()).'.'. $picture -> getClientOriginalExtension();
            $picture -> move(public_path('student_photos'), $picture_name );

            unlink('student_photos'. '/'.$request -> old_picture );

        }else{

            $picture_name = $request -> old_picture ;
        }

        $update -> name = $request -> name;
        $update -> email = $request -> email;
        $update -> cell = $request -> cell;
        $update -> uname = $request -> uname;
        $update -> photo = $picture_name;

        $update -> update();

        return redirect() -> back() -> with('success','Student Update successfull');


    }














}
