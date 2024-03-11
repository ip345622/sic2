<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;


class AdminController extends Controller
{
    //

    public function index(){
        $students = Students::count();
        return view('dashboard', compact('students'));
    }
}
