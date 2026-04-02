<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;

Route::post('/check', [CheckController::class, 'check']);

Route::get('/', function () {
    return view('form');
});