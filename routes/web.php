<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactMessageController;
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
