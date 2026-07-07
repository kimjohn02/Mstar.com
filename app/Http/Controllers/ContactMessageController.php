<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactMessageController extends Controller
{
    /**
     * Show the contact form.
     */
    public function create(): View
    {
        return view('pages.contact');
    }

    /**
     * Store a contact message.
     */
    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        ContactMessage::create($request->validated());

        return redirect()->route('contact')
            ->with('success', 'Thank you! Your message has been sent successfully. We will contact you soon.');
    }
}
