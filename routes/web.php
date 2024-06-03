<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;

Route::get('/', function () {
    return view('ADHD');
});

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//Authentication

//admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');


//student
Route::get('/patient/dashboard', [PatientController::class, 'index'])->name('patient.dashboard');
