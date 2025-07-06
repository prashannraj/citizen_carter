<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FrontendController as ApiFrontendController;

Route::get('/frontend', [ApiFrontendController::class, 'index'])->name('index');