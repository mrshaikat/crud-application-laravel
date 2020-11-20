<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Illuminate\Validation\Rules\Unique;

class CrudContoller extends Controller
{
    // Show form

    public function showForm(){
        return view('crud.index');
    }

    // Show form

    public function showData(){
        return view('crud.all');
    }

    public function createData(Request $value){
        //Validation

        $this -> validate( $value, [

            'name'  => 'required',
            'uname'  => 'required | min:6 | max:12 ',
            'email'  => 'required | unique:cruds',
            'cell'  => 'required',
        ],[
            'name.required' => 'Name Filled is Required, Please Fillup',
            'uname.required' => 'Username Filled is Required, Please Fillup',
            'email.required' => 'Email Filled is Required, Please Fillup',
            'cell.required' => 'Phone Number Filled is Required, Please Fillup',
            'email.unique' => 'E-mail is already taken',
        ]);

        //Data send to  Database Table

        Crud::create([

            'name'  => $value -> name,
            'email'  => $value -> email,
            'cell'  => $value -> cell,
            'uname'  => $value -> uname, 

        ]);

        //Redirection

        return redirect() -> back();

    }
}
