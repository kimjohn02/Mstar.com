@extends('layouts.app')

@section('title', $service->name . ' - Morning Star Printing Press Co.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section hero-section--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 hero-content text-center">
                    <h1 class="hero-title hero-title--small">{{ $service->name }}</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4" data-aos="fade-right">
                    @if($service->image)
                        <div class="hero-image-box mb-4">
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="img-fluid rounded-lg detail-image" loading="lazy" decoding="async">
                        </div>
                    @endif
                    
                    <h2 class="section-heading">{{ $service->name }}</h2>
                    
                    <div class="content-card">
                        <h3>Service Description</h3>
                        <p class="section-description">{{ $service->description }}</p>

                        @if($service->benefits)
                            <h3 class="mt-4">Benefits</h3>
                            <p class="section-description">{{ $service->benefits }}</p>
                        @endif

                        @if($service->applications)
                            <h3 class="mt-4">Applications</h3>
                            <p class="section-description">{{ $service->applications }}</p>
                        @endif
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('services') }}" class="btn-primary-custom me-2">
                            <i class="fas fa-arrow-left"></i> Back to Services
                        </a>
                        <a href="{{ route('contact') }}" class="btn-primary-custom">
                            <i class="fas fa-envelope"></i> Request Quote
                        </a>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 mb-4" data-aos="fade-left">
                    <div class="sidebar-card mb-4">
                        <h4 class="section-heading section-heading--accent">
                            <i class="fas fa-info-circle"></i> Quick Info
                        </h4>
                        <ul>
                            <li>
                                <strong>Service Type:</strong>
                                <span>{{ $service->name }}</span>
                            </li>
                            <li>
                                <strong>Status:</strong>
                                <span>{{ $service->is_active ? 'Available' : 'Not Available' }}</span>
                            </li>
                            <li>
                                <strong>Quality:</strong>
                                <span>Premium Grade</span>
                            </li>
                        </ul>
                    </div>

                    <div class="info-card text-center">
                        <h4 class="mb-4">Need This Service?</h4>
                        <p class="section-description">Contact us today for pricing and availability information.</p>
                        <a href="{{ route('contact') }}" class="btn-secondary-custom mt-3">
                            <i class="fas fa-phone"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($relatedServices->count() > 0)
        <section class="section-padding bg-surface">
            <div class="container">
                <div class="section-title">
                    <h2>Related Services</h2>
                </div>
                <div class="row">
                    @foreach($relatedServices as $related)
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="service-card">
                                @if($related->image)
                                    <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->name }}" class="img-fluid rounded mb-3 service-image" loading="lazy" decoding="async">
                                @endif
                                <h3>{{ $related->name }}</h3>
                                <p>{{ Str::limit($related->description, 100) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
