{{-- Navigation Partial --}}
<nav class="navbar navbar-expand-lg navbar-dark" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/Logo.png') }}" alt="Morning Star Logo" fetchpriority="high" decoding="async">
            MORNING STAR PRINTING
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" id="nav-home" href="{{ route('home') }}#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-about" href="{{ route('home') }}#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-services" href="{{ route('home') }}#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-testimonials" href="{{ route('home') }}#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-contact" href="{{ route('home') }}#contact">Contact</a>
                </li>
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                    <button id="themeToggle" class="btn btn-light rounded-pill px-3 py-1 d-flex align-items-center gap-2" style="font-weight: 500; font-size: 0.9rem; color: #1E40AF;">
                        <i class="fas fa-sun" style="color: #1E40AF;"></i> <span id="themeToggleText">Light</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
