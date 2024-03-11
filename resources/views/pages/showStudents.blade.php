<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Ver estudiantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2/2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <p>Nombre del estudiante: <b>jorge</b></p>
                <p>Matricula del estudiante: <b>22323948</b></p>
                {{-- <p>Nombre del estudiante: <b>{{$student->name_student}}</b></p> --}}
            </div>
        </div>
    </div>
</x-app-layout>
@include('components\footer')

