
<nav class="navbar navbar-expand-lg navbar-light" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('Morningstar.logo.jpg')); ?>" alt="Morning Star Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" id="nav-home" href="<?php echo e(route('home')); ?>#home">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-about" href="<?php echo e(route('home')); ?>#about">
                        <i class="fas fa-info-circle"></i> About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-services" href="<?php echo e(route('home')); ?>#services">
                        <i class="fas fa-briefcase"></i> Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-contact" href="<?php echo e(route('home')); ?>#contact">
                        <i class="fas fa-envelope"></i> Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\Website\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>