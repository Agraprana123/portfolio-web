<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;

Route::view('/', 'pages.home')->name('home');

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::view('/', 'admin.dashboard')
            ->name('dashboard');

        // Tambahkan rute CRUD proyek di sini.
    });

Route::get('/work', function () {
    $projects = Project::where('published', true)
        ->latest()
        ->paginate(9);

    return view('pages.work.index', compact('projects'));
})->name('work.index');

Route::get('/work/{project:slug}', function (Project $project) {
    abort_unless($project->published, 404);

    return view('pages.work.show', compact('project'));
})->name('work.show');

Route::view('/about', 'pages.about')->name('about');

Route::view('/contact', 'pages.contact')->name('contact');