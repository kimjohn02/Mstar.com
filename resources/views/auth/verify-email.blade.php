@extends('layouts.auth')

@section('content')
<div class="auth-card">
    <div class="auth-header">
        <img src="{{ asset('Morningstar.logo.jpg') }}" alt="Morning Star Logo">
        <h1>Verify Email</h1>
        <p>Please verify your email address</p>
    </div>

    <div class="alert alert-info">
        <i class="fas fa-info-circle"></i> Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?
    </div>

    <form action="{{ route('verification.send') }}" method="POST">
        @csrf
        <button type="submit" class="btn-submit">
            <i class="fas fa-redo"></i> Resend Verification Email
        </button>
    </form>

    <div class="auth-footer">
        <p><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></p>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
@endsection
