<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Morning Star Printing Press Co. - Printing Ideas Into Reality">
    <meta name="theme-color" content="#0D47FF">
    
    <title><?php echo $__env->yieldContent('title', 'Morning Star Printing Press Co.'); ?></title>

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

        :root {
            --primary: #0D47FF;
            --accent: #0056D2;
            --surface: #FFFFFF;
            --background: #F8F9FA;
            --text: #333333;
            --muted: #6C757D;
            --border: #E5E7EB;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: var(--text);
            background-color: var(--background);
            line-height: 1.7;
            font-size: 16px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            max-width: 1140px;
        }

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
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
            padding: 0.5rem 0;
        }

        .navbar-brand img {
            height: 72px;
            transition: height 0.3s ease;
        }

        .navbar.scrolled .navbar-brand img {
            height: 58px;
        }

        .footer-logo {
            height: 120px;
            width: auto;
            display: block;
            margin-bottom: 1rem;
        }

        .contact-info-card {
            display: flex;
            gap: 1rem;
            align-items: flex-start;
            padding: 1.4rem;
            border-radius: 22px;
            border: 1px solid rgba(13, 71, 255, 0.12);
            background: white;
            box-shadow: 0 16px 40px rgba(15, 23, 42, 0.08);
        }

        .contact-info-card .icon-box {
            min-width: 56px;
            height: 56px;
            border-radius: 18px;
            display: grid;
            place-items: center;
            background: rgba(13, 71, 255, 0.12);
            color: var(--primary);
            font-size: 1.4rem;
        }

        .contact-info-card h3 {
            font-size: 1.05rem;
            margin-bottom: 0.5rem;
        }

        .contact-info-card p,
        .contact-info-card a {
            margin-bottom: 0;
            color: var(--muted);
            line-height: 1.7;
        }

        .contact-info-card a:hover {
            text-decoration: underline;
        }

        .contact-info-grid {
            display: grid;
            gap: 1rem;
        }

        .contact-actions {
            display: flex;
            gap: 0.85rem;
            flex-wrap: wrap;
            justify-content: flex-start;
            margin-top: 1.5rem;
        }

        .contact-actions .btn-primary-custom {
            min-width: 48px;
            height: 48px;
            padding: 0 1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
        }

        .nav-link {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: var(--text) !important;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary) !important;
        }

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

        .hero-section.hero-section--inner {
            padding: 70px 0;
            min-height: 340px;
        }

        .hero-section::before,
        .hero-section::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
        }

        .hero-section::before {
            top: 10%;
            right: -5%;
            width: 320px;
            height: 320px;
        }

        .hero-section::after {
            bottom: -15%;
            left: -5%;
            width: 280px;
            height: 280px;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 3.5rem;
            line-height: 1.05;
            margin-bottom: 1.5rem;
        }

        .hero-title.hero-title--small {
            font-size: 2.8rem;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            max-width: 680px;
            margin-bottom: 2rem;
            opacity: 0.92;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .hero-image-box {
            background: rgba(255, 255, 255, 0.12);
            border-radius: 24px;
            padding: 1rem;
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.12);
        }

        .service-image,
        .detail-image,
        .hero-image-box img {
            width: 100%;
            height: auto;
            border-radius: 18px;
            object-fit: cover;
        }

        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.4rem;
            color: var(--text);
            margin-bottom: 0.75rem;
        }

        .section-title p {
            font-size: 1.05rem;
            color: var(--muted);
            max-width: 680px;
            margin: 0 auto;
        }

        .section-heading {
            color: var(--text);
            margin-bottom: 1.5rem;
        }

        .section-description {
            color: var(--muted);
            line-height: 1.8;
        }

        .bg-surface {
            background: linear-gradient(135deg, #F8F9FA 0%, #EBEFF4 100%);
        }

        .bg-primary-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        }

        .content-card,
        .sidebar-card,
        .contact-card,
        .map-card,
        .cta-card,
        .info-card {
            background: white;
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
        }

        .content-card--accent {
            border-left: 5px solid var(--primary);
        }

        .content-card--compact {
            padding: 1.5rem;
        }

        .info-card {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
        }

        .info-card--tall {
            min-height: 400px;
        }

        .info-card--short {
            min-height: 320px;
        }

        .service-icon-box {
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section-heading--accent {
            color: var(--primary);
        }

        .info-card h3,
        .info-card p,
        .info-card strong {
            color: white;
        }

        .info-card i,
        .feature-icon,
        .service-card i,
        .contact-card i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .service-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 18px 35px rgba(15, 23, 42, 0.08);
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 55px rgba(13, 71, 255, 0.18);
        }

        .service-card h3 {
            color: var(--text);
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .service-card p {
            color: var(--muted);
            margin-bottom: 1.5rem;
            min-height: 72px;
        }

        .service-card .btn-primary-custom {
            margin-top: auto;
        }

        .feature-card {
            border-radius: 24px;
            color: white;
            padding: 2.2rem;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-6px);
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: -40%;
            right: -30%;
            width: 180px;
            height: 180px;
            background: rgba(255, 255, 255, 0.12);
            border-radius: 50%;
        }

        .feature-card h3 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .feature-card p {
            position: relative;
            z-index: 1;
            opacity: 0.95;
        }

        .counter {
            text-align: center;
            padding: 2rem;
        }

        .counter-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary);
            font-family: 'Poppins', sans-serif;
        }

        .counter-label {
            color: white;
            font-weight: 500;
            margin-top: 0.5rem;
        }

        .cta-card {
            background: white;
            padding: 3rem 2.5rem;
            border-radius: 28px;
            box-shadow: 0 22px 50px rgba(15, 23, 42, 0.12);
            text-align: center;
        }

        .cta-card h2 {
            margin-bottom: 1rem;
            color: var(--text);
        }

        .cta-card p {
            color: var(--muted);
            line-height: 1.8;
        }

        .sidebar-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-card li {
            padding: 1rem 0;
            border-bottom: 1px solid #eef2f6;
        }

        .sidebar-card li:last-child {
            border-bottom: none;
        }

        .sidebar-card strong {
            display: block;
            color: var(--text);
            margin-bottom: 0.35rem;
        }

        .contact-card a {
            color: var(--primary);
            text-decoration: none;
        }

        .contact-card a:hover {
            text-decoration: underline;
        }

        .contact-actions {
            display: flex;
            gap: 0.85rem;
            flex-wrap: wrap;
            justify-content: flex-start;
            margin-top: 1.5rem;
        }

        .contact-actions .btn-primary-custom {
            min-width: 48px;
            height: 48px;
            padding: 0 1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
        }

        .map-card {
            overflow: hidden;
            border-radius: 24px;
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
        }

        .map-card iframe {
            width: 100%;
            min-height: 420px;
            border: none;
        }

        .btn-primary-custom,
        .btn-secondary-custom {
            white-space: nowrap;
        }

        .alert {
            border-radius: 14px;
        }

        .form-control {
            border-radius: 12px;
            border: 1px solid #d8dce6;
            padding: 12px 16px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(13, 71, 255, 0.18);
        }

        .form-label {
            font-weight: 600;
            color: var(--text);
        }

        .required-star {
            color: #d00000;
        }

        .rounded-lg {
            border-radius: 20px !important;
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .hero-section {
                padding: 50px 0;
                min-height: 420px;
            }

            .section-title h2 {
                font-size: 1.9rem;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .hero-buttons .btn {
                width: 100%;
            }

            .contact-actions {
                flex-direction: column;
            }
        }

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

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <img src="<?php echo e(asset('Morningstar.logo.jpg')); ?>" alt="Morning Star Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if(request()->routeIs('home')): ?> active <?php endif; ?>" href="<?php echo e(route('home')); ?>">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(request()->routeIs('about')): ?> active <?php endif; ?>" href="<?php echo e(route('about')); ?>">
                            <i class="fas fa-info-circle"></i> About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(request()->routeIs('services*')): ?> active <?php endif; ?>" href="<?php echo e(route('services')); ?>">
                            <i class="fas fa-briefcase"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(request()->routeIs('contact')): ?> active <?php endif; ?>" href="<?php echo e(route('contact')); ?>">
                            <i class="fas fa-envelope"></i> Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" title="Go to top">
        <i class="fas fa-chevron-up"></i>
    </button>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            offset: 100,
            once: true,
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

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Website\resources\views/layouts/app.blade.php ENDPATH**/ ?>