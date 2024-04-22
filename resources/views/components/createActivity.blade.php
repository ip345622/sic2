<section>
    <!-- en la vista blade -->
    <div id="myModal"
        class="absolute hidden inset-0 h-[115%] w-full justify-center items-center bg-black bg-opacity-50">
        <div role="document">
            <div class="modal-content d-flex  w-[150%]">
                <div class="bg-white flex justify-between items-center font-bold rounded-tl-2xl rounded-tr-2xl">
                    <h5 class="ml-2" id="modalAgregarEstudianteLabel">Agregar Actividades</h5>
                    <button type="button" class="close clo m-2 bg-red-500 text-white rounded-full  px-2" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="bg-white p-3 rounded-bl-2xl rounded-br-2xl">
                    <form action="{{ route('activities.store') }}" method="POST">
                        @csrf
                        <div class="flex justify-between">
                            <label for="activity_name">Nombre:</label>
                            <input type="text" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="activity_name"
                                name="activity_name" required>
                        </div>
                        @error('activity_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-between  mt-2">
                            <label for="units_id">id_units:</label>
                            <input type="number" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="units_id"
                                name="units_id" required>
                        </div>
                        @error('units_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-between  mt-2">
                            <label for="percentage">porcentage:</label>
                            <input type="number" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="percentage"
                                name="percentage" required>
                        </div>
                        @error('percentage')
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
