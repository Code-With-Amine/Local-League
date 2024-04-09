<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/getName/{nom}', [TestController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
