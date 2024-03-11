<section>
    <!-- en la vista blade -->
    <div id="myModal"
        class="absolute hidden inset-0 h-[115%] w-full justify-center items-center bg-black bg-opacity-50">
        <div role="document">
            <div class="modal-content d-flex  w-[150%]">
                <div class="bg-white flex justify-between items-center font-bold rounded-tl-2xl rounded-tr-2xl">
                    <h5 class="ml-2" id="modalAgregarEstudianteLabel">Agregar Estudiante</h5>
                    <button type="button" class="close clo m-2 bg-red-500 text-white rounded-full  px-2" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="bg-white p-3 rounded-bl-2xl rounded-br-2xl">
                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                        <div class="flex justify-between">
                            <label for="name">Nombre:</label>
                            <input type="text" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="name"
                                name="name" required>
                        </div>
                        @error('name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-between  mt-2">
                            <label for="lastName">Apellido:</label>
                            <input type="text" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="lastName"
                                name="lastName" required>
                        </div>
                        @error('lastName')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-between  mt-2">
                            <label for="student_id">Matricula:</label>
                            <input type="text" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="student_id"
                                name="student_id" required>
                        </div>
                        @error('student_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-between  mt-2">
                            <label for="average" class="mr-2">Cuatrimestre: </label>
                            <input type="number" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="average"
                                name="average" required>
                        </div>
                        @error('average')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-between  mt-2">
                            <label for="career">Carrera:</label>
                            <input type="text" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="career"
                                name="career" required>
                        </div>
                        @error('career')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-between  mt-2">
                            <label for="group">Grupo:</label>
                            <input type="text" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="group"
                                name="group" required>
                        </div>
                        @error('group')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-between  mt-2">
                            <label for="email">Correo:</label>
                            <input type="email" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="email"
                                name="email" required>
                        </div>
                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-between  mt-2">
                            <label for="password">Contraseña:</label>
                            <input type="password" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="password"
                                name="password" required>
                        </div>
                        @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <button type="submit"
                            class="bg-[#00AB84] w-full my-3 rounded-lg py-1 text-white">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
