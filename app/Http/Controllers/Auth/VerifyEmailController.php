<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    /**
     * Mark the user's email as verified.
     */
    public function __invoke(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('admin.dashboard', absolute: false) . '?verified=1');
        }

        return view('auth.verify-email');
    }

    /**
     * Verify the user's email.
     */
    public function verify(Request $request)
    {
        return view('auth.verify-email');
    }

    /**
     * Resend the email verification notification.
     */
    public function resend(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('admin.dashboard', absolute: false));
        }

        return back()->with('status', 'verification-link-sent');
    }
}
