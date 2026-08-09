@extends('layouts.app')

@section('title', 'About Us - ' . config('site.business_name'))

@section('content')

    {{-- ── Hero ───────────────────────────────────────────────────── --}}
    <section class="hero-section hero-section--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 hero-content text-center">
                    <h1 class="hero-title hero-title--small">
                        About {{ config('site.business_name') }}
                    </h1>
                    <p class="hero-subtitle">
                        Printing Ideas Into Reality Since {{ config('site.established') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ── Company Overview ─────────────────────────────────────────── --}}
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="info-card info-card--tall d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <i class="fas fa-building feature-icon"></i>
                            <h3 class="mt-3">{{ config('site.business_name') }}</h3>
                            <p>Established {{ config('site.established') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <h2 class="section-heading">Our Story</h2>
                    <p class="lead">
                        Founded in {{ config('site.established') }}, {{ config('site.business_name') }} emerged as a
                        beacon of innovation and quality in the printing industry. Located at
                        {{ config('site.address') }}, we have been committed to delivering exceptional printing
                        solutions to businesses, schools, organizations, and individuals.
                    </p>
                    <p>Our journey began with a simple yet powerful vision: to make professional printing services
                        accessible to everyone while maintaining the highest standards of quality and efficiency.</p>
                    <p>Over the years, we have invested in state-of-the-art printing equipment, skilled professionals,
                        and customer-centric processes to become the preferred printing partner for thousands of
                        satisfied clients.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ── Mission, Vision, Values ──────────────────────────────────── --}}
    <section class="section-padding bg-surface">
        <div class="container">

            <x-section-title title="Our Core Values" />

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <x-service-card
                        icon="fas fa-bullseye"
                        title="Our Mission"
                        description="Morning Star Printing Press Co. delivers exceptional printing experiences through a commitment to state-of-the-art technology, unwavering expertise, and unparalleled customer service."
                        aos-delay="0"
                    />
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <x-service-card
                        icon="fas fa-eye"
                        title="Our Vision"
                        description="Morning Star Printing Press Co. envisions to be the leading and most trusted provider of high-quality printing solutions, empowering businesses and individuals to bring their ideas to life."
                        aos-delay="100"
                    />
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <x-service-card
                        icon="fas fa-heart"
                        title="Our Values"
                        description=""
                        aos-delay="200"
                    >
                        <div class="text-start text-muted" style="font-size: 0.82rem; line-height: 1.5; margin-top: -10px;">
                            <p class="mb-2" style="font-style: italic;">Guided by our core values, we operate with integrity and purpose.</p>
                            <p class="mb-1"><strong style="color: var(--text);">Discipline:</strong> We are meticulous in our approach, ensuring consistently high-quality output.</p>
                            <p class="mb-1"><strong style="color: var(--text);">Humility & Honesty:</strong> We conduct business with transparency and fairness.</p>
                            <p class="mb-1"><strong style="color: var(--text);">Urgency:</strong> We understand the importance of deadlines and work efficiently.</p>
                            <p class="mb-1"><strong style="color: var(--text);">Godliness:</strong> We operate with a foundation of ethical principles.</p>
                            <p class="mb-0"><strong style="color: var(--text);">Selfless Service:</strong> We prioritize your needs and go the extra mile.</p>
                        </div>
                    </x-service-card>
                </div>
            </div>

        </div>
    </section>

    {{-- ── Commitment to Quality ─────────────────────────────────────── --}}
    <section class="section-padding">
        <div class="container">

            <x-section-title
                title="Our Commitment to Quality"
                subtitle="What sets us apart in the industry"
            />

            <div class="row">
                @php
                    $commitments = [
                        ['fas fa-cog',          'Modern Technology', 'We invest in cutting-edge printing equipment and technology to ensure superior quality, precision, and efficiency in every project.'],
                        ['fas fa-user-check',   'Expert Team',       'Our experienced professionals bring decades of combined expertise, dedication, and passion to every printing project we undertake.'],
                        ['fas fa-check-double', 'Quality Control',   'Each project undergoes rigorous quality checks at every stage to ensure it meets our exacting standards and exceeds client expectations.'],
                        ['fas fa-leaf',         'Sustainability',    'We are committed to environmentally responsible printing practices that minimize our ecological footprint while maintaining excellence.'],
                    ];
                @endphp

                @foreach($commitments as $i => [$icon, $title, $desc])
                    <div class="col-lg-6 mb-4"
                         data-aos="{{ $i % 2 === 0 ? 'fade-right' : 'fade-left' }}">
                        <div class="content-card content-card--accent">
                            <i class="{{ $icon }} feature-icon"></i>
                            <h3>{{ $title }}</h3>
                            <p>{{ $desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ── Why Choose Us Banner ─────────────────────────────────────── --}}
    <section class="section-padding bg-primary-gradient">
        <div class="container">
            <div class="row text-center text-white">
                @php
                    $highlights = [
                        ['fas fa-star',      'Premium Quality'],
                        ['fas fa-bolt',      'Fast Service'],
                        ['fas fa-tag',       'Competitive Prices'],
                        ['fas fa-handshake', 'Trusted Partner'],
                    ];
                @endphp
                @foreach($highlights as $i => [$icon, $label])
                    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                        <i class="{{ $icon }} feature-icon"></i>
                        <h3>{{ $label }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
