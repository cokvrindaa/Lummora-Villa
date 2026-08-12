<?php

use Illuminate\Support\Facades\Route;

// Mengambil controller 
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index']);