@extends('layouts.auth')

@section('content')
<div class="auth-card">
    <div class="auth-header">
        <img src="{{ asset('Morningstar.logo.jpg') }}" alt="Morning Star Logo">
        <h1>Admin Login</h1>
        <p>Welcome back to your dashboard</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
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

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember me</label>
        </div>

        <button type="submit" class="btn-submit">
            <i class="fas fa-sign-in-alt"></i> Login
        </button>
    </form>

    <div class="auth-footer">
        <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
        <p><a href="/">← Back to Home</a></p>
    </div>
</div>
@endsection
