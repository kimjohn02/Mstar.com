@extends('layouts.app')

@section('title', 'Contact Us - Morning Star Printing Press Co.')

@section('content')
    <!-- Hero Section -->
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

    <!-- Contact Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-lg-4 mb-4" data-aos="fade-right">
                    <div class="contact-info-grid">
                        <div class="contact-info-card">
                            <div class="icon-box">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h3>Address</h3>
                                <p>MORNING STAR PRINTING PRESS<br>132 Bolton St, Davao, Davao Region 8000, Philippines</p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="icon-box">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h3>Phone Numbers</h3>
                                <p>
                                    <a href="tel:0917-685-0444">0917 685 0444</a><br>
                                    <a href="tel:0933-859-8980">0933 859 8980</a><br>
                                    <a href="tel:(082)-284-9583">(082) 284 9583</a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="icon-box">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h3>Email</h3>
                                <p>
                                    <a href="mailto:morningstardavao98@gmail.com">morningstardavao98@gmail.com</a><br>
                                    <a href="mailto:morningstarpress2015@gmail.com">morningstarpress2015@gmail.com</a><br>
                                    <a href="mailto:morningstardavao@gmail.com">morningstardavao@gmail.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="icon-box">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h3>Business Hours</h3>
                                <p>
                                    Monday - Friday<br>9:00 AM - 6:00 PM<br><br>
                                    Saturday<br>9:00 AM - 2:00 PM<br><br>
                                    Sunday<br>Closed
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-actions">
                        <a href="https://facebook.com" target="_blank" class="btn-primary-custom">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="tel:09176850444" class="btn-primary-custom">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="mailto:morningstardavao98@gmail.com" class="btn-primary-custom">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8 mb-4" data-aos="fade-left">
                    <div class="content-card">
                        <div class="d-flex flex-column flex-md-row align-items-start justify-content-between gap-3 mb-4">
                            <div>
                                <h2 class="section-heading">Send Us a Message</h2>
                                <p class="section-description">Fill out the form below and our team will get back to you as soon as possible.</p>
                            </div>
                            <div class="text-md-end">
                                <span class="badge bg-primary text-white py-2 px-3">Fast Response</span>
                                <span class="badge bg-secondary text-white py-2 px-3">Trusted Service</span>
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> Please fix the following errors:
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle"></i> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name <span class="required-star">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address <span class="required-star">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number <span class="required-star">*</span></label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject <span class="required-star">*</span></label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" required>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message <span class="required-star">*</span></label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn-primary-custom">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map Section -->
    <section class="section-padding bg-surface">
        <div class="container">
            <div class="section-title">
                <h2>Find Us On The Map</h2>
            </div>
            <div class="map-card">
                <iframe src="https://www.google.com/maps?q=132+Bolton+St,+Davao,+Davao+Region+8000,+Philippines&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade."></iframe>
            </div>
        </div>
    </section>
@endsection
