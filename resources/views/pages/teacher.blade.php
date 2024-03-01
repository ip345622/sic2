<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Profesores') }}
        </h2>
    </x-slot>
    <main class="w-full h-full mt-32">
        <div class="bg-[#fff] shadow-lg p-2 mr-10 ml-10  rounded-lg">
                    <div class="flex justify-between">
                            <table class="text-black text-center w-full h-full rounded-xl ">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombre</th>
                                        <th>Apellido's</th> 
                                        <th>Foto</th>
                                        <th>Especialidad</th>
                                        <th>Materia</th>
                                        <th>correo electrónico</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>
                                        <p class="fs-6">1</p>
                                    </td>
                                    <td>
                                        <p class="fs-6">Juan</p>
                                    </td>
                                    <td>
                                    <p class="fs-6">Perez</p>
                                </td>
                                <td class="w-10">
                                    <figure><img class="rounded-full" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
                                    <div class="member-info">
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-6 text-center">Ingeniero</p>
                                </td>
                                <td class="">
                                    <span class="">Iot</span>
                                </td>
                                <td class="">
                                    <span class="">222239@utcancun.edu.mx</span>
                                </td>
                                <td class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-minus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                        <path d="M16 19h6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </td>
                                <tr>
                                    <td>
                                        <p class="fs-6">2</p>
                                    </td>
                                    <td>
                                        <p class="fs-6">Juan</p>
                                    </td>
                                    <td>
                                    <p class="fs-6">Perez</p>
                                </td>
                                <td class="w-10">
                                    <figure><img class="rounded-full" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
                                    <div class="member-info">
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-6 text-center">Ingeniero</p>
                                </td>
                                <td class="">
                                    <span class="">Iot</span>
                                </td>
                                <td class="">
                                    <span class="">222239@utcancun.edu.mx</span>
                                </td>
                                <td class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-minus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                        <path d="M16 19h6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </td>
                                <tr>
                                    <td>
                                        <p class="fs-6">3</p>
                                    </td>
                                    <td>
                                        <p class="fs-6">Juan</p>
                                    </td>
                                    <td>
                                    <p class="fs-6">Perez</p>
                                </td>
                                <td class="w-10">
                                    <figure><img class="rounded-full" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
                                    <div class="member-info">
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-6 text-center">Ingeniero</p>
                                </td>
                                <td class="">
                                    <span class="">Iot</span>
                                </td>
                                <td class="">
                                    <span class="">222239@utcancun.edu.mx</span>
                                </td>
                                <td class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-minus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                        <path d="M16 19h6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </td>
                                <tr>
                                    <td>
                                        <p class="fs-6">4</p>
                                    </td>
                                    <td>
                                        <p class="fs-6">Juan</p>
                                    </td>
                                    <td>
                                    <p class="fs-6">Perez</p>
                                </td>
                                <td class="w-10">
                                    <figure><img class="rounded-full" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
                                    <div class="member-info">
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-6 text-center">Ingeniero</p>
                                </td>
                                <td class="">
                                    <span class="">Iot</span>
                                </td>
                                <td class="">
                                    <span class="">222239@utcancun.edu.mx</span>
                                </td>
                                <td class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-minus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                        <path d="M16 19h6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </td>
                                <tr>
                                    <td>
                                        <p class="fs-6">5</p>
                                    </td>
                                    <td>
                                        <p class="fs-6">Juan</p>
                                    </td>
                                    <td>
                                    <p class="fs-6">Perez</p>
                                </td>
                                <td class="w-10">
                                    <figure><img class="rounded-full" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
                                    <div class="member-info">
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-6 text-center">Ingeniero</p>
                                </td>
                                <td class="">
                                    <span class="">Iot</span>
                                </td>
                                <td class="">
                                    <span class="">222239@utcancun.edu.mx</span>
                                </td>
                                <td class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-minus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                        <path d="M16 19h6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </td>
                                <tr>
                                    <td>
                                        <p class="fs-6">6</p>
                                    </td>
                                    <td>
                                        <p class="fs-6">Juan</p>
                                    </td>
                                    <td>
                                    <p class="fs-6">Perez</p>
                                </td>
                                <td class="w-10">
                                    <figure><img class="rounded-full" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
                                    <div class="member-info">
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-6 text-center">Ingeniero</p>
                                </td>
                                <td class="">
                                    <span class="">Iot</span>
                                </td>
                                <td class="">
                                    <span class="">222239@utcancun.edu.mx</span>
                                </td>
                                <td class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-minus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                        <path d="M16 19h6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </td>
                                <tr>
                                    <td>
                                        <p class="fs-6">7</p>
                                    </td>
                                    <td>
                                        <p class="fs-6">Juan</p>
                                    </td>
                                    <td>
                                    <p class="fs-6">Perez</p>
                                </td>
                                <td class="w-10">
                                    <figure><img class="rounded-full" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
                                    <div class="member-info">
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-6 text-center">Ingeniero</p>
                                </td>
                                <td class="">
                                    <span class="">Iot</span>
                                </td>
                                <td class="">
                                    <span class="">222239@utcancun.edu.mx</span>
                                </td>
                                <td class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-minus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                        <path d="M16 19h6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </td>
                                <tr>
                                    <td>
                                        <p class="fs-6">8</p>
                                    </td>
                                    <td>
                                        <p class="fs-6">Juan</p>
                                    </td>
                                    <td>
                                    <p class="fs-6">Perez</p>
                                </td>
                                <td class="w-10">
                                    <figure><img class="rounded-full" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
                                    <div class="member-info">
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-6 text-center">Ingeniero</p>
                                </td>
                                <td class="">
                                    <span class="">Iot</span>
                                </td>
                                <td class="">
                                    <span class="">222239@utcancun.edu.mx</span>
                                </td>
                                <td class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-minus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                        <path d="M16 19h6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </td>
                                <tr>
                                    <td>
                                        <p class="fs-6">9</p>
                                    </td>
                                    <td>
                                        <p class="fs-6">Juan</p>
                                    </td>
                                    <td>
                                    <p class="fs-6">Perez</p>
                                </td>
                                <td class="w-10">
                                    <figure><img class="rounded-full" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
                                    <div class="member-info">
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-6 text-center">Ingeniero</p>
                                </td>
                                <td class="">
                                    <span class="">Iot</span>
                                </td>
                                <td class="">
                                    <span class="">222239@utcancun.edu.mx</span>
                                </td>
                                <td class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-minus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                        <path d="M16 19h6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </td>
                                <tr>
                                    <td>
                                        <p class="fs-6">10</p>
                                    </td>
                                    <td>
                                        <p class="fs-6">Juan</p>
                                    </td>
                                    <td>
                                    <p class="fs-6">Perez</p>
                                </td>
                                <td class="w-10">
                                    <figure><img class="rounded-full" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png" /></figure>
                                    <div class="member-info">
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-6 text-center">Ingeniero</p>
                                </td>
                                <td class="">
                                    <span class="">Iot</span>
                                </td>
                                <td class="">
                                    <span class="">222239@utcancun.edu.mx</span>
                                </td>
                                <td class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-minus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                        <path d="M13.5 6.5l4 4" />
                                        <path d="M16 19h6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </td>
                        </table>
                    </div>
                </div>
    </main>
</x-app-layout>
@include('components\footer')

