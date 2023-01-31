<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/produtos', [EventController::class, 'products']);

Route::get('/criar', [EventController::class, 'create']);

Route::post('/events', [EventController::class, 'store']);

Route::get('/events/{id}', [EventController::class, 'show']);
