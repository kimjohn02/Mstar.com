@extends('layouts.auth')

@section('content')
<div class="auth-card">
    <div class="auth-header">
        <img src="{{ asset('Morningstar.logo.jpg') }}" alt="Morning Star Logo">
        <h1>Forgot Password</h1>
        <p>Enter your email to reset your password</p>
    </div>

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form action="{{ route('password.email') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn-submit">
            <i class="fas fa-envelope"></i> Send Reset Link
        </button>
    </form>

    <div class="auth-footer">
        <p><a href="{{ route('login') }}">← Back to Login</a></p>
        <p><a href="/">← Back to Home</a></p>
    </div>
</div>
@endsection
