<x-app-layout>
    <div class="flex justify-center">
        <div class="w-full max-w-3xl bg-white border-2 pb-20 px-10 mt-32 rounded-3xl shadow-xl">
            <h1 class="text-center font-bold text-2xl my-10">{{ $subject->name_subject }}</h1>
            <div class="ml-2 bg-[#2a935f] text-xl shadow-xl p-3 rounded-lg">
                <table class="w-full text-left border-collapse">
                    <thead class="border-b-2">
                        <tr>
                            <th class="p-2 font-black border-gray-300">Nombre de la unidad</th>
                            <th class="p-2 font-black border-gray-300">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($units as $unit)
                        <tr class="border-b-2">
                            <td class="p-2  border-gray-300">{{$unit->unit_name}}</td>
                            <td class="p-2  border-gray-300">{{$unit->objective}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
{{-- @include('components\footer') --}}
</x-app-layout>

