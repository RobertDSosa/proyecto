<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuienesController;
use App\Http\Controllers\FullCalendarController;


Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::get('quienes-somos', [QuienesController::class, 'index'])->name('quienes-somos.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('full-calendar', [FullCalendarController::class, 'index'])->name('calendario');

Route::post('full-calendar/action', [FullCalendarController::class, 'action'])->name('calendario.action');
