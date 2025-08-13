<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', [\App\Http\Controllers\TestController::class, 'index']);
Route::get('/test-var', [\App\Http\Controllers\TestController::class, 'var']);

