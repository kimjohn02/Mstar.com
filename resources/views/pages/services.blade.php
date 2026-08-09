@extends('layouts.app')

@section('title', 'Services - Morning Star Printing Press Co.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section hero-section--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 hero-content text-center">
                    <h1 class="hero-title hero-title--small">Our Services</h1>
                    <p class="hero-subtitle">Professional printing solutions tailored to your needs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                @forelse($services as $service)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 100 }}">
                        <div class="service-card h-100">
                            @if($service->image)
                                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="img-fluid rounded mb-3 service-image" loading="lazy" decoding="async">
                            @elseif($service->icon)
                                <div class="service-icon-box mb-3">
                                    <i class="fas {{ $service->icon }} feature-icon"></i>
                                </div>
                            @endif
                            <h3 class="mb-3">{{ $service->name }}</h3>
                            <p class="mb-3">{{ $service->description }}</p>

                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <div class="alert alert-info" role="alert">
                            <i class="fas fa-info-circle"></i> No services available at this moment. Please check back soon!
                        </div>
                    </div>
                @endforelse
            </div>

            @if($services->hasPages())
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $services->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            @endif
        </div>
    </section>

@endsection
