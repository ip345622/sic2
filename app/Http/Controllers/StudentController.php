<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function student(){
        return view('pages.student');
    }
    public function teacher(){
        return view('pages.teacher');
    }
    public function login(){
        return view('auth.login');
    }
}
