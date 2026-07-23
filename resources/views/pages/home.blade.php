@extends('layouts.app')

@section('title', 'Home - ' . config('site.business_name'))

@section('content')

    {{-- ── Hero ───────────────────────────────────────────────────── --}}
    <section class="hero-section hero-section--video" id="home">
        <!-- Video 1 -->
        <video id="heroVideo1" class="hero-video active-video" autoplay muted loop playsinline>
            <source src="{{ asset('videos/mstarnet.mp4') }}" type="video/mp4">
        </video>
        <!-- Video 2 -->
        <video id="heroVideo2" class="hero-video inactive-video" autoplay muted loop playsinline>
            <source src="{{ asset('videos/mstar.mp4') }}" type="video/mp4">
        </video>
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-9 hero-content" data-aos="fade-up">
                    <p class="hero-eyebrow" style="font-size:0.95rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:rgba(255,255,255,0.85);margin-bottom:0.75rem;">
                        Welcome to
                    </p>
                    <h1 class="hero-title">{{ config('site.business_name') }}</h1>
                    <p class="hero-subtitle mx-auto mb-3" style="font-weight: 500; font-size: 1.6rem; text-shadow: 0 2px 10px rgba(0,0,0,0.7);">
                        Your <span style="font-weight:700;">One-Stop Shop</span> for All Your Printing Needs!
                    </p>
                    <p class="mx-auto text-light mb-4" style="font-size: 1.15rem; max-width: 750px; line-height: 1.6; text-shadow: 0 2px 8px rgba(0,0,0,0.8); opacity: 0.95;">
                        Delivering high-quality printing services for businesses, organizations, and individuals with precision, reliability, and exceptional customer service.
                    </p>
                    <div class="hero-buttons justify-content-center mt-4">
                        <a href="#services" class="btn-primary-custom">
                            <i class="fas fa-arrow-right"></i> Explore Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── About ────────────────────────────────────────────────────── --}}
    <section class="section-padding bg-surface" id="about">
        <div class="container">

            <x-section-title
                title="About Us"
                subtitle="Delivering Quality Printing Solutions Since 2015"
            />

            <style>
                .about-image-wrapper {
                    position: relative;
                    padding-right: 2rem;
                    padding-bottom: 2rem;
                }
                .about-main-img {
                    width: 100%;
                    height: 450px;
                    object-fit: contain;
                    background: white;
                    border: 1px solid var(--border);
                }
                .experience-badge {
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    background: white;
                    padding: 1.5rem 2rem;
                    border-radius: 1rem;
                    text-align: center;
                    border-left: 5px solid var(--primary);
                }
                .icon-box-sm {
                    width: 32px;
                    height: 32px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: rgba(0, 0, 254, 0.1);
                }
            </style>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="about-image-wrapper">
                        <img src="{{ asset('Morningstar.logo.jpg') }}" alt="About {{ config('site.business_name') }}" class="img-fluid rounded-4 shadow-sm about-main-img">
                        <div class="experience-badge shadow-lg">
                            <h2 class="display-6 fw-bold mb-0" style="color: var(--primary);">10+</h2>
                            <p class="mb-0 fw-semibold text-muted">Years of Excellence</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <h2 class="section-heading mb-4">Our Story</h2>
                    <p class="lead text-muted mb-4" style="font-size: 1.1rem; line-height: 1.8;">
                        Founded in 2015, <strong style="color: var(--text);">Morning Star Printing Press Co.</strong> has been providing reliable and high-quality printing services to businesses, organizations, schools, and individual customers. Through years of dedication and continuous improvement, the company has built a strong reputation for delivering professional printing solutions with quality craftsmanship and excellent customer service.
                    </p>
                    <p class="text-muted mb-4" style="line-height: 1.7;">
                        Located at 132 Bolton St., Davao City, Philippines, Morning Star Printing Press Co. offers a wide range of printing services, including commercial printing, large-format printing, customized products, and promotional materials. The company remains committed to meeting customer needs through efficient production, dependable service, and continuous innovation.
                    </p>
                </div>
            </div>

            {{-- Core Values --}}
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <x-service-card
                        icon="fas fa-bullseye"
                        title="Our Mission"
                        description="To deliver high-quality and innovative printing solutions that help businesses, organizations, and individuals achieve their goals through exceptional service, reliable production, and professional craftsmanship."
                        aos-delay="0"
                    />
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <x-service-card
                        icon="fas fa-eye"
                        title="Our Vision"
                        description="To become one of the most trusted and preferred printing service providers in the Philippines, recognized for excellence, innovation, reliability, and customer satisfaction."
                        aos-delay="100"
                    />
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <x-service-card
                        icon="fas fa-heart"
                        title="Our Values"
                        description="Guided by quality, integrity, innovation, teamwork, and customer satisfaction, we are committed to delivering exceptional printing solutions, dependable service, and lasting value to every customer."
                        aos-delay="200"
                    />
                </div>
            </div>

        </div>
    </section>

    {{-- ── Services ─────────────────────────────────────────────────── --}}
    <section class="section-padding" id="services">
        <div class="container">

            <x-section-title
                title="Our Services"
                subtitle="At {{ config('site.business_name') }}, we provide a wide variety of high-quality printing services for businesses, schools, organizations, and individuals."
            />

            <style>
                .service-category-card {
                    background: white;
                    border: 1px solid var(--border);
                    border-radius: 16px;
                    padding: 1.5rem;
                    height: 100%;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
                    transition: all 0.3s ease;
                }
                .service-category-card:hover {
                    box-shadow: 0 8px 25px rgba(0, 0, 254, 0.08);
                    border-color: rgba(0, 0, 254, 0.2);
                    transform: translateY(-5px);
                }
                .category-header {
                    display: flex;
                    align-items: center;
                    gap: 15px;
                    margin-bottom: 1.5rem;
                    padding-bottom: 1rem;
                    border-bottom: 1px solid rgba(0,0,0,0.05);
                }
                .category-icon {
                    width: 48px;
                    height: 48px;
                    background: rgba(0, 0, 254, 0.1);
                    color: var(--primary);
                    border-radius: 12px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.3rem;
                }
                .category-title {
                    font-size: 1.15rem;
                    margin: 0;
                    color: var(--text);
                }
                .service-list {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                }
                .service-list li {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    margin-bottom: 10px;
                    color: var(--muted);
                    font-size: 0.95rem;
                }
                .service-list li i {
                    color: var(--primary);
                    font-size: 0.85rem;
                    width: 16px;
                }
            </style>

            @php
                $serviceCategories = [
                    'Advertising & Large Format' => [
                        'icon' => 'fas fa-bullhorn',
                        'items' => [
                            ['fas fa-image', 'Tarpaulin Printing'],
                            ['fas fa-square', 'Sintra Board'],
                            ['fas fa-chalkboard', 'X-Standee'],
                            ['fas fa-scroll', 'Pull-Up Banner'],
                            ['fas fa-sign', 'Signages'],
                        ]
                    ],
                    'Corporate & Marketing' => [
                        'icon' => 'fas fa-briefcase',
                        'items' => [
                            ['fas fa-paper-plane', 'Flyer Printing'],
                            ['fas fa-book-open', 'Brochure Printing'],
                            ['fas fa-id-card', 'Calling Card Printing'],
                            ['fas fa-file-image', 'Poster Printing'],
                            ['fas fa-utensils', 'Menu Printing'],
                        ]
                    ],
                    'Documents & Office' => [
                        'icon' => 'fas fa-file-alt',
                        'items' => [
                            ['fas fa-receipt', 'Receipt Printing'],
                            ['fas fa-file-invoice-dollar', 'Invoice Printing'],
                            ['fas fa-copy', 'Photocopy'],
                            ['fas fa-print', 'Risograph Printing'],
                            ['fas fa-industry', 'Offset Printing'],
                        ]
                    ],
                    'Stickers & Labels' => [
                        'icon' => 'fas fa-sticky-note',
                        'items' => [
                            ['fas fa-sticky-note', 'Sticker Printing'],
                            ['fas fa-cut', 'Cut-Out Sticker Printing'],
                            ['fas fa-tag', 'Product Labels'],
                        ]
                    ],
                    'Personalized & Souvenirs' => [
                        'icon' => 'fas fa-gift',
                        'items' => [
                            ['fas fa-tshirt', 'T-Shirt Printing'],
                            ['fas fa-fill-drip', 'Sublimation Printing'],
                            ['fas fa-mug-hot', 'Mug Printing'],
                            ['fas fa-circle', 'Button Pins'],
                            ['fas fa-key', 'Keychains'],
                            ['fas fa-fan', 'Folded Fans'],
                        ]
                    ],
                    'IDs & Accessories' => [
                        'icon' => 'fas fa-id-badge',
                        'items' => [
                            ['fas fa-id-badge', 'PVC ID Cards'],
                            ['fas fa-user-tag', 'Lanyards'],
                        ]
                    ],
                ];
            @endphp

            <div class="row g-4">
                @php $delay = 0; @endphp
                @foreach($serviceCategories as $categoryName => $category)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $delay }}">
                        <div class="service-category-card">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="{{ $category['icon'] }}"></i>
                                </div>
                                <h3 class="category-title">{{ $categoryName }}</h3>
                            </div>
                            <ul class="service-list">
                                @foreach($category['items'] as [$icon, $name])
                                    <li><i class="{{ $icon }}"></i> {{ $name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @php $delay += 100; @endphp
                @endforeach
            </div>

        </div>
    </section>

    {{-- ── Why Choose Us ────────────────────────────────────────────── --}}
    <section class="section-padding bg-surface" id="why-choose-us">
        <div class="container">

            <x-section-title
                title="Why Choose Us"
                subtitle="Delivering quality printing solutions with reliability, innovation, and exceptional customer service."
            />

            <div class="row">
                @php
                    $features = [
                        ['fas fa-star',   'High-Quality Printing', 'We produce sharp, vibrant, and durable prints using premium materials and advanced printing technology to ensure outstanding results.', '0'],
                        ['fas fa-cog',    'Modern Equipment',      'Our advanced printing equipment delivers precise, efficient, and consistent results for every project, regardless of size.', '100'],
                        ['fas fa-tag',    'Affordable Pricing',    'We provide competitive pricing without compromising quality, helping customers get excellent value for every order.', '200'],
                        ['fas fa-bolt',   'Fast Turnaround',       'Efficient production processes enable us to complete orders on time while maintaining the highest quality standards.', '300'],
                        ['fas fa-users',  'Professional Team',     'Our experienced and dedicated team works closely with every customer to ensure each project meets their expectations.', '400'],
                        ['fas fa-smile',  'Excellent Customer Support', 'We are committed to providing friendly, responsive, and reliable customer service from inquiry to order completion.', '500'],
                    ];
                @endphp

                @foreach($features as [$icon, $title, $desc, $delay])
                    <div class="col-lg-4 col-md-6 mb-4">
                        <x-feature-card
                            :icon="$icon"
                            :title="$title"
                            :description="$desc"
                            aos-delay="{{ $delay }}"
                        />
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ── Contact ───────────────────────────────────────────────────── --}}
    <section class="section-padding" id="contact">
        <div class="container">

            <x-section-title
                title="Contact Us"
                subtitle="We're here to help! Get in touch with us for inquiries, quotations, custom printing services, or order assistance."
            />

            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4" data-aos="fade-up">

                    <div class="row g-4 mb-5">

                        <div class="col-md-6">
                            <x-contact-info-card icon="fas fa-map-marker-alt" title="Visit Our Store">
                                <p>
                                    {{ config('site.business_name') }}<br>
                                    {{ config('site.address') }}
                                </p>
                            </x-contact-info-card>
                        </div>

                        <div class="col-md-6">
                            <x-contact-info-card
                                icon="fas fa-phone"
                                title="Call Us"
                                href="tel:{{ str_replace([' ', '(', ')', '-'], '', config('site.phones')[0]) }}"
                                href-title="Call us now"
                            >
                                <p>
                                    @foreach(config('site.phones') as $phone)
                                        <a href="tel:{{ str_replace([' ', '(', ')', '-'], '', $phone) }}">
                                            {{ $phone }}
                                        </a>
                                        @if(!$loop->last)<br>@endif
                                    @endforeach
                                </p>
                            </x-contact-info-card>
                        </div>

                        <div class="col-md-6">
                            <x-contact-info-card
                                icon="fas fa-envelope"
                                title="Email Us"
                                href="https://mail.google.com/mail/?view=cm&fs=1&to={{ config('site.emails')[0] }}&su=Inquiry"
                                href-target="_blank"
                                href-title="Send us an Email"
                            >
                                <p>
                                    @foreach(config('site.emails') as $email)
                                        <a href="mailto:{{ $email }}">{{ $email }}</a>
                                        @if(!$loop->last)<br>@endif
                                    @endforeach
                                </p>
                            </x-contact-info-card>
                        </div>

                        <div class="col-md-6">
                            <x-contact-info-card icon="fas fa-clock" title="Business Hours">
                                <p>
                                    <strong>Monday – Saturday</strong><br>8:00 AM – 5:00 PM<br><br>
                                    <strong>Sunday</strong><br>Closed
                                </p>
                            </x-contact-info-card>
                        </div>

                    </div>

                    <div class="contact-actions justify-content-center">
                        <a href="{{ config('site.messenger_url') }}" target="_blank"
                           class="btn-primary-custom" title="Message us on Facebook">
                            <i class="fab fa-facebook me-2"></i> Message Us
                        </a>
                        <a href="tel:{{ str_replace([' ', '(', ')', '-'], '', config('site.phones')[0]) }}"
                           class="btn-primary-custom">
                            <i class="fas fa-phone me-2"></i> Call Now
                        </a>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ config('site.emails')[0] }}&su=Inquiry"
                           target="_blank" class="btn-primary-custom">
                            <i class="fas fa-envelope me-2"></i> Send Email
                        </a>
                    </div>

                </div>
            </div>

            {{-- Google Map --}}
            <div class="section-title mt-3" data-aos="fade-up">
                <h2>Find Us On The Map</h2>
            </div>
            <div class="map-card" data-aos="fade-up">
                <iframe
                    src="https://www.google.com/maps?q={{ urlencode(config('site.business_name') . ' ' . config('site.address')) }}&output=embed"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </section>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video1 = document.getElementById('heroVideo1');
        const video2 = document.getElementById('heroVideo2');
        let isVideo1Active = true;

        if (video1 && video2) {
            // Swap videos every 6 seconds (6000 milliseconds)
            setInterval(() => {
                if (isVideo1Active) {
                    video1.classList.remove('active-video');
                    video1.classList.add('inactive-video');
                    video2.classList.remove('inactive-video');
                    video2.classList.add('active-video');
                } else {
                    video2.classList.remove('active-video');
                    video2.classList.add('inactive-video');
                    video1.classList.remove('inactive-video');
                    video1.classList.add('active-video');
                }
                isVideo1Active = !isVideo1Active;
            }, 6000);
        }
    });
</script>
@endsection
