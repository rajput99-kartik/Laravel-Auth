<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [UserController::class,"index"])->name("index");
Route::get("/register", [UserController::class,"registerUser"])->name("auth.register");
Route::get("/forgot-password", [UserController::class,"forgotPassword"])->name('auth.forgot');
Route::get('/submit-register', [UserController::class,'submitRegister'])->name("auth.submitRegister");