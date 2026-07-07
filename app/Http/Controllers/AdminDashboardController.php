<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ContactMessage;
use App\Models\HeroImage;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the admin dashboard.
     */
    public function index(): View
    {
        $totalServices = Service::count();
        $activeServices = Service::where('is_active', true)->count();
        $totalMessages = ContactMessage::count();
        $unreadMessages = ContactMessage::whereNull('read_at')->count();
        $websiteVisits = 1250; // Placeholder

        // Get recent messages
        $recentMessages = ContactMessage::latest()->limit(5)->get();

        return view('admin.dashboard', [
            'totalServices' => $totalServices,
            'activeServices' => $activeServices,
            'totalMessages' => $totalMessages,
            'unreadMessages' => $unreadMessages,
            'websiteVisits' => $websiteVisits,
            'recentMessages' => $recentMessages,
        ]);
    }
}
