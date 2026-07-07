@extends('layouts.app')

@section('title', 'Contact Us - Morning Star Printing Press Co.')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="padding: 50px 0; min-height: 300px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 hero-content text-center">
                    <h1 class="hero-title" style="font-size: 2.5rem;">Contact Us</h1>
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
                    <div class="service-card">
                        <i class="fas fa-map-marker-alt mb-3" style="font-size: 2.5rem; color: var(--primary);"></i>
                        <h3>Address</h3>
                        <p>
                            Bolton St.<br>
                            Davao City, Philippines 8000
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <i class="fas fa-phone mb-3" style="font-size: 2.5rem; color: var(--primary);"></i>
                        <h3>Phone Numbers</h3>
                        <p>
                            <a href="tel:0917-685-0444" style="color: var(--primary); text-decoration: none;">0917 685 0444</a><br>
                            <a href="tel:0933-859-8980" style="color: var(--primary); text-decoration: none;">0933 859 8980</a><br>
                            <a href="tel:(082)-284-9583" style="color: var(--primary); text-decoration: none;">(082) 284 9583</a>
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <i class="fas fa-envelope mb-3" style="font-size: 2.5rem; color: var(--primary);"></i>
                        <h3>Email</h3>
                        <p>
                            <a href="mailto:morningstardavao98@gmail.com" style="color: var(--primary); text-decoration: none;">morningstardavao98@gmail.com</a><br>
                            <a href="mailto:morningstarpress2015@gmail.com" style="color: var(--primary); text-decoration: none;">morningstarpress2015@gmail.com</a><br>
                            <a href="mailto:morningstardavao@gmail.com" style="color: var(--primary); text-decoration: none;">morningstardavao@gmail.com</a>
                        </p>
                    </div>

                    <div class="service-card">
                        <i class="fas fa-clock mb-3" style="font-size: 2.5rem; color: var(--primary);"></i>
                        <h3>Business Hours</h3>
                        <p>
                            Monday - Friday<br>
                            9:00 AM - 6:00 PM<br>
                            <br>
                            Saturday<br>
                            9:00 AM - 2:00 PM<br>
                            <br>
                            Sunday<br>
                            Closed
                        </p>
                    </div>

                    <div style="display: flex; gap: 1rem; justify-content: center;">
                        <a href="https://facebook.com" target="_blank" class="btn-primary-custom" style="padding: 10px 15px; font-size: 0.9rem;">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="tel:09176850444" class="btn-primary-custom" style="padding: 10px 15px; font-size: 0.9rem;">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="mailto:morningstardavao98@gmail.com" class="btn-primary-custom" style="padding: 10px 15px; font-size: 0.9rem;">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8 mb-4" data-aos="fade-left">
                    <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);">
                        <h2 style="color: #333333; margin-bottom: 2rem;">Send Us a Message</h2>

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
                                <label for="name" class="form-label">Full Name <span style="color: red;">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address <span style="color: red;">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number <span style="color: red;">*</span></label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject <span style="color: red;">*</span></label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" required>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message <span style="color: red;">*</span></label>
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
    <section class="section-padding" style="background: #F8F9FA;">
        <div class="container">
            <h2 style="text-align: center; color: #333333; margin-bottom: 2rem;">Find Us On The Map</h2>
            <div style="border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.4644486837636!2d125.59456!3d7.130599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c4174c4c4c4c4d%3A0x4c4c4c4c4c4c4c4c!2sBoston%20St%2C%20Davao%20City!5e0!3m2!1sen!2sph!4v1234567890" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade;"></iframe>
            </div>
        </div>
    </section>
@endsection
