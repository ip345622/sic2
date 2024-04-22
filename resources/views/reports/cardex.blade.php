<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardex de {{$student->name}}</title>
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow">
        <div>
            <h1 class="text-2xl font-bold mb-4">UNIVERSIDAD TECNOLOGICA DE CANCUN</h1>
            {{-- <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2FUTdeCancun%2F%3Flocale%3Dpt_PT&psig=AOvVaw1AbffLgboKktM0Fc4z33PQ&ust=1710250091076000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCMCTlZuo7IQDFQAAAAAdAAAAABAb" alt="logo"> --}}
        </div>
        <h1 class="text-xl font-bold mb-4">Reporte del estudiante: {{$student->name}}</h1>
        <div class=" border-gray-200 mt-16">
            <table class="w-full border-2">
                <tr>
                    <th class="border-b border-gray-200 py-2">Nombre</th>
                    <td class="border-b border-gray-200 py-2">{{$student->name}}</td>
                </tr>
                <tr>
                    <th class="border-b border-gray-200 py-2">Apellido</th>
                    <td class="border-b border-gray-200 py-2">{{$student->lastName}}</td>
                </tr>
                <tr>
                    <th class="border-b border-gray-200 py-2">Matrícula</th>
                    <td class="border-b border-gray-200 py-2">{{$student->student_id}}</td>
                </tr>
                <tr>
                    <th class="border-b border-gray-200 py-2">Promedio</th>
                    <td class="border-b border-gray-200 py-2">{{$student->average}}</td>
                </tr>
                <tr>
                    <th class="border-b border-gray-200 py-2">Carrera</th>
                    <td class="border-b border-gray-200 py-2">{{$student->career}}</td>
                </tr>
                <tr>
                    <th class="border-b border-gray-200 py-2">Grupo</th>
                    <td class="border-b border-gray-200 py-2">{{$student->group}}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>



{{-- ! INVESTIGACION, HACER UNA INFOGRAFIA PARA CREAR UN PDF PASO A PASO EN LARAVEL --}}