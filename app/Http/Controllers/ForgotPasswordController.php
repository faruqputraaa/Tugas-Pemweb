<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Auth\Passwords\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use ResetsPasswords;
}

class ResetPasswordController extends Controller
{
    use CanResetPassword;
}
