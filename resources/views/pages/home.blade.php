@extends('layouts.app')

@section('title', 'Home - Morning Star Printing Press Co.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section hero-section--video" id="home">
        <video class="hero-video" autoplay muted loop playsinline poster="{{ asset('Morningstar.logo.jpg') }}" aria-hidden="true">
            <source src="{{ asset('videos/Video.m4v') }}" type="video/mp4">
        </video>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-content" data-aos="fade-up">
                    <h1 class="hero-title">Printing Ideas Into Reality</h1>
                    <p class="hero-subtitle">Delivering high-quality printing solutions for businesses, schools, organizations, and individuals.</p>
                    <div class="hero-buttons">
                        <a href="#services" class="btn-primary-custom">
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

    <!-- About Section -->
    <section class="section-padding bg-surface" id="about">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>About Us</h2>
                <p>Learn more about Morning Star Printing Press Co.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="info-card info-card--tall d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <i class="fas fa-building feature-icon"></i>
                            <h3 class="mt-3">Morning Star Printing Press Co.</h3>
                            <p>Established 2015</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <h2 class="section-heading">Our Story</h2>
                    <p class="lead">Founded in 2015, Morning Star Printing Press Co. emerged as a beacon of innovation and quality in the printing industry. Located at 132 Bolton St, Davao, Philippines, we have been committed to delivering exceptional printing solutions to businesses, schools, organizations, and individuals.</p>
                    <p>Our journey began with a simple yet powerful vision: to make professional printing services accessible to everyone while maintaining the highest standards of quality and efficiency.</p>
                    <p>Over the years, we have invested in state-of-the-art printing equipment, skilled professionals, and customer-centric processes to become the preferred printing partner for thousands of satisfied clients.</p>
                </div>
            </div>

            <!-- Core Values -->
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="service-card">
                        <i class="fas fa-bullseye feature-icon"></i>
                        <h3>Our Mission</h3>
                        <p>To deliver innovative, high-quality printing solutions that empower businesses and individuals to achieve their goals through exceptional service and craftsmanship.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <i class="fas fa-eye feature-icon"></i>
                        <h3>Our Vision</h3>
                        <p>To be the most trusted and innovative printing company in the Philippines, recognized for excellence, reliability, and customer satisfaction.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <i class="fas fa-heart feature-icon"></i>
                        <h3>Our Values</h3>
                        <p>Quality, Innovation, Integrity, Customer-Centricity, Teamwork, and Social Responsibility guide every decision we make.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section-padding" id="services">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Services</h2>
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
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">No services available yet.</p>
                    </div>
                @endforelse
            </div>

            <!-- Why Choose Us -->
            <div class="section-title mt-5" data-aos="fade-up">
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

    <!-- Contact Section -->
    <section class="section-padding bg-surface" id="contact">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Contact Us</h2>
                <p>Get in touch with us today</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4" data-aos="fade-up">
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="contact-info-card h-100">
                                <div class="icon-box">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h3>Address</h3>
                                    <p>MORNING STAR PRINTING PRESS<br>132 Bolton St, Davao, Davao Region 8000, Philippines</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info-card h-100">
                                <a href="tel:09176850444" class="icon-box text-decoration-none" style="color: var(--primary) !important;" title="Call us now">
                                    <i class="fas fa-phone"></i>
                                </a>
                                <div>
                                    <h3>Phone Numbers</h3>
                                    <p>
                                        <a href="tel:0917-685-0444">0917 685 0444</a><br>
                                        <a href="tel:0933-859-8980">0933 859 8980</a><br>
                                        <a href="tel:(082)-284-9583">(082) 284 9583</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info-card h-100">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mstar982007@gmail.com&su=Inquiry+-+Morning+Star+Printing+Press" target="_blank" class="icon-box text-decoration-none" style="color: var(--primary) !important;" title="Send us an Email">
                                    <i class="fas fa-envelope"></i>
                                </a>
                                <div>
                                    <h3>Email</h3>
                                    <p>
                                        <a href="mailto:mstar982007@gmail.com">mstar982007@gmail.com</a><br>
                                        <a href="mailto:morningstar982007@gmail.com">morningstar982007@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info-card h-100">
                                <div class="icon-box">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <h3>Business Hours</h3>
                                    <p>
                                        <strong>Monday - Saturday</strong><br>
                                        8:00 AM - 5:00 PM<br><br>
                                        <strong>Sunday</strong><br>
                                        Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-actions justify-content-center">
                        <a href="https://m.me/morningstarprintingpress" target="_blank" class="btn-primary-custom" title="Message us on Facebook">
                            <i class="fab fa-facebook me-2"></i> Message Us
                        </a>
                        <a href="tel:09176850444" class="btn-primary-custom">
                            <i class="fas fa-phone me-2"></i> Call Now
                        </a>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mstar982007@gmail.com&su=Inquiry+-+Morning+Star+Printing+Press" target="_blank" class="btn-primary-custom">
                            <i class="fas fa-envelope me-2"></i> Send Email
                        </a>
                    </div>
                </div>
            </div>

            <!-- Google Map -->
            <div class="section-title mt-3" data-aos="fade-up">
                <h2>Find Us On The Map</h2>
            </div>
            <div class="map-card" data-aos="fade-up">
                <iframe src="https://www.google.com/maps?q=Morning%20Star%20Printing%20Press%20Co.%20132%20Bolton%20St,%20Davao,%20Davao%20Region%208000,%20Philippines&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade."></iframe>
            </div>
        </div>
    </section>

@endsection
