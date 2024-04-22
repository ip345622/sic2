<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Students;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    //
    public function student()
    {
        $students = Students::paginate(10);
        return view('pages.student', compact('students'));
    }
    
    public function login()
    {
        return view('auth.login');
    }

    public function showStudents()
    {
        // $student=User::find($id);
        return view('pages.showStudents');
        // return view('pages.showStudents',compact('student'));
    }

    // TODO: EDIT STUDENT


    public function edit($id)
    {
        $student = Students::find($id);
        return view('editStudent', compact('student'));
    }
    
    public function update(Request $request, $id): RedirectResponse
    {
        $student = Students::find($id);
        $student->update($request->all());
        return redirect()->route('student')->with('success', 'Estudiante notifcado correctamente');
    }

    //* create student profile
    public function store(Request $request)
    {
        if ($request->ajax() && $request->session()->has('errors')) {
            return response()->json(['errors' => $request->session()->get('errors')]);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ\s]+$/u',
            'lastName' => 'required|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ\s]+$/u',
            'student_id' => 'required|regex:/^\d+$/',
            'average' => 'required|numeric',
            'career' => 'required|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ\s]+$/u',
            'group' => 'required|regex:/^[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ\d\s]+$/u',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            if (!$request->ajax()) {
                return redirect()
                    ->route('student')
                    ->withErrors($validator)
                    ->withInput();
            }

            return response()->json(['errors' => $validator->errors()->toArray()]);
        }

        // Crear una nueva instancia de Student y establecer sus propiedades
        $student = new Students();
        $student->name = $request->input('name');
        $student->lastName = $request->input('lastName');
        $student->student_id = $request->input('student_id');
        $student->average = $request->input('average');
        $student->career = $request->input('career');
        $student->group = $request->input('group');
        $student->email = $request->input('email');
        $student->password = Hash::make($request->input('password'));

        $student->save();

        if (!$request->ajax()) {
            return redirect()->route('student')->with('success', 'Estudiante creado exitosamente');
        }

        return response()->json(['success' => 'Estudiante creado exitosamente']);
    }



    // * DELETE STUDENT
    public function destroy($id)
    {
        $student = students::findOrFail($id);
        $student->delete();

        return redirect()->route('student')->with('notificacion', 'Estudiante eliminado correctamente');
    }

    // TODO: SHOW STUDENT
    // public function showStudents($id){
    //     $student=User::find($id);
    //     return view('pages.showStudents',compact('student'));
    // }



}
