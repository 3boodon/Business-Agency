<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('home.index');
})->name('dashboard');




// Show register form
Route::get('/register', [UserController::class, 'create'])->name('register');
// Create new user
Route::post('/users', [UserController::class, 'store']);
// Log user out
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
// Show Login form
Route::get('/login', [UserController::class, 'login'])->name('login');
// Log In User
Route::get('/users/authenticate', [UserController::class, 'authenticate']);
