<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [EventController::class, 'index'])->name('events.index');

    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events/create', [EventController::class, 'store']);

    Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{event}/edit', [EventController::class, 'update']);
    
    Route::delete('/events/{event}/delete', [EventController::class, 'destroy'])->name('events.delete');

    Route::get('/events/{event}/subscribers', [SubscriberController::class, 'index'])->name('events.subscribers');

    Route::post('/events/{event}/subscribers/{user}', [SubscriberController::class, 'store'])->name('events.subscribers.create');
    Route::delete('/events/subscribers/{subscriber}', [SubscriberController::class, 'destroy'])->name('events.subscribers.cancel-subscription');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
