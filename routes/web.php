<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\http\Controllers\UserController;
use App\http\Controllers\ReportController;
use App\http\Controllers\LoginController;

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

Route::get('/', function () {
    return Inertia::render('Home');
});


Route::get('/user', [UserController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);


