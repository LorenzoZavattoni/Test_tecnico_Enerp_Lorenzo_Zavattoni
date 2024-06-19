<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('homePage');

// ROTTE EVENTI
Route::get('/create-event', [EventController::class,'create'])->name('createEvent');
Route::post('/store-event', [EventController::class,'store'])->name('storeEvent');
Route::get('/show-event/{event}', [EventController::class, 'show'])->name('showEvent');
Route::get('/edit-event/{event}', [EventController::class, 'edit'])->name('editEvent');
Route::get('/edit-partecipant/{event}', [EventController::class, 'editPartecipant'])->name('editPartecipant');
Route::put('/update-event/{event}', [EventController::class, 'update'])->name('updateEvent');
Route::put('/update-partecipant/{person}/{event}', [EventController::class, 'updatePartecipant'])->name('updatePartecipant');

// ROTTE PERSONE
Route::get('/index-people', [PersonController::class,'index'])->name('indexPeople');
Route::get('/create-person', [PersonController::class,'create'])->name('createPerson');
Route::post('/store-person', [PersonController::class,'store'])->name('storePerson');
Route::get('/edit-person/{person}', [PersonController::class, 'edit'])->name('editPerson');
Route::put('/update-person/{person}', [PersonController::class, 'update'])->name('updatePerson');
Route::put('/detach/{person}', [PersonController::class, 'detach'])->name('detach');