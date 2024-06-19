<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PersonController;
use App\Http\Controllers\Api\EventController;



    // ROTTE PERSONE
    Route::get('/people', [PersonController::class, 'index']);
    Route::post('/people', [PersonController::class, 'store']);
    Route::get('/people/{id}', [PersonController::class, 'show']);
    Route::put('/people/{person}', [PersonController::class, 'update']);
    Route::delete('/people/{id}', [PersonController::class, 'destroy']);
    Route::put('/people/{person}/detach', [PersonController::class, 'detach']);

    // ROTTE EVENTI
    Route::get('/events', [EventController::class, 'index']);
    Route::post('/events', [EventController::class, 'store']);
    Route::get('/events/{event}', [EventController::class, 'show']);
    Route::put('/events/{event}', [EventController::class, 'update']);
    Route::delete('/events/{event}', [EventController::class, 'destroy']);
    Route::put('/events/{event}/partecipant/{person}', [EventController::class, 'updatePartecipant']);