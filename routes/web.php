<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

    Route::resource('project', ProjectController::class);
    Route::post('/start-project/{project:name}', [ProjectController::class, 'startProject'])->name('project.start_project');
});

Route::get('/', function () {
    $user = User::whereNot('user_id', auth()->id())->first();
    return view('home', compact('user'));
})->name('home');

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/room-chat/{user:name}', function ($user) {
    return view('room_chat', compact('user'));
})->name('room-chat');

Route::get('/group-project', function () {
    return view('group_project');
});

Route::get('/my-project/{project_id}', function ($project_id) {
    $project = Project::with('rolesNeeded')->find($project_id);

    // Hitung kebutuhan dan kontribusi
    $rolesNeeded = DB::table('project_roles')
        ->where('project_id', $project_id)
        ->select('role_id', 'number_of_people')
        ->get();

    $rolesContributed = DB::table('project_contributtors')
        ->where('project_id', $project_id)
        ->select('role_id', DB::raw('COUNT(*) as count'))
        ->groupBy('role_id')
        ->get()
        ->keyBy('role_id');

    // Cek kebutuhan yang belum terpenuhi
    $unfulfilledRoles = [];
    foreach ($rolesNeeded as $role) {
        $contributed = $rolesContributed[$role->role_id]->count ?? 0;
        if ($contributed < $role->number_of_people) {
            $unfulfilledRoles[] = [
                'role' => DB::table('roles')->where('id', $role->role_id)->value('name'),
                'needed' => $role->number_of_people - $contributed
            ];
        }
    }

    // Disable Start jika ada kebutuhan yang belum terpenuhi
    $canStart = empty($unfulfilledRoles);

    return view('my_project', compact('project', 'unfulfilledRoles', 'canStart'));
})->name('my_project');

Route::get('/detail-project', function () {
    return view('detail_project');
});

Route::get('/create-project', function () {

    $roles = Role::where('status_scope', 'project')->get();
    return view('create_project', compact('roles'));
});

Route::get('/start-project', function () {
    return view('my_project.start_page');
});

Route::get('/request-page', function () {
    return view('request_page');
});

Route::get('/edit-my-project', function () {
    return view('my_project.edit_my_project');
});

Route::get('/edit-contributor-project', function () {
    return view('my_project.edit_contributor_project');
});

Route::get('/detail-task', function () {
    return view('task.detail_task');
});

Route::get('/edit-task', function () {
    return view('task.edit_task');
});

Route::get('/leaderboad', function () {
    return view('leaderboard');
});

Route::get('/profile-page', function () {
    return view('profile_page');
});

Route::get('/welcome', function () {
    return view('landing_page');
});

require __DIR__.'/auth.php';
