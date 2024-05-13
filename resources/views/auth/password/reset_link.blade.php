<!-- resources/views/auth/passwords/reset_link.blade.php -->

@extends('Layout.Navbar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password Link Sent') }}</div>

                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{ __('We have emailed your password reset link! Please check your email.') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
