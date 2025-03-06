<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'thanks']);

Route::get('/admin', [ContactController::class, 'admin']);

/*Fortify認証 */
Route::get('/', [AuthController::class, 'index']);
/*  Route::post('/login', [AuthController::class, 'login']); */
/*  Route::post('/register', [AuthController::class, 'register']);  /*


