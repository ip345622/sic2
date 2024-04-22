<section>
    <!-- en la vista blade -->
    <div id="editStudentModal{{$activity->id}}" tabindex="-1" role="dialog" aria-describedby="myModalLabel" aria-hidden="true" class="myModal2 fade absolute hidden inset-0 h-[115%] w-full justify-center items-center bg-black bg-opacity-50">
        <div  role="document">
            <div class="modal-content d-flex w-[150%]">
                <div class="bg-white flex justify-between items-center font-bold rounded-tl-2xl rounded-tr-2xl">
                    <h5 class="ml-2" id="modalAgregarEstudianteLabel">Actualizar actividad</h5>
                    <button type="button" class="close m-2 bg-red-500 text-white rounded-full px-2" id="clo" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="bg-white p-3 rounded-bl-2xl rounded-br-2xl">
                    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="flex justify-between">
                            <label for="activity_name">Nombre:</label>
                            <input type="text" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="activity_name" name="activity_name" value="{{ $activity->activity_name }}" required>
                            @error('name')
                                <p class="text-red-500 font-bold text-center">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex justify-between  mt-2">
                            <label for="units_id">unidad:</label>
                            <input type="number" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="units_id" name="units_id" value="{{ $activity->units_id }}" required>
                            @error('units_id')
                                <p class="text-red-500 font-bold text-center">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex justify-between  mt-2">
                            <label for="percentage" class="mr-2">porcentaje: </label>
                            <input type="number" class="rounded-lg w-1/2 border-1 border-[#00AB84]" id="percentage" name="percentage" value="{{ $activity->percentage }}" required>
                            @error('percentage')
                                <p class="text-red-500 font-bold text-center">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="bg-[#00AB84] w-full my-3 rounded-lg py-1 text-white">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>