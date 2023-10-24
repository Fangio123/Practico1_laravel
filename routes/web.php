<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/create_user', [DashboardController::class,'create_user'])->name('create.user');

Route::post('/save_user', [App\Http\Controllers\HomeController::class, 'index'])->name('save.user');

Route::delete('/delete_user{id}', [DashboardController::class,'delete_user'])->name('delete.user');

Route::get('/edit_user{id}', [DashboardController::class,'edit_user'])->name('edit.user');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

