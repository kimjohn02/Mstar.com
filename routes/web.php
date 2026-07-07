<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminContactMessageController;
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

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/service/{service:slug}', [HomeController::class, 'serviceShow'])->name('service.show');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Contact Form Submission
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

// Authentication Routes
require __DIR__.'/auth.php';

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    
    // Services Management
    Route::resource('services', ServiceController::class)->names([
        'index' => 'services.index',
        'create' => 'services.create',
        'store' => 'services.store',
        'edit' => 'services.edit',
        'update' => 'services.update',
        'destroy' => 'services.destroy',
    ]);
    
    // Contact Messages Management
    Route::resource('contact-messages', AdminContactMessageController::class)->only(['index', 'show', 'destroy'])->names([
        'index' => 'contact-messages.index',
        'show' => 'contact-messages.show',
        'destroy' => 'contact-messages.destroy',
    ]);
});
