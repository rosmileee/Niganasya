<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/room/view', [RoomController::class, 'index'])->name('room.index');
Route::get('/room/create/view', [RoomController::class, 'create'])->name('room.create');
Route::post('/room', [RoomController::class, 'store'])->name('room.store'); // Add this line
