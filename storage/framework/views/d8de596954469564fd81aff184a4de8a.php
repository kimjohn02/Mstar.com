<?php $__env->startSection('title', 'Home - ' . config('site.business_name')); ?>

<?php $__env->startSection('content'); ?>

    
    <section class="hero-section hero-section--video" id="home">
        <!-- Video 1 -->
        <video id="heroVideo1" class="hero-video active-video" autoplay muted loop playsinline>
            <source src="<?php echo e(asset('videos/mstarnet.mp4')); ?>" type="video/mp4">
        </video>
        <!-- Video 2 -->
        <video id="heroVideo2" class="hero-video inactive-video" autoplay muted loop playsinline>
            <source src="<?php echo e(asset('videos/mstar.mp4')); ?>" type="video/mp4">
        </video>
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-9 hero-content" data-aos="fade-up">
                    <p class="hero-eyebrow" style="font-size:0.95rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:rgba(255,255,255,0.85);margin-bottom:0.75rem;">
                        Welcome to
                    </p>
                    <h1 class="hero-title"><?php echo e(config('site.business_name')); ?></h1>
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

    
    <section class="section-padding bg-surface" id="about">
        <div class="container">

            <?php if (isset($component)) { $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-title','data' => ['title' => 'About Us','subtitle' => 'Delivering Quality Printing Solutions Since 2015']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'About Us','subtitle' => 'Delivering Quality Printing Solutions Since 2015']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78)): ?>
<?php $attributes = $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78; ?>
<?php unset($__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78)): ?>
<?php $component = $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78; ?>
<?php unset($__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78); ?>
<?php endif; ?>

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
                        <img src="<?php echo e(asset('Morningstar.logo.jpg')); ?>" alt="About <?php echo e(config('site.business_name')); ?>" class="img-fluid rounded-4 shadow-sm about-main-img">
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

            
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <?php if (isset($component)) { $__componentOriginale804957ecdb153e8c822de5ed47a4ace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale804957ecdb153e8c822de5ed47a4ace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.service-card','data' => ['icon' => 'fas fa-bullseye','title' => 'Our Mission','description' => 'To deliver high-quality and innovative printing solutions that help businesses, organizations, and individuals achieve their goals through exceptional service, reliable production, and professional craftsmanship.','aosDelay' => '0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('service-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fas fa-bullseye','title' => 'Our Mission','description' => 'To deliver high-quality and innovative printing solutions that help businesses, organizations, and individuals achieve their goals through exceptional service, reliable production, and professional craftsmanship.','aos-delay' => '0']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale804957ecdb153e8c822de5ed47a4ace)): ?>
<?php $attributes = $__attributesOriginale804957ecdb153e8c822de5ed47a4ace; ?>
<?php unset($__attributesOriginale804957ecdb153e8c822de5ed47a4ace); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale804957ecdb153e8c822de5ed47a4ace)): ?>
<?php $component = $__componentOriginale804957ecdb153e8c822de5ed47a4ace; ?>
<?php unset($__componentOriginale804957ecdb153e8c822de5ed47a4ace); ?>
<?php endif; ?>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <?php if (isset($component)) { $__componentOriginale804957ecdb153e8c822de5ed47a4ace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale804957ecdb153e8c822de5ed47a4ace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.service-card','data' => ['icon' => 'fas fa-eye','title' => 'Our Vision','description' => 'To become one of the most trusted and preferred printing service providers in the Philippines, recognized for excellence, innovation, reliability, and customer satisfaction.','aosDelay' => '100']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('service-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fas fa-eye','title' => 'Our Vision','description' => 'To become one of the most trusted and preferred printing service providers in the Philippines, recognized for excellence, innovation, reliability, and customer satisfaction.','aos-delay' => '100']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale804957ecdb153e8c822de5ed47a4ace)): ?>
<?php $attributes = $__attributesOriginale804957ecdb153e8c822de5ed47a4ace; ?>
<?php unset($__attributesOriginale804957ecdb153e8c822de5ed47a4ace); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale804957ecdb153e8c822de5ed47a4ace)): ?>
<?php $component = $__componentOriginale804957ecdb153e8c822de5ed47a4ace; ?>
<?php unset($__componentOriginale804957ecdb153e8c822de5ed47a4ace); ?>
<?php endif; ?>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <?php if (isset($component)) { $__componentOriginale804957ecdb153e8c822de5ed47a4ace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale804957ecdb153e8c822de5ed47a4ace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.service-card','data' => ['icon' => 'fas fa-heart','title' => 'Our Values','description' => 'Guided by quality, integrity, innovation, teamwork, and customer satisfaction, we are committed to delivering exceptional printing solutions, dependable service, and lasting value to every customer.','aosDelay' => '200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('service-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fas fa-heart','title' => 'Our Values','description' => 'Guided by quality, integrity, innovation, teamwork, and customer satisfaction, we are committed to delivering exceptional printing solutions, dependable service, and lasting value to every customer.','aos-delay' => '200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale804957ecdb153e8c822de5ed47a4ace)): ?>
<?php $attributes = $__attributesOriginale804957ecdb153e8c822de5ed47a4ace; ?>
<?php unset($__attributesOriginale804957ecdb153e8c822de5ed47a4ace); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale804957ecdb153e8c822de5ed47a4ace)): ?>
<?php $component = $__componentOriginale804957ecdb153e8c822de5ed47a4ace; ?>
<?php unset($__componentOriginale804957ecdb153e8c822de5ed47a4ace); ?>
<?php endif; ?>
                </div>
            </div>

        </div>
    </section>

    
    <section class="section-padding" id="services">
        <div class="container">

            <?php if (isset($component)) { $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-title','data' => ['title' => 'Our Services','subtitle' => 'At '.e(config('site.business_name')).', we provide a wide variety of high-quality printing services for businesses, schools, organizations, and individuals.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Our Services','subtitle' => 'At '.e(config('site.business_name')).', we provide a wide variety of high-quality printing services for businesses, schools, organizations, and individuals.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78)): ?>
<?php $attributes = $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78; ?>
<?php unset($__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78)): ?>
<?php $component = $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78; ?>
<?php unset($__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78); ?>
<?php endif; ?>

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

            <?php
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
            ?>

            <div class="row g-4">
                <?php $delay = 0; ?>
                <?php $__currentLoopData = $serviceCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryName => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo e($delay); ?>">
                        <div class="service-category-card">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="<?php echo e($category['icon']); ?>"></i>
                                </div>
                                <h3 class="category-title"><?php echo e($categoryName); ?></h3>
                            </div>
                            <ul class="service-list">
                                <?php $__currentLoopData = $category['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$icon, $name]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><i class="<?php echo e($icon); ?>"></i> <?php echo e($name); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <?php $delay += 100; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section>

    
    <section class="section-padding bg-surface" id="why-choose-us">
        <div class="container">

            <?php if (isset($component)) { $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-title','data' => ['title' => 'Why Choose Us','subtitle' => 'Delivering quality printing solutions with reliability, innovation, and exceptional customer service.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Why Choose Us','subtitle' => 'Delivering quality printing solutions with reliability, innovation, and exceptional customer service.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78)): ?>
<?php $attributes = $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78; ?>
<?php unset($__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78)): ?>
<?php $component = $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78; ?>
<?php unset($__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78); ?>
<?php endif; ?>

            <div class="row">
                <?php
                    $features = [
                        ['fas fa-star',   'High-Quality Printing', 'We produce sharp, vibrant, and durable prints using premium materials and advanced printing technology to ensure outstanding results.', '0'],
                        ['fas fa-cog',    'Modern Equipment',      'Our advanced printing equipment delivers precise, efficient, and consistent results for every project, regardless of size.', '100'],
                        ['fas fa-tag',    'Affordable Pricing',    'We provide competitive pricing without compromising quality, helping customers get excellent value for every order.', '200'],
                        ['fas fa-bolt',   'Fast Turnaround',       'Efficient production processes enable us to complete orders on time while maintaining the highest quality standards.', '300'],
                        ['fas fa-users',  'Professional Team',     'Our experienced and dedicated team works closely with every customer to ensure each project meets their expectations.', '400'],
                        ['fas fa-smile',  'Excellent Customer Support', 'We are committed to providing friendly, responsive, and reliable customer service from inquiry to order completion.', '500'],
                    ];
                ?>

                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$icon, $title, $desc, $delay]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <?php if (isset($component)) { $__componentOriginal8a1da09f823c4dc4ebcb3f0fdc9afbe8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a1da09f823c4dc4ebcb3f0fdc9afbe8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.feature-card','data' => ['icon' => $icon,'title' => $title,'description' => $desc,'aosDelay' => ''.e($delay).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('feature-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($desc),'aos-delay' => ''.e($delay).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a1da09f823c4dc4ebcb3f0fdc9afbe8)): ?>
<?php $attributes = $__attributesOriginal8a1da09f823c4dc4ebcb3f0fdc9afbe8; ?>
<?php unset($__attributesOriginal8a1da09f823c4dc4ebcb3f0fdc9afbe8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a1da09f823c4dc4ebcb3f0fdc9afbe8)): ?>
<?php $component = $__componentOriginal8a1da09f823c4dc4ebcb3f0fdc9afbe8; ?>
<?php unset($__componentOriginal8a1da09f823c4dc4ebcb3f0fdc9afbe8); ?>
<?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section>

    
    <section class="section-padding" id="contact">
        <div class="container">

            <?php if (isset($component)) { $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-title','data' => ['title' => 'Contact Us','subtitle' => 'We\'re here to help! Get in touch with us for inquiries, quotations, custom printing services, or order assistance.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Contact Us','subtitle' => 'We\'re here to help! Get in touch with us for inquiries, quotations, custom printing services, or order assistance.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78)): ?>
<?php $attributes = $__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78; ?>
<?php unset($__attributesOriginal6a0a1523cc2edf33c83fe20a5d1f7f78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78)): ?>
<?php $component = $__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78; ?>
<?php unset($__componentOriginal6a0a1523cc2edf33c83fe20a5d1f7f78); ?>
<?php endif; ?>

            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4" data-aos="fade-up">

                    <div class="row g-4 mb-5">

                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginala61622ddaa52959673cc00fde288e664 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala61622ddaa52959673cc00fde288e664 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-info-card','data' => ['icon' => 'fas fa-map-marker-alt','title' => 'Visit Our Store']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact-info-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fas fa-map-marker-alt','title' => 'Visit Our Store']); ?>
                                <p>
                                    <?php echo e(config('site.business_name')); ?><br>
                                    <?php echo e(config('site.address')); ?>

                                </p>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala61622ddaa52959673cc00fde288e664)): ?>
<?php $attributes = $__attributesOriginala61622ddaa52959673cc00fde288e664; ?>
<?php unset($__attributesOriginala61622ddaa52959673cc00fde288e664); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala61622ddaa52959673cc00fde288e664)): ?>
<?php $component = $__componentOriginala61622ddaa52959673cc00fde288e664; ?>
<?php unset($__componentOriginala61622ddaa52959673cc00fde288e664); ?>
<?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginala61622ddaa52959673cc00fde288e664 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala61622ddaa52959673cc00fde288e664 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-info-card','data' => ['icon' => 'fas fa-phone','title' => 'Call Us','href' => 'tel:'.e(str_replace([' ', '(', ')', '-'], '', config('site.phones')[0])).'','hrefTitle' => 'Call us now']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact-info-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fas fa-phone','title' => 'Call Us','href' => 'tel:'.e(str_replace([' ', '(', ')', '-'], '', config('site.phones')[0])).'','href-title' => 'Call us now']); ?>
                                <p>
                                    <?php $__currentLoopData = config('site.phones'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="tel:<?php echo e(str_replace([' ', '(', ')', '-'], '', $phone)); ?>">
                                            <?php echo e($phone); ?>

                                        </a>
                                        <?php if(!$loop->last): ?><br><?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala61622ddaa52959673cc00fde288e664)): ?>
<?php $attributes = $__attributesOriginala61622ddaa52959673cc00fde288e664; ?>
<?php unset($__attributesOriginala61622ddaa52959673cc00fde288e664); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala61622ddaa52959673cc00fde288e664)): ?>
<?php $component = $__componentOriginala61622ddaa52959673cc00fde288e664; ?>
<?php unset($__componentOriginala61622ddaa52959673cc00fde288e664); ?>
<?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginala61622ddaa52959673cc00fde288e664 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala61622ddaa52959673cc00fde288e664 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-info-card','data' => ['icon' => 'fas fa-envelope','title' => 'Email Us','href' => 'https://mail.google.com/mail/?view=cm&fs=1&to='.e(config('site.emails')[0]).'&su=Inquiry','hrefTarget' => '_blank','hrefTitle' => 'Send us an Email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact-info-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fas fa-envelope','title' => 'Email Us','href' => 'https://mail.google.com/mail/?view=cm&fs=1&to='.e(config('site.emails')[0]).'&su=Inquiry','href-target' => '_blank','href-title' => 'Send us an Email']); ?>
                                <p>
                                    <?php $__currentLoopData = config('site.emails'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a>
                                        <?php if(!$loop->last): ?><br><?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala61622ddaa52959673cc00fde288e664)): ?>
<?php $attributes = $__attributesOriginala61622ddaa52959673cc00fde288e664; ?>
<?php unset($__attributesOriginala61622ddaa52959673cc00fde288e664); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala61622ddaa52959673cc00fde288e664)): ?>
<?php $component = $__componentOriginala61622ddaa52959673cc00fde288e664; ?>
<?php unset($__componentOriginala61622ddaa52959673cc00fde288e664); ?>
<?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginala61622ddaa52959673cc00fde288e664 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala61622ddaa52959673cc00fde288e664 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-info-card','data' => ['icon' => 'fas fa-clock','title' => 'Business Hours']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact-info-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fas fa-clock','title' => 'Business Hours']); ?>
                                <p>
                                    <strong>Monday – Saturday</strong><br>8:00 AM – 5:00 PM<br><br>
                                    <strong>Sunday</strong><br>Closed
                                </p>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala61622ddaa52959673cc00fde288e664)): ?>
<?php $attributes = $__attributesOriginala61622ddaa52959673cc00fde288e664; ?>
<?php unset($__attributesOriginala61622ddaa52959673cc00fde288e664); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala61622ddaa52959673cc00fde288e664)): ?>
<?php $component = $__componentOriginala61622ddaa52959673cc00fde288e664; ?>
<?php unset($__componentOriginala61622ddaa52959673cc00fde288e664); ?>
<?php endif; ?>
                        </div>

                    </div>

                    <div class="contact-actions justify-content-center">
                        <a href="<?php echo e(config('site.messenger_url')); ?>" target="_blank"
                           class="btn-primary-custom" title="Message us on Facebook">
                            <i class="fab fa-facebook me-2"></i> Message Us
                        </a>
                        <a href="tel:<?php echo e(str_replace([' ', '(', ')', '-'], '', config('site.phones')[0])); ?>"
                           class="btn-primary-custom">
                            <i class="fas fa-phone me-2"></i> Call Now
                        </a>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo e(config('site.emails')[0]); ?>&su=Inquiry"
                           target="_blank" class="btn-primary-custom">
                            <i class="fas fa-envelope me-2"></i> Send Email
                        </a>
                    </div>

                </div>
            </div>

            
            <div class="section-title mt-3" data-aos="fade-up">
                <h2>Find Us On The Map</h2>
            </div>
            <div class="map-card" data-aos="fade-up">
                <iframe
                    src="https://www.google.com/maps?q=<?php echo e(urlencode(config('site.business_name') . ' ' . config('site.address'))); ?>&output=embed"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Website\resources\views/pages/home.blade.php ENDPATH**/ ?>