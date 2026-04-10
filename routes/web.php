<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Authentication Routes
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login.post');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

// Student Management Routes (Protected)
Route::prefix('students')->middleware('auth')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('students.index');
    Route::get('/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/', [StudentController::class, 'store'])->name('students.store');
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/{id}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
});

// Classroom Management Routes (Protected)
Route::prefix('classrooms')->middleware('auth')->group(function () {
    Route::get('/', [ClassroomController::class, 'index'])->name('classrooms.index');
    Route::get('/create', [ClassroomController::class, 'create'])->name('classrooms.create');
    Route::post('/', [ClassroomController::class, 'store'])->name('classrooms.store');
    Route::get('/{classroom}/edit', [ClassroomController::class, 'edit'])->name('classrooms.edit');
    Route::put('/{classroom}', [ClassroomController::class, 'update'])->name('classrooms.update');
    Route::delete('/{classroom}', [ClassroomController::class, 'destroy'])->name('classrooms.destroy');
});
