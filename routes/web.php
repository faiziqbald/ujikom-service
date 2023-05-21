<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailArtikelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function(){
//     return redirect()->route('dashboard');
// });

//Auth
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

//Reader
Route::get('/', [HomeController::class, 'index']);
Route::get('/artikel', [DetailArtikelController::class, 'index']);

//Writer

//Admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/admin/user', [AdminUserController::class, 'index']);
// Route::get('/result', [ResultController::class, 'result']);