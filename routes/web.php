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

Route::get('/registerUser',[UserController::class, 'registerUser']);
Route::get("/forgot-password", [UserController::class,"forgotPassword"])->name('auth.forgot');
Route::post('/submitRegister',[UserController::class, 'submitRegister'])->name("submit.register");
Route::post("/loginUser",[UserController::class,"loginUser"])->name("auth.login");
