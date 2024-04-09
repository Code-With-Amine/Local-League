<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/getName/{nom}', [TestController::class, 'index']);
Route::get('/', [TestController::class, 'index'])

// http://127.0.0.1:8000/getName
?>