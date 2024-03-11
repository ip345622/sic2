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
        // Verificar si la solicitud es AJAX y si la validación del cliente ya falló
        if ($request->ajax() && $request->session()->has('errors')) {
            return response()->json(['errors' => $request->session()->get('errors')]);
        }

        // Validar los campos con Laravel
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
            // Si la validación falla en el servidor y la solicitud no es AJAX, redirige de vuelta con los errores
            if (!$request->ajax()) {
                return redirect()
                    ->route('student')
                    ->withErrors($validator)
                    ->withInput();
            }

            // Si la solicitud es AJAX, devuelve un JSON con los errores
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

        // Guardar el estudiante en la base de datos
        $student->save();

        // Si la solicitud no es AJAX, redirige a la página de índice con un mensaje de éxito
        if (!$request->ajax()) {
            return redirect()->route('student')->with('success', 'Estudiante creado exitosamente');
        }

        // Si la solicitud es AJAX, devuelve un JSON con el mensaje de éxito
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
    // tODO: EDIT STUDENT
    // public function editStudent($id){
    //     $student=User::find($id);
    //     return view('pages.editStudent',compact('student'));
    // }
    // TODO: UPDATE STUDENT
    // public function updateStudent(StudentRequest $request,$id):RedirectResponse {
    //     $student=Student::find($id);
    //     // ? Mostrar en consola
    //     dd($student);
    //     $student->update($request->all());
    //     return redirect()->route('student.index')->with('notificacion','Estudiante editado correctamente');
    // }

}
