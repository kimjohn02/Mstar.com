<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ContactMessage;
use App\Models\HeroImage;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the home page.
     */
    public function index(): View
    {
        $services = Service::where('is_active', true)
            ->orderBy('display_order')
            ->get();
        
        $heroImages = HeroImage::where('is_active', true)
            ->orderBy('display_order')
            ->get();
        
        $messagesCount = ContactMessage::count();
        $projectsCount = 150; // Placeholder
        $clientsCount = 500; // Placeholder
        
        return view('pages.home', [
            'services' => $services,
            'heroImages' => $heroImages,
            'messagesCount' => $messagesCount,
            'projectsCount' => $projectsCount,
            'clientsCount' => $clientsCount,
        ]);
    }

    /**
     * Show the about page.
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Show the services page.
     */
    public function services(): View
    {
        $services = Service::where('is_active', true)
            ->orderBy('display_order')
            ->paginate(9);

        return view('pages.services', compact('services'));
    }

    /**
     * Show single service page.
     */
    public function serviceShow(Service $service): View
    {
        $relatedServices = Service::where('is_active', true)
            ->where('id', '!=', $service->id)
            ->limit(3)
            ->get();

        return view('pages.service-detail', compact('service', 'relatedServices'));
    }

    /**
     * Show the contact page.
     */
    public function contact(): View
    {
        return view('pages.contact');
    }
}
