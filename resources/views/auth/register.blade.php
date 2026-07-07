@extends('layouts.auth')

@section('content')
<div class="auth-card">
    <div class="auth-header">
        <img src="{{ asset('Morningstar.logo.jpg') }}" alt="Morning Star Logo">
        <h1>Create Admin Account</h1>
        <p>Register as a website administrator</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle"></i> Please fix the errors below.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required>
            @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn-submit">
            <i class="fas fa-user-plus"></i> Register
        </button>
    </form>

    <div class="auth-footer">
        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        <p><a href="/">← Back to Home</a></p>
    </div>
</div>
@endsection
