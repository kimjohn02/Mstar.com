@extends('layouts.app')

@section('title', 'Home - Morning Star Printing Press Co.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-content" data-aos="fade-up">
                    <h1 class="hero-title">Printing Ideas Into Reality</h1>
                    <p class="hero-subtitle">Delivering high-quality printing solutions for businesses, schools, organizations, and individuals.</p>
                    <div class="hero-buttons">
                        <a href="{{ route('services') }}" class="btn-primary-custom">
                            <i class="fas fa-arrow-right"></i> Explore Services
                        </a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    @if($heroImages->isNotEmpty())
                        <div class="hero-image-box">
                            <img src="{{ asset('storage/' . $heroImages->first()->image_path) }}" alt="Printing Press" class="img-fluid rounded-lg service-image">
                        </div>
                    @else
                        <div class="info-card info-card--short d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <i class="fas fa-print feature-icon"></i>
                                <p class="mt-3">High-Quality Printing Services</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="section-padding bg-surface">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="info-card info-card--tall d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <i class="fas fa-building feature-icon"></i>
                            <h3 class="mt-3">Since 2015</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <h2 class="section-heading">About Morning Star Printing Press Co.</h2>
                    <p class="lead">Established in 2015, Morning Star Printing Press Co. has been at the forefront of the printing industry, delivering exceptional quality and service to our valued clients across the Philippines.</p>
                    <p>With state-of-the-art equipment and a team of dedicated professionals, we specialize in providing comprehensive printing solutions for businesses, schools, organizations, and individuals.</p>
                    <p>Our commitment to excellence, innovative technology, and customer satisfaction has made us the preferred choice for printing services in Davao City.</p>
                    <a href="{{ route('about') }}" class="btn-primary-custom mt-3">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Services Section -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Featured Services</h2>
                <p>Explore our comprehensive range of professional printing services</p>
            </div>
            <div class="row">
                @forelse($services->take(6) as $service)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="service-card">
                            @if($service->image)
                                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="img-fluid rounded mb-3 service-image">
                            @elseif($service->icon)
                                <i class="fas {{ $service->icon }} mb-3 feature-icon"></i>
                            @else
                                <i class="fas fa-star mb-3 feature-icon"></i>
                            @endif
                            <h3>{{ $service->name }}</h3>
                            <p>{{ Str::limit($service->description, 100) }}</p>
                            <a href="{{ route('service.show', $service->slug) }}" class="btn-primary-custom">View Details</a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">No services available yet.</p>
                    </div>
                @endforelse
            </div>
            <div class="text-center mt-4" data-aos="fade-up">
                <a href="{{ route('services') }}" class="btn-primary-custom">View All Services <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section-padding bg-surface">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Why Choose Us</h2>
                <p>What makes us the preferred choice for printing services</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-card">
                        <i class="fas fa-star feature-icon"></i>
                        <h3>High Quality Printing</h3>
                        <p>We maintain the highest standards of printing quality with cutting-edge technology.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <i class="fas fa-cog feature-icon"></i>
                        <h3>Modern Equipment</h3>
                        <p>Latest printing machinery ensures precision and efficiency in every project.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <i class="fas fa-tag feature-icon"></i>
                        <h3>Affordable Prices</h3>
                        <p>Competitive pricing without compromising on quality or service standards.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <i class="fas fa-bolt feature-icon"></i>
                        <h3>Fast Turnaround</h3>
                        <p>Quick delivery without sacrificing the quality of your printing projects.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <i class="fas fa-users feature-icon"></i>
                        <h3>Professional Team</h3>
                        <p>Experienced professionals dedicated to bringing your vision to life.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <i class="fas fa-smile feature-icon"></i>
                        <h3>Excellent Support</h3>
                        <p>Outstanding customer service that exceeds expectations every time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="section-padding counters-section bg-primary-gradient">
        <div class="container">
            <div class="row text-white text-center">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="counter">
                        <div class="counter-number">{{ date('Y') - 2015 }}</div>
                        <div class="counter-label">Years of Experience</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="counter">
                        <div class="counter-number">{{ $projectsCount }}</div>
                        <div class="counter-label">Projects Completed</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="counter">
                        <div class="counter-number">{{ $clientsCount }}</div>
                        <div class="counter-label">Happy Clients</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="counter">
                        <div class="counter-number">1000+</div>
                        <div class="counter-label">Orders Completed</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
