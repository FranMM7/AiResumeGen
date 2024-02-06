<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalDataController;
use App\Http\Controllers\TitlesCertificatesController;
use App\Http\Controllers\ProfessionalHistoryController;
use App\Http\Controllers\ToolsSkillsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Home Route
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Personal Data Routes
    Route::resource('personal-data', PersonalDataController::class);

    // Titles and Certificates Routes
    Route::resource('titles-certificates', TitlesCertificatesController::class);

    // Professional History Routes
    Route::resource('professional-history', ProfessionalHistoryController::class);

    // Tools and Skills Routes
    Route::resource('tools-skills', ToolsSkillsController::class);
});
