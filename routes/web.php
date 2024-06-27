<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ItemsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;   

// Route untuk halaman utama
Route::get('/', [Controller::class, 'index'])->name('index');

// Routes untuk login
Route::get('/login', [UserController::class, 'login_form'])->name('login');
Route::post('/login', [UserController::class, 'login_action'])->name('login_action');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Routes untuk register
Route::get('/register', [UserController::class, 'register_form'])->name('register_form');
Route::post('/register', [UserController::class, 'register_proses'])->name('register_proses');
Route::get('/layanan', [UserController::class, 'layanan'])->name('layanan');
Route::get('/beli', [UserController::class, 'beli'])->name('beli');

// Routes untuk layanan, jual, beli, dan kontak
Route::middleware(['auth'])->group(function () {
    Route::get('/jual', [UserController::class, 'jual'])->name('jual');
    Route::get('/kontak', [UserController::class, 'kontak'])->name('kontak');
});

// Routes untuk items
Route::middleware(['auth'])->group(function () {
    Route::post('/jual', [ItemsController::class, 'store'])->name('items.store');
    Route::get('product/{id}', [ItemsController::class, 'product'])->name('product');
    Route::get('beli/{type}', [ItemsController::class, 'beli'])->name('item.category');
    Route::get('/user/items', [ItemsController::class, 'userItems'])->name('barangsaya');
    Route::put('/user/items/{id}', [ItemsController::class, 'update'])->name('updatebarang');
    Route::delete('/user/items/{id}', [ItemsController::class, 'destroy'])->name('hapusbarang');
});

Route::get('password/reset', [\App\Http\Controllers\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [\App\Http\Controllers\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [\App\Http\Controllers\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [\App\Http\Controllers\ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/send-email', function () {
    $details = [
        'title' => 'Mail from ',
        'body' => 'This is a test email sent from Laravel application'
    ];

    Mail::to('rama420@students.amikom.ac.id')->send(new \App\Mail\TestMail($details));

    return 'Email sent successfully';
});

Route::get('/test-email', function () {
    Mail::raw('This is a test email', function ($message) {
        $message->to('your-email@example.com')
                ->subject('Test Email');
    });

    return 'Test email sent.';
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
