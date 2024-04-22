<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\Teachers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

use App\livewire\Examples\Example1;

use function Termwind\render;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



// ! ROUTES FOR ADMINISTRATOR
Route::get('/',[StudentController::class,'login'])->name('login');

Route::get('/dashboard',[AdminController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/student',[StudentController::class,'student'])->middleware(['auth', 'verified'])->name('student');
Route::get('/teacher',[Teachers::class,'index'])->middleware(['auth', 'verified'])->name('teacher');
// * ROUTES FOR SEE STUDENTS
Route::get('/showStudents',[StudentController::class,'showStudents'])->middleware(['auth', 'verified'])->name('showStudents');

// * ROUTE CREATE STUDENT
Route::post('/student.store',[StudentController::class,'store'])->middleware(['auth', 'verified'])->name('student.store');
// * ROUTE DELETE STUDENT
Route::delete('/student/{id}',[StudentController::class,'destroy'])->middleware(['auth', 'verified'])->name('student.destroy');

// * ROUTE UPDATE STUDENT
// Route::get('/editStudent',[StudentController::class,'update'])->middleware(['auth', 'verified'])->name('student.update');
Route::put('/student//{id}',[StudentController::class,'update'])->middleware(['auth', 'verified'])->name('student.update');

// Route::resource('student', StudentController::class);

// ! SUBJECTS
Route::get('/subject',[SubjectController::class,'index'])->middleware(['auth', 'verified'])->name('showStudents');
// Route::get('/subject',[SubjectController::class,'index']);

//* CRUD ROUTES OF ACTIVITIES
Route::get('/activities',[ActivitiesController::class,'index'])->middleware(['auth', 'verified'])->name('activities');
Route::post('/activities.store',[ActivitiesController::class,'store'])->middleware(['auth', 'verified'])->name('activities.store');
Route::put('/activities//{id}',[ActivitiesController::class,'update'])->middleware(['auth', 'verified'])->name('activities.update');
Route::delete('/activities/{id}',[ActivitiesController::class,'destroy'])->middleware(['auth', 'verified'])->name('activities.destroy');

// ! DOCUMENT PDF
Route::get('cardex/{estudiante}', [ReportsController::class, 'print_cardex'])->middleware(['auth', 'verified'])->name('students.cardex');



// ! LOGIN ROUTES
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('livewire',Example1::class)->middleware(['auth', 'verified'])->name('livewire');

require __DIR__.'/auth.php';

    
//!                                                  40 MODULOS         
//!                                                  10 GRUPAL     
//!                                                  15 EXAMEN     
//!                                                  15 INVESTIGACIONES     
//!                                                  20 SER     
//!                                                  10 participacion   
//!                                                  10 te / res