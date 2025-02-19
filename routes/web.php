<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home');
// Registration
Route::get('/register', [MemberController::class, 'register'])->name('auth.register');
Route::post('/register', [MemberController::class, 'store'])->name('member.store');

// Authentication
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Member Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/member/dashboard', function () {
        return view('member.dashboard');
    })->name('member.dashboard');
});

// Admin Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');