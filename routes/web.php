<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\LoginController;
use App\Models\Aspirasi;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;

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

// User
Route::get('/', function () {
    return view('index', [
        'kategoris' => Kategori::all()
    ]);
});
Route::get('/profile', function () {
    return view('profile');
});

// Aspirasi
Route::resource('/aspirasi', AspirasiController::class);
Route::post('/aspirasi/view', [AspirasiController::class, 'view']);

// Login & logout
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'autentikasi'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth');
Route::get('/dashboard/view', [AdminController::class, 'view'])->middleware('auth');
Route::get('/dashboard/export', [AdminController::class, 'export'])->middleware('auth');

// Search
Route::get('/cari', function () {
    return view('search', [
        'aspirasis' => Aspirasi::latest()->filter(request(['search']))->get()
    ]);
});
