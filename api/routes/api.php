<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('contact', ContactController::class);
Route::apiResource('interaction', InteractionController::class);
Route::get('/', HomeController::class)->name('home');
