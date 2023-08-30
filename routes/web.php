<?php

use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function() {
        $user = User::find(3);

        return view(
            'dashboard',
            [ 'projects' => $user->projects ]
        );
    })->name('dashboard');

    Route::get('projects/{project:slug}', [ProjectController::class, 'show']);

    Route::resource('projects', ProjectController::class)->except([
        'index', 'create', 'show'
    ]);

    Route::get('projects/{project:slug}/{issue:slug}', [IssueController::class, 'show']);
});

require __DIR__.'/auth.php';
