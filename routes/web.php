<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/room-chat', function () {
    return view('room_chat');
});

Route::get('/group-project', function () {
    return view('group_project');
});

Route::get('/my-project', function () {
    return view('my_project');
});

require __DIR__.'/auth.php';
