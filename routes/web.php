<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Home;
use App\Http\Controllers\Admin\DepartmentController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     echo "Hello world!";
// });

Route::resource('test', TestController::class);
Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/booking', [Home::class, 'booking'])->name('booking');
Route::get('/admin/login', [Home::class, 'login'])->name('admin.login');
Route::get('/admin/dashboard', [Home::class, 'dashboard'])->name('admin.dashboard');

Route::resource('admin/departments', DepartmentController::class);