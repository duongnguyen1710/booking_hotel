<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home.index');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/',[AdminController::class, 'home']);

Route::get('/home',[AdminController::class, 'index'])->name('home');

Route::get('/create_room',[AdminController::class, 'create_room']);

Route::post('/add_room',[AdminController::class, 'add_room']);