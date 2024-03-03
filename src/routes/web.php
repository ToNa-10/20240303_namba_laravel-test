<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;

Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts/thanks', [ContactController::class, 'thanks']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/register', [RegisterController::class, 'register']);