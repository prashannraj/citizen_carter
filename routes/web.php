<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
//use App\Http\Controllers\MemberController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
//Route::get('/members', [MemberController::class, 'index']);
Route::get('/lang/{locale}', function ($locale) {
            session()->put('locale', $locale);
            return redirect()->back();
        })->name('change-language');
