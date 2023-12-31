<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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


Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('logout', [AuthController::class, 'destroy'])->name('logout');

    //Fitur ke 5 Read data dari Tabel Dementee
    Route::get('/dementee', [AuthController::class, 'dementee']) -> name('dementee');
    
    // Edit Profile
    Route::get('/edit', [AuthController::class, 'showEditForm'])->name('edit'); 
    Route::put('/edit', [AuthController::class, 'edit'])->name('edit.store');

    // Fitur Delete Profile
    Route::delete('/delete', [AuthController::class, 'delete']) -> name('delete');
});

Route::middleware('admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    // Route::resource('/users', UserController::class);
});
