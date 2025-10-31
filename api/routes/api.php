<?php

declare(strict_types=1);

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InteractionController;
use Illuminate\Support\Facades\Route;

Route::apiResource('contact', ContactController::class);
Route::apiResource('interaction', InteractionController::class);
Route::get('/', HomeController::class)->name('home');
