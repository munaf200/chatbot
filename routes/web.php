<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/service', [ServiceController::class, 'index']);