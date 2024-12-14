<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('messages')->group(function () {
        // Routes untuk Message
        Route::get('/{user:name}', [MessageController::class, 'getMessages'])->name('messages.get');
        Route::post('/{user:name}', [MessageController::class, 'sendMessage'])->name('message.send');

        // Routes untuk MessageProject
        Route::get('/projects/{project_id}', [MessageController::class, 'getProjectMessages'])->name('messages.projects.get');
        Route::post('/projects/{project_id}', [MessageController::class, 'sendProjectMessage'])->name('messages.projects.send');
    });
});

Route::get('/', function () {
    $user = User::whereNot('user_id', auth()->id())->first();
    return view('home', compact('user'));
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/room-chat/{user:name}', function ($user) {
    return view('room_chat', compact('user'));
})->name('room-chat');


require __DIR__ . '/auth.php';
