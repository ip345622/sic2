<?php

namespace App\Livewire\Examples;

use Livewire\Component;
use App\Models\Students;
class Example1 extends Component
{
    public $title = "Hola";
    public $idstudent  = 1;
    public $student;

    public function render()
    {
        return view('livewire.examples.example1')->layout('layouts.livewareTemplate');
    }

    public function changeTitle(){
        $this->title='Cambiandooooo....';
    }

    public function showStudent(){
        $this->student = Students::find($this->idstudent );
    }
    public function showStudents(){
        $this->student = Students::all();
    }
}
