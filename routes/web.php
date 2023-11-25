<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\AuthController;
use App\Http\Controllers\RuleController;




Route::middleware('guest')->group(function () {
    Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    Route::get('/rules', [RuleController::class, 'index'])->name('rules.index');
    Route::post('/rules/store', [RuleController::class, 'store'])->name('rules.post');
    Route::delete('/rules/{roleId}', [RuleController::class, 'destroy'])->name('rules.destroy');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/generate-script/{uniqueKey}', [RuleController::class, 'generateJsSnippet'])->name('generateJsSnippet');
