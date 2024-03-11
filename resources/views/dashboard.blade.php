<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2/2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-center items-center">
                        {{-- card --}}
                        <div class="w-1/2 h-full m-2 bg-[#f2f2f2] rounded-lg">
                            <h1 class="text-xl font-bold p-2">Estudiantes</h1>
                            <div class="flex justify-evenly items-center">
                                <img src="https://imgs.search.brave.com/qiUNgmZj2hfm1TZuqrljKLlKQx8ZiN6aZkWbhPN4W1M/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9wbmcu/cG5ndHJlZS5jb20v/cG5nLXZlY3Rvci8y/MDIyMDYxMC9vdXJt/aWQvcG5ndHJlZS1z/YWQtZmlyZWQtc3R1/ZGVudC1pY29uLXBu/Zy1pbWFnZV80OTU2/Mzc3LnBuZw" class="w-1/2 hidden sm:block" alt="student">
                                <div class="w-56">
                                    <canvas id="myChart" class=""></canvas>
                                </div>
                            </div>
                        </div>
                        {{-- card --}}
                        <div class="w-1/2 h-full m-2 bg-[#f2f2f2] rounded-lg">
                            <h1 class="text-xl font-bold p-2">Profesores</h1>
                            <div class="flex justify-center items-center">
                                <img src="https://imgs.search.brave.com/PfLKDMFQUMaH27lwgGkLPJrBjq5tUCN5Plm0hkdXfcA/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudmV4ZWxzLmNv/bS9tZWRpYS91c2Vy/cy8zLzE2ODQxNC9p/c29sYXRlZC9wcmV2/aWV3L2Y3MzEwMGZh/YWRhNjIwNWIyZjkz/NGFjMDA4MTc4N2E3/LWJvY2V0by1kZS10/aXphLWRlLXByb2Js/ZW1hLWRlLXRhYmxl/dGEtZGUtY2hhcXVl/dGEtZGUtcHJvZmVz/b3IucG5n" class="w-1/2 hidden sm:block" alt="teacher">
                                <div class="w-64">
                                    <canvas id="myChart2" class=""></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- {{ __("You're logged in!") }} --}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['activos'],
                datasets: [{
                    label: 'activos',
                    data: [{{$students}}],
                    backgroundColor: [
                        '#5d933d',
                    ],
                    borderColor: [
                        '#fff'
                    ],
                    borderWidth: 1
                }]
            }
        });
        var ctx = document.getElementById('myChart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['activos'],
                datasets: [{
                    label: 'activos',
                    data: [200,500],
                    backgroundColor: [
                        '#5d933d',
                        '#780d00'
                    ],
                    borderColor: [
                        '#fff'
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>
</x-app-layout>
@include('components\footer')

