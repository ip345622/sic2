<div class="p-8">
    <h1 class="text-center text-3xl font-bold mb-4">Lista de estudiantes con livewire</h1>
    <h2 class="text-center text-xl mb-4">{{ $title }}</h2>
    
    
      <div class="flex justify-center">
          <input wire:model='idstudent' type="text" class="border justify-center border-green-500 w-96 px-4 py-2 rounded-md mb-4">
    </div>
    <div class="flex justify-center">
            <button wire:click='showStudent' class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mr-2">Mostrar Estudiante</button>
            <button wire:click='showStudents' class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Mostrar Todos los Estudiantes</button>
        </div>

    <div class="flex justify-center w-full">    
    @if(isset($student) && is_iterable($student))
    <div class="mt-4">
        <table class="table-auto border-collapse border border-gray-400 w-96">
            <thead class="bg-green-300">
                <tr>
                    <th class="px-4 py-2 bg-gray-200 border border-gray-400">ID</th>
                    <th class="px-4 py-2 bg-gray-200 border border-gray-400">Nombre</th>
                    <th class="px-4 py-2 bg-gray-200 border border-gray-400">Apellido</th>
                    <!-- Agrega más columnas según las propiedades de tu modelo Student -->
                </tr>
            </thead>
            <tbody>
                @foreach($student as $s)
                    <tr>
                        <td class="px-4 py-2 border border-gray-400">{{ $s->id }}</td>
                        <td class="px-4 py-2 border border-gray-400">{{ $s->name }}</td>
                        <td class="px-4 py-2 border border-gray-400">{{ $s->lastName }}</td>
                        <!-- Agrega más columnas según las propiedades de tu modelo Student -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@elseif(isset($student))
    <div class="mt-4">
        <table class="table-auto border-collapse border border-gray-400 w-96">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200 border border-gray-400">ID</th>
                    <th class="px-4 py-2 bg-gray-200 border border-gray-400">Nombre</th>
                    <th class="px-4 py-2 bg-gray-200 border border-gray-400">Apellido</th>
                    <!-- Agrega más columnas según las propiedades de tu modelo Student -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-4 py-2 border border-gray-400">{{ $student->id }}</td>
                    <td class="px-4 py-2 border border-gray-400">{{ $student->name }}</td>
                    <td class="px-4 py-2 border border-gray-400">{{ $student->lastName }}</td>
                    <!-- Agrega más columnas según las propiedades de tu modelo Student -->
                </tr>
            </tbody>
        </table>
    </div>
@endif
    </div>
</div>