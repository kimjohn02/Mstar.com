<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminContactMessageController extends Controller
{
    /**
     * Display a listing of contact messages.
     */
    public function index(): View
    {
        $messages = ContactMessage::latest()->paginate(15);
        return view('admin.contact-messages.index', compact('messages'));
    }

    /**
     * Show the specified message.
     */
    public function show(ContactMessage $contactMessage): View
    {
        // Mark as read
        $contactMessage->update(['read_at' => now()]);

        return view('admin.contact-messages.show', compact('contactMessage'));
    }

    /**
     * Delete the specified message.
     */
    public function destroy(ContactMessage $contactMessage): RedirectResponse
    {
        $contactMessage->delete();

        return redirect()->route('admin.contact-messages.index')
            ->with('success', 'Message deleted successfully.');
    }
}
