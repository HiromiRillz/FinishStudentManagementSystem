<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('register',[AuthController::class,'showRegister'])->name('show.register');
Route::get('login',[AuthController::class,'showLogin'])->name('show.login');
Route::post('register',[AuthController::class,'register'])->name('register');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::post('logout',[AuthController::class,'logout'])->name('logout');
Route::get('MainPage',[AuthController::class,'showMainPage'])->name('show.MainPage');


Route::get('user/{user}/edit', [AuthController::class, 'editUser'])->name('edit.User');
Route::put('/users/{user}', [AuthController::class, 'update'])->name('update.User'); 
Route::post('/user/{user}/confirm-delete', [AuthController::class, 'confirmDelete'])->name('confirmDelete.User');
Route::delete('/user/{user}/delete', [AuthController::class, 'destroy'])->name('delete.User');


Route::get('/student/create',[StudentController::class,'createStudent'])->name('student.create');
Route::post('/student/register',[StudentController::class,'registerStudent'])->name('student.register');
Route::get('/student/{id}/details',[StudentController::class,'showStudentDetails'])->name('student.show');
Route::get('/student/Search',[StudentController::class,'studentSearch'])->name('student.search');
Route::get('/student/{student}/edit',[StudentController::class,'editStudentInfo'])->name('student.edit');
Route::put('/student/{student}/update',[StudentController::class,'updateStudentInfo'])->name('student.update');
Route::delete('/student/{student}',[StudentController::class,'delete'])->name('student.delete');
Route::post('/students/update-grades', [StudentController::class, 'updateGrades'])->name('student.updateGrades');


Route::get('/grades/{id}/register', [GradeController::class, 'showStudentGrade'])->name('show.student.grade');
Route::post('/grades/{id}/confirm/register', [GradeController::class, 'registerStudentGrade'])->name('register.grade');
Route::get('/grades/{id}/edit', [GradeController::class, 'editStudentGrade'])->name('show.grade.edit');
Route::put('/grades/{id}/update', [GradeController::class, 'updateStudentGrade'])->name('grades.update');



