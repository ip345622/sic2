<x-app-layout>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Estudiantes') }}
        </h2>
    </x-slot>
    <main class="w-full h-full mt-32">
        <div class="">
            {{-- @if (session()->has('notificacion'))
                {{ session('notificacion') }}
            @endif --}}
        </div>
        <div class="bg-[#fff] shadow-lg p-2 mr-10 ml-10  rounded-lg">
            <div class="flex justify-between">
                <table class="text-black text-center w-full h-full rounded-xl ">
                    <thead>
                        <tr class="border-b-2">
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Apellido's</th>
                            <th>Matricula</th>
                            <th>Carrera</th>
                            <th>Grupo</th>
                            <th>correo electrónico</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class="border-b-2">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->lastName }}</td>
                                <td>{{ $student->student_id }}</td>
                                <td>{{ $student->career }}</td>
                                <td>{{ $student->group }}</td>
                                <td>{{ $student->email }}</td>
                                <td class="flex justify-center items-center">
                                    <button id="editBtn" type="button" data-toggle="modal"
                                        data-student-id="{{ $student->id }}"
                                        data-target="#editStudentModal{{ $student->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-edit" width="40" height="40"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#00bfd8" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </button>
                                    <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-trash cursor-pointer" width="40"
                                                height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 7l16 0" />
                                                <path d="M10 11l0 6" />
                                                <path d="M14 11l0 6" />
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @include('components.editStudents')
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            {{ $students->links() }}
            <div class="flex justify-center">
                <button class="text-center bg-[#00AB84] py-2 px-4 rounded-full" id="myBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="40"
                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg>
                </button>
            </div>
        </div>
        @include('components.createStudents')
        {{-- @include('components.editStudents') --}}
    </main>
    <script>
        // Obtén el modal
        var modal = document.getElementById("myModal");
        let modal2 = document.getElementsByClassName("myModal2");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];

        // Cuando el usuario haga clic en el botón, abre el modal 
        btn.onclick = function() {
            modal.style.display = "flex";
        }
        document.addEventListener("DOMContentLoaded", function() {
            var editBtns = document.querySelectorAll('#editBtn');
            editBtns.forEach(function(editBtn) {
                editBtn.addEventListener("click", function(event) {
                    var studentId = event.currentTarget.getAttribute('data-student-id');
                    let editStudentModal = document.getElementById(`editStudentModal${studentId}`);
                    editStudentModal.style.display = "flex";

                    // Aquí asigna el evento onclick al botón de cierre
                    var clo = document.getElementById("clo");
                    clo.onclick = function() {
                        editStudentModal.style.display = "none";
                    };
                });
            });
        });

        // Cuando el usuario haga clic en <span> (x), cierra el modal
        // span.onclick = function() {
        //     modal.style.display = "none";
        // }
        // clo.onclick = function() {
        //     modal.style.display = "none";
        // }





        // Cuando el usuario haga clic en cualquier lugar fuera del modal, cierra el modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function mostrarError(input, mensaje) {
            var span = document.createElement('span');
            span.textContent = mensaje;
            span.classList.add('text-red', 'text-sm');
            input.parentNode.insertBefore(span, input.nextSibling);
        }
    </script>

</x-app-layout>
@include('components.footer')
