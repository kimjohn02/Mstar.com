<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Morning Star Printing Press Co. - Printing Ideas Into Reality">
    <meta name="theme-color" content="#0D47FF">
    
    <title>@yield('title', 'Morning Star Printing Press Co.')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- AOS Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Custom Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: #333333;
            background-color: #F8F9FA;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        :root {
            --primary: #0D47FF;
            --secondary: #FFFFFF;
            --background: #F8F9FA;
            --text: #333333;
            --accent: #0056D2;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #F8F9FA;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent);
        }

        /* Navigation Bar */
        .navbar {
            background-color: transparent;
            padding: 1rem 0;
            transition: all 0.3s ease;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
        }

        .navbar-brand img {
            height: 50px;
            transition: height 0.3s ease;
        }

        .navbar.scrolled .navbar-brand img {
            height: 40px;
        }

        .nav-link {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #333333 !important;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary) !important;
        }

        .nav-link.active {
            color: var(--primary) !important;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            padding: 100px 0;
            min-height: 600px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: -10%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -20%;
            left: -5%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        /* Buttons */
        .btn-primary-custom {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary-custom:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(13, 71, 255, 0.3);
            color: white;
        }

        .btn-secondary-custom {
            background-color: white;
            color: var(--primary);
            border: 2px solid white;
            padding: 10px 28px;
            border-radius: 50px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-secondary-custom:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-3px);
        }

        /* Section Spacing */
        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: #333333;
            margin-bottom: 0.5rem;
        }

        .section-title p {
            font-size: 1.1rem;
            color: #666666;
        }

        /* Service Cards */
        .service-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: none;
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(13, 71, 255, 0.2);
        }

        .service-card i {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .service-card h3 {
            color: #333333;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .service-card p {
            color: #666666;
            margin-bottom: 1rem;
        }

        /* Feature Cards */
        .feature-card {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .feature-card h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }

        .feature-card p {
            position: relative;
            z-index: 1;
            opacity: 0.95;
        }

        /* Counters */
        .counter {
            text-align: center;
            padding: 2rem;
        }

        .counter-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary);
            font-family: 'Poppins', sans-serif;
        }

        .counter-label {
            color: #666666;
            font-weight: 600;
        }

        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: white;
            padding: 3rem 0 1rem;
            margin-top: 5rem;
        }

        footer h5 {
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        footer a {
            color: #b0b0b0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: var(--primary);
        }

        footer .footer-logo {
            height: 50px;
            margin-bottom: 1rem;
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background-color: var(--primary);
            color: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 998;
            box-shadow: 0 5px 15px rgba(13, 71, 255, 0.3);
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
        }

        /* Loading Screen */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 1;
            visibility: visible;
            transition: all 0.5s ease;
        }

        .loading-screen.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .spinner {
            text-align: center;
            color: white;
        }

        .spinner i {
            font-size: 3rem;
            animation: spin 2s linear infinite;
        }

        .spinner-text {
            margin-top: 1rem;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Alerts */
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Form Styles */
        .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(13, 71, 255, 0.25);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .hero-section {
                padding: 50px 0;
                min-height: 400px;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .hero-buttons .btn {
                width: 100%;
            }
        }

        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.6s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    @yield('styles')
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="spinner">
            <i class="fas fa-spinner"></i>
            <div class="spinner-text">Loading...</div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('Morningstar.logo.jpg') }}" alt="Morning Star Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link @if(request()->routeIs('home')) active @endif" href="{{ route('home') }}">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->routeIs('about')) active @endif" href="{{ route('about') }}">
                            <i class="fas fa-info-circle"></i> About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->routeIs('services*')) active @endif" href="{{ route('services') }}">
                            <i class="fas fa-briefcase"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->routeIs('contact')) active @endif" href="{{ route('contact') }}">
                            <i class="fas fa-envelope"></i> Contact
                        </a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-lock"></i> Admin
                            </a>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-lock"></i> Admin Login
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" title="Go to top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <img src="{{ asset('Morningstar.logo.jpg') }}" alt="Morning Star Logo" class="footer-logo">
                    <p>Printing Ideas Into Reality</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Contact Info</h5>
                    <p>
                        <i class="fas fa-map-marker-alt"></i> Bolton St., Davao City, Philippines 8000
                    </p>
                    <p>
                        <i class="fas fa-phone"></i> 0917 685 0444<br>
                        0933 859 8980<br>
                        (082) 284 9583
                    </p>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Email</h5>
                    <p>
                        <a href="mailto:morningstardavao98@gmail.com">morningstardavao98@gmail.com</a><br>
                        <a href="mailto:morningstarpress2015@gmail.com">morningstarpress2015@gmail.com</a><br>
                        <a href="mailto:morningstardavao@gmail.com">morningstardavao@gmail.com</a>
                    </p>
                </div>
            </div>
            <hr style="background-color: rgba(255,255,255,0.2); border: none; height: 1px;">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2025 Morning Star Printing Press Co. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="https://facebook.com" target="_blank" class="me-3"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com" target="_blank" class="me-3"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Chart.js (for admin dashboard) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            offset: 100,
            once: true,
        });

        // Hide loading screen
        window.addEventListener('load', function() {
            const loadingScreen = document.getElementById('loadingScreen');
            if (loadingScreen) {
                loadingScreen.classList.add('hidden');
            }
        });

        // Navbar scroll effect
        const navbar = document.getElementById('mainNavbar');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Back to top button
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            });
        });

        // Animated counters
        function animateCounter(element) {
            const finalValue = parseInt(element.textContent);
            const increment = finalValue / 50;
            let currentValue = 0;

            const counter = setInterval(function() {
                currentValue += increment;
                if (currentValue >= finalValue) {
                    element.textContent = finalValue.toLocaleString();
                    clearInterval(counter);
                } else {
                    element.textContent = Math.floor(currentValue).toLocaleString();
                }
            }, 30);
        }

        // Trigger counters when they come into view
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.counter-number');
                    counters.forEach(counter => {
                        if (!counter.classList.contains('animated')) {
                            animateCounter(counter);
                            counter.classList.add('animated');
                        }
                    });
                }
            });
        }, observerOptions);

        const countersSection = document.querySelector('.counters-section');
        if (countersSection) {
            observer.observe(countersSection);
        }

        // Close alerts after 5 seconds
        document.querySelectorAll('.alert').forEach(alert => {
            setTimeout(function() {
                alert.style.display = 'none';
            }, 5000);
        });
    </script>

    @yield('scripts')
</body>
</html>
