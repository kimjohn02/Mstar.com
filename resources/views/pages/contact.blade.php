@extends('layouts.app')

@section('title', 'Contact Us - ' . config('site.business_name'))

@section('content')

    {{-- ── Hero ───────────────────────────────────────────────────── --}}
    <section class="hero-section hero-section--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 hero-content text-center">
                    <h1 class="hero-title hero-title--small">Contact Us</h1>
                    <p class="hero-subtitle">Get in touch with us today</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ── Flash Messages ──────────────────────────────────────────── --}}
    @if(session('success') || session('error'))
        <div class="container mt-4">
            <x-alert type="success" :message="session('success')" />
            <x-alert type="danger"  :message="session('error')" />
        </div>
    @endif

    {{-- ── Contact Info Cards ──────────────────────────────────────── --}}
    <section class="section-padding">
        <div class="container">

            <x-section-title
                title="Get In Touch"
                subtitle="We'd love to hear from you. Reach us through any of the channels below."
            />

            <div class="row g-4 mb-5" data-aos="fade-up">

                {{-- Address --}}
                <div class="col-md-6">
                    <x-contact-info-card icon="fas fa-map-marker-alt" title="Address">
                        <p>
                            {{ config('site.business_name') }}<br>
                            {{ config('site.address') }}
                        </p>
                    </x-contact-info-card>
                </div>

                {{-- Phone --}}
                <div class="col-md-6">
                    <x-contact-info-card
                        icon="fas fa-phone"
                        title="Phone Numbers"
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

                {{-- Email --}}
                <div class="col-md-6">
                    <x-contact-info-card
                        icon="fas fa-envelope"
                        title="Email"
                        href="https://mail.google.com/mail/?view=cm&fs=1&to={{ config('site.emails')[0] }}&su=Inquiry+-+{{ urlencode(config('site.business_name')) }}"
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

                {{-- Business Hours --}}
                <div class="col-md-6">
                    <x-contact-info-card icon="fas fa-clock" title="Business Hours">
                        <p>
                            <strong>Monday – Saturday</strong><br>8:00 AM – 5:00 PM<br><br>
                            <strong>Sunday</strong><br>Closed
                        </p>
                    </x-contact-info-card>
                </div>

            </div>

            {{-- Quick Action Buttons --}}
            <div class="contact-actions justify-content-center mb-5" data-aos="fade-up">
                <a href="{{ config('site.messenger_url') }}" target="_blank"
                   class="btn-primary-custom" title="Message us on Facebook">
                    <i class="fab fa-facebook me-2"></i> Message Us
                </a>
                <a href="tel:{{ str_replace([' ', '(', ')', '-'], '', config('site.phones')[0]) }}"
                   class="btn-primary-custom">
                    <i class="fas fa-phone me-2"></i> Call Now
                </a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ config('site.emails')[0] }}&su=Inquiry+-+{{ urlencode(config('site.business_name')) }}"
                   target="_blank" class="btn-primary-custom">
                    <i class="fas fa-envelope me-2"></i> Send Email
                </a>
            </div>

        </div>
    </section>

    {{-- ── Contact Form ─────────────────────────────────────────────── --}}
    <section class="section-padding bg-surface">
        <div class="container">

            <x-section-title
                title="Send Us a Message"
                subtitle="Fill in the form below and we'll get back to you as soon as possible."
            />

            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="content-card">
                        <form action="{{ route('contact.store') }}" method="POST" novalidate>
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <x-form-input
                                        name="name"
                                        label="Your Name"
                                        placeholder="e.g. Juan dela Cruz"
                                        :required="true"
                                    />
                                </div>
                                <div class="col-md-6">
                                    <x-form-input
                                        name="email"
                                        label="Email Address"
                                        type="email"
                                        placeholder="e.g. juan@example.com"
                                        :required="true"
                                    />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <x-form-input
                                        name="phone_number"
                                        label="Phone Number"
                                        type="tel"
                                        placeholder="e.g. 0917 123 4567"
                                        :required="true"
                                    />
                                </div>
                                <div class="col-md-6">
                                    <x-form-input
                                        name="subject"
                                        label="Subject"
                                        placeholder="e.g. Tarpaulin Printing Inquiry"
                                        :required="true"
                                    />
                                </div>
                            </div>

                            <x-form-textarea
                                name="message"
                                label="Your Message"
                                placeholder="Tell us about your printing needs..."
                                :rows="6"
                                :required="true"
                            />

                            <div class="d-grid">
                                <button type="submit" class="btn-primary-custom justify-content-center">
                                    <i class="fas fa-paper-plane me-2"></i> Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ── Google Map ───────────────────────────────────────────────── --}}
    <section class="section-padding">
        <div class="container">
            <x-section-title title="Find Us On The Map" />
            <div class="map-card" data-aos="fade-up">
                <iframe
                    src="https://www.google.com/maps?q={{ urlencode(config('site.business_name') . ' ' . config('site.address')) }}&output=embed"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

@endsection
