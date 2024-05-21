<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfilesController::class, 'index'])->name('page.index');

// without auth
//
Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
//blogs routes
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show']);

// indexpage
Route::get('/index', [ProfilesController::class, 'index'])->name('page.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //blogs route
    Route::get('/admin/blogs', [BlogController::class, 'blogs'])->name('blogs.admin');
    Route::post('/admin/add-blog', [BlogController::class, 'store'])->name('blogs.create');

    // project route
    Route::get('admin/projects', [ProjectController::class, 'create_project'])->name('project.add');
    Route::post('admin/add-project',[ProjectController::class, 'store'])->name('projects.create');
    
});

require __DIR__.'/auth.php';
