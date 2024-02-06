<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalDataController;
use App\Http\Controllers\TitlesCertificatesController;
use App\Http\Controllers\ProfessionalHistoryController;
use App\Http\Controllers\ToolsSkillsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Home Route
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Your existing routes here...

    Route::resource('titles-certificates', TitlesCertificatesController::class);
    Route::resource('professional-history', ProfessionalHistoryController::class);
    Route::resource('tools-skills', ToolsSkillsController::class);

    // PersonalDataController routes
    Route::resource('personal-data', PersonalDataController::class)->only(['index', 'show']);
    // Additional specific routes for PersonalDataController if needed

    // Additional route for serving React application
    Route::get('/app', function () {
        return view('react_app'); // Assuming you have a Blade view named react_app.blade.php
    });
});
