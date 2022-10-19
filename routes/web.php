<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Models\Document;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sections/{section}', [PageController::class, 'show'])->name('section.details');

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'sections'])->name('dashboard.sections.index');
    Route::post('sections', [SectionController::class, 'store'])->name('sections.create');
    Route::get('sections/{section}/edit', [SectionController::class, 'edit'])->name('sections.edit');
    Route::put('sections/{section}', [SectionController::class, 'update'])->name('sections.update');
    Route::put('sections/{section}', [SectionController::class, 'changeState'])->name('sections.state');
    Route::delete('sections/{section}', [SectionController::class, 'destroy'])->name('sections.destroy');
    Route::get('sections/{section}', [SectionController::class, 'show'])->name('sections.show');


    Route::post('documents', [DocumentController::class, 'store'])->name('docs.store');
    Route::delete('documents/{document}', [DocumentController::class, 'destroy'])->name('docs.destroy');


    Route::get('tags', [DashboardController::class, 'tags'])->name('dashboard.tags.index');
    Route::post('tags', [TagController::class, 'store'])->name('tags.create');
    Route::get('tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');
    Route::put('tags/{tag}', [TagController::class, 'update'])->name('tags.update');
    Route::delete('tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
});





// Auth Routes 
Route::get('/register', [UserController::class, 'create'])->name('register'); // Show register form
Route::post('/users', [UserController::class, 'store'])->name('store_user'); // Create new user
Route::post('/logout', [UserController::class, 'logout'])->name('logout'); // Log user out
Route::get('/login', [UserController::class, 'login'])->name('login'); // Show Login form
Route::get('/users/authenticate', [UserController::class, 'authenticate'])->name('validate_user'); // Log In User


//TODO 404 Override
// Route::fallback();
