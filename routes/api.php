<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/users/{id}', [UserController::class, 'getUser'])->middleware('auth:sanctum');
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/allusers', [UserController::class, 'getAllUsers'])->middleware(['auth:sanctum', 'AdminAuthorization']);

Route::post('/individuals',  [UserController::class, 'registerIndividual']);
Route::post('/companies',  [UserController::class, 'registerCompany']);
Route::post('/login', [UserController::class, 'login'])->name('login');

// Route::get('/users/{id}', [UserController::class, 'getUser']);
