@extends('layouts.auth')

@section('content')
<div class="auth-card">
    <div class="auth-header">
        <img src="{{ asset('Morningstar.logo.jpg') }}" alt="Morning Star Logo">
        <h1>Reset Password</h1>
        <p>Enter your new password</p>
    </div>

    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $request->email }}" readonly>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">New Password</label>
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
            <i class="fas fa-key"></i> Reset Password
        </button>
    </form>

    <div class="auth-footer">
        <p><a href="{{ route('login') }}">← Back to Login</a></p>
    </div>
</div>
@endsection
