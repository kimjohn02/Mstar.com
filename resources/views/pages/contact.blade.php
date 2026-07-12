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
            <div class="row justify-content-center">
                <!-- Contact Info -->
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
        </div>
    </section>

    <!-- Google Map Section -->
    <section class="section-padding bg-surface">
        <div class="container">
            <div class="section-title">
                <h2>Find Us On The Map</h2>
            </div>
            <div class="map-card">
                <iframe src="https://www.google.com/maps?q=Morning%20Star%20Printing%20Press%20Co.%20132%20Bolton%20St,%20Davao,%20Davao%20Region%208000,%20Philippines&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade."></iframe>
            </div>
        </div>
    </section>
@endsection
