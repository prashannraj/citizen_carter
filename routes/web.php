<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
//use App\Http\Controllers\MemberController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
//Route::get('/members', [MemberController::class, 'index']);
