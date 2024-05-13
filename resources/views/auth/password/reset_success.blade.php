<!-- resources/views/auth/passwords/reset_success.blade.php -->
@extends('Layout.Navbar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password Success') }}</div>

                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{ __('Your password has been reset successfully! You can now login with your new password.') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
