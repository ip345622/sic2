<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Activities;
use App\Models\Students_has_activities;
use Illuminate\Http\RedirectResponse;


class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activities::paginate(10);
        return view('pages.activities', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'activity_name' => 'required|string',
            'units_id' => 'required|exists:units,id',
            'percentage' => 'required|numeric',
        ]);
        //* Guardar la actividad
        $activity = new Activities();
        $activity->activity_name = $request->input('activity_name');
        $activity->units_id = $request->input('units_id');
        $activity->percentage = $request->input('percentage');
        // dd($activity);
        $activity->save();
    
        $activity_id = $activity->id;
    
        // * Guardar el id del alumno al que pertenece la actividad y el id de la actividad
        // $activity_and_student = new Students_has_activities();
        // $activity_and_student->student_id = $request->input('student_id');
        // $activity_and_student->activities_id = $activity_id;
    
        return redirect('activities')->with('success', 'Actividad creada correctamente');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id): RedirectResponse
    {
        $validatedData = $request->validate([
            'activity_name' => 'required|string',
            'units_id' => 'required|exists:units,id',
            'percentage' => 'required|numeric|between:1,2',
        ]);
        $activity = Activities::find($id);
        $activity->update($request->all());
        return redirect()->route('activities')->with('success', 'Actividad actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $activity = Activities::findOrFail($id);
        $activity->delete();

        return redirect()->route('activities')->with('notificacion', 'Actividad eliminada correctamente');
    }

}
