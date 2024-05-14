<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;

Route::get('/', [Controller::class, 'index'])->name('index');

Route::get('/login', [UserController::class, 'login_form'])->name('login_form');
Route::post('/login', [UserController::class, 'login_action'])->name('login_action');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'register_form'])->name('register_form');
Route::post('/register', [UserController::class, 'register_proses'])->name('register_proses');

Route::get('/layanan', [UserController::class, 'layanan'])->name('layanan');
Route::get('/jual', [UserController::class, 'jual'])->name('jual');
Route::get('/product', [UserController::class, 'product'])->name('product');
Route::get('/beli', [UserController::class, 'beli'])->name('beli');
Route::get('/kontak', [UserController::class, 'kontak'])->name('kontak');


Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
