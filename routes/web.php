<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ListaJobController;
use App\Http\Controllers\TesteController;
use Spatie\GitHubWebhooks\Models\GitHubWebhookCall;


Route::get('/', function () {
    ds('Dashboard');
    return  view('dashboard');
});

Route::get('listajob', [ListaJobController::class, 'listajob'])->name('listajob');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::githubWebhooks('webhook');

Route::get('/showhook', [ShowController::class, 'showArray'])->name('showhook');

Route::get('/teste', [TesteController::class, 'showArray']);
