<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'sections'])->name('dashboard.sections.index');
    Route::post('/dashboard/sections/create', [SectionController::class, 'store'])->name('sections.create');
    Route::get('/dashboard/sections/{section}', [SectionController::class, 'edit'])->name('sections.edit');
    Route::put('/dashboard/sections/{section}', [SectionController::class, 'update'])->name('sections.update');
    Route::delete('/dashboard/sections/{section}', [SectionController::class, 'destroy'])->name('sections.destroy');


    Route::get('/dashboard/tags', [DashboardController::class, 'tags'])->name('dashboard.tags.index');
    Route::post('/dashboard/tags/create', [TagController::class, 'store'])->name('tags.create');
    Route::get('/dashboard/tags/{tag}', [TagController::class, 'edit'])->name('tags.edit');
    Route::put('/dashboard/tags/{tag}', [TagController::class, 'update'])->name('tags.update');
    Route::delete('/dashboard/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
});





// Auth Routes 
Route::get('/register', [UserController::class, 'create'])->name('register'); // Show register form
Route::post('/users', [UserController::class, 'store'])->name('store_user'); // Create new user
Route::post('/logout', [UserController::class, 'logout'])->name('logout'); // Log user out
Route::get('/login', [UserController::class, 'login'])->name('login'); // Show Login form
Route::get('/users/authenticate', [UserController::class, 'authenticate'])->name('validate_user'); // Log In User
