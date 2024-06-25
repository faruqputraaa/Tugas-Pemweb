<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ItemsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ContactController;

// Route untuk halaman utama
Route::get('/', [Controller::class, 'index'])->name('index');

// Routes untuk login
Route::get('/login', [UserController::class, 'login_form'])->name('login_form');
Route::post('/login', [UserController::class, 'login_action'])->name('login_action');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Routes untuk register
Route::get('/register', [UserController::class, 'register_form'])->name('register_form');
Route::post('/register', [UserController::class, 'register_proses'])->name('register_proses');

// Routes untuk layanan, jual, beli, dan kontak
Route::get('/layanan', [UserController::class, 'layanan'])->name('layanan');
Route::get('/jual', [UserController::class, 'jual'])->name('jual');
Route::get('/beli', [UserController::class, 'beli'])->name('beli');
Route::get('/kontak', [UserController::class, 'kontak'])->name('kontak');

// Routes untuk items
Route::get('product/{id}', [ItemsController::class, 'product'])->name('product');
Route::resource('items', ItemsController::class);

// Routes untuk reset password
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');



Route::post('/contact/send', [ContactController::class, 'sendContactForm'])->name('contact.send');
