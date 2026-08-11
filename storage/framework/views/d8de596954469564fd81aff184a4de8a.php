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
                    <h1 class="hero-title fw-bold" style="font-size: clamp(3rem, 5vw, 4.5rem); text-shadow: 0 4px 20px rgba(0,0,0,0.9); line-height: 1.15; margin-bottom: 1.5rem;">
                        <?php echo e(config('site.business_name')); ?>

                    </h1>
                    <p class="hero-subtitle mx-auto mb-5" style="font-size: clamp(1.1rem, 2vw, 1.4rem); font-weight: 500; text-shadow: 0 2px 10px rgba(0,0,0,0.8); max-width: 800px; opacity: 0.95;">
                        Your One-Stop for All Your Printing Needs
                    </p>
                    <div class="hero-buttons d-flex flex-column flex-sm-row align-items-center justify-content-center gap-4 mt-2">
                        <a href="<?php echo e(config('site.messenger_url')); ?>" target="_blank" class="btn-primary-rect">
                            Request a Quotation
                        </a>
                        <a href="tel:<?php echo e(str_replace([' ', '(', ')', '-'], '', config('site.phones')[0] ?? '')); ?>" class="btn-phone-link">
                            <i class="fas fa-phone-alt"></i> <?php echo e(config('site.phones')[0] ?? '+63 938 910 4312'); ?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="section-padding bg-surface" id="about">
        <div class="container">


            <div class="our-story-section" data-aos="fade-up">

                
                <div class="text-center mb-5">
                    <h2 class="section-heading mt-3 mb-3">Our Story</h2>
                    <p class="story-intro mx-auto">
                        From humble beginnings to Davao's trusted printing partner —
                        the journey of <strong>Morning Star Printing Press Co.</strong>
                    </p>
                </div>

                
                <div class="story-content-card mx-auto mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="story-accent-bar"></div>
                    <div class="story-text">
                        <p class="story-first-para">
                            <strong>Morning Star Printing Press Co.</strong> wasn't always the leading printing provider it is today. Our story began in 2007, not with ink and paper, but with cellular loading stations. We recognized a growing need for convenient mobile top-up solutions and built a strong reputation for reliable service, all with a foundation of faith in the Lord as our greatest provider.
                        </p>
                        <p>
                            However, our entrepreneurial spirit led us to explore new horizons. We saw a demand for printing services but lacked the in-house capabilities at the time. So, we offered printing as an add-on service, partnering with other companies to fulfill those orders.
                        </p>

                        
                        <div class="story-inline-quote">
                            <i class="fas fa-quote-left story-quote-icon"></i>
                            <p>"Through borrowed money and unwavering faith, we took a pivotal step — and it marked the true beginning of our printing press journey."</p>
                        </div>

                        <p>
                            This experience ignited a passion for bringing the entire printing process under our roof. In 2009, with unwavering faith and a commitment to hard work, we took a pivotal step. Through borrowed money from my sister, a loan from a friend, and the trust of five-six moneylenders, we were able to purchase our very first personal computer, photocopier machine, and even a laminator. This marked the beginning of our journey towards becoming a dedicated printing press. It was a testament to the Lord's blessings on our vision and the support of our community.
                        </p>
                        <p>
                            Our commitment to quality and customer satisfaction, fueled by our faith, fueled further growth. In 2012, with the success of our initial investment and continued support, we were finally able to acquire our first-ever tarpaulin printing machine. This marked a significant leap forward, allowing us to offer a wider range of printing services.
                        </p>
                        <p>
                            From those humble beginnings, we strategically acquired additional printing machines, expanding our capabilities and service offerings. This dedication has propelled us to where we stand today: a thriving company with 22 skilled employees operating across 5 branches.
                        </p>
                        <p class="mb-0">
                            Morning Star's journey is a testament to our dedication, innovation, the power of believing in a vision, the unwavering belief that the Lord is our greatest provider, and the importance of community support. We continue to evolve, utilizing cutting-edge technology to deliver exceptional printing solutions for all your needs.
                        </p>
                    </div>
                </div>

                
                <div class="story-stats row text-center g-3 mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-6 col-md-3">
                        <div class="stat-box">
                            <div class="stat-number">2007</div>
                            <div class="stat-label">Year Founded</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-box">
                            <div class="stat-number">22+</div>
                            <div class="stat-label">Skilled Employees</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-box">
                            <div class="stat-number">5</div>
                            <div class="stat-label">Branches</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-box">
                            <div class="stat-number">18+</div>
                            <div class="stat-label">Years of Service</div>
                        </div>
                    </div>
                </div>

            </div>

            
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <?php if (isset($component)) { $__componentOriginale804957ecdb153e8c822de5ed47a4ace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale804957ecdb153e8c822de5ed47a4ace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.service-card','data' => ['icon' => 'fas fa-bullseye','title' => 'Our Mission','description' => 'Morning Star Printing Press Co. delivers exceptional printing experiences through a commitment to state-of-the-art technology, unwavering expertise, and unparalleled customer service.','aosDelay' => '0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('service-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fas fa-bullseye','title' => 'Our Mission','description' => 'Morning Star Printing Press Co. delivers exceptional printing experiences through a commitment to state-of-the-art technology, unwavering expertise, and unparalleled customer service.','aos-delay' => '0']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.service-card','data' => ['icon' => 'fas fa-eye','title' => 'Our Vision','description' => 'Morning Star Printing Press Co. envisions to be the leading and most trusted provider of high-quality printing solutions, empowering businesses and individuals to bring their ideas to life.','aosDelay' => '100']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('service-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fas fa-eye','title' => 'Our Vision','description' => 'Morning Star Printing Press Co. envisions to be the leading and most trusted provider of high-quality printing solutions, empowering businesses and individuals to bring their ideas to life.','aos-delay' => '100']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.service-card','data' => ['icon' => 'fas fa-heart','title' => 'Our Values','description' => '','aosDelay' => '200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('service-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fas fa-heart','title' => 'Our Values','description' => '','aos-delay' => '200']); ?>
                        <div class="text-center w-100" style="font-size: 0.9rem; line-height: 1.7; color: var(--muted);">
                            <p class="mb-3" style="font-size: 0.88rem; color: var(--muted);">Guided by our core values, we operate with integrity and purpose.</p>
                            <p class="mb-1"><strong style="color: var(--text);">Discipline:</strong> Meticulous approach for high-quality output.</p>
                            <p class="mb-1"><strong style="color: var(--text);">Humility & Honesty:</strong> Transparency and fairness in all dealings.</p>
                            <p class="mb-1"><strong style="color: var(--text);">Urgency:</strong> We value deadlines and work efficiently.</p>
                            <p class="mb-1"><strong style="color: var(--text);">Godliness:</strong> A foundation of ethical principles.</p>
                            <p class="mb-0"><strong style="color: var(--text);">Selfless Service:</strong> Your needs always come first.</p>
                        </div>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-title','data' => ['title' => 'Our Services','subtitle' => 'Explore our comprehensive range of high-quality printing solutions tailored for businesses, schools, and individuals.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Our Services','subtitle' => 'Explore our comprehensive range of high-quality printing solutions tailored for businesses, schools, and individuals.']); ?>
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
                .services-slider-container {
                    width: 100%;
                    margin: 0 auto;
                    max-width: 1400px;
                }
                
                @media (min-width: 992px) { /* Desktop */
                    .services-slider-container {
                        width: 95%;
                    }
                }
                
                @media (min-width: 768px) and (max-width: 991px) { /* Tablet */
                    .services-slider-container {
                        width: 95%;
                    }
                }

                .service-brochure-img {
                    width: calc(100% - 30px);
                    margin: 15px auto;
                    height: auto;
                    max-height: 85vh;
                    object-fit: contain;
                    border-radius: 16px;
                    background: white;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    display: block;
                }
                
                @media (min-width: 992px) {
                    .service-brochure-img:hover {
                        transform: scale(1.02);
                        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
                    }
                }

                .carousel-indicators {
                    bottom: -30px;
                }
                
                .carousel-indicators [data-bs-target] {
                    width: 12px;
                    height: 12px;
                    border-radius: 50%;
                    background-color: var(--primary);
                    opacity: 0.3;
                    border: none;
                    margin: 0 6px;
                    transition: opacity 0.3s ease;
                }
                
                .carousel-indicators .active {
                    opacity: 1;
                }

                .carousel-control-prev, .carousel-control-next {
                    width: 8%;
                    opacity: 0.5;
                    transition: opacity 0.3s ease;
                }
                
                .carousel-control-prev:hover, .carousel-control-next:hover {
                    opacity: 1;
                }
                
                .carousel-control-prev-icon, .carousel-control-next-icon {
                    background-color: rgba(0, 0, 0, 0.4);
                    border-radius: 50%;
                    padding: 24px;
                    background-size: 40%;
                }
                
                .carousel-inner {
                    padding-bottom: 40px;
                }
                
                .carousel-item {
                    transition: transform 0.8s ease-in-out;
                }
            </style>

            <div class="services-slider-container" data-aos="fade-up" data-aos-duration="800">
                <div id="servicesBrochureCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                    
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#servicesBrochureCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#servicesBrochureCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#servicesBrochureCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#servicesBrochureCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>

                    <!-- Inner -->
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <img src="<?php echo e(asset('images/Services/Services.jpg')); ?>" class="service-brochure-img" alt="Our Services Brochure 1" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo e(asset('images/Services/Services1.jpg')); ?>" class="service-brochure-img" alt="Our Services Brochure 2" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo e(asset('images/Services/Services2.jpg')); ?>" class="service-brochure-img" alt="Our Services Brochure 3" loading="lazy" decoding="async">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo e(asset('images/Services/Services3.jpg')); ?>" class="service-brochure-img" alt="Our Services Brochure 4" loading="lazy" decoding="async">
                        </div>
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#servicesBrochureCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#servicesBrochureCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </section>

    
    <section class="section-padding testimonials-section" id="testimonials">
        <div class="container">

            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="testimonials-heading">What Our Clients Say</h2>
                <p class="testimonials-subtext">Hear What Our Customers Have to Say About Our Quality and Service</p>
            </div>

            <div class="row g-4">

                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"I am very satisfied with their service and the quality of their work."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">F</div>
                            <div>
                                <div class="testimonial-name">Fenna Hope</div>
                                <div class="testimonial-source">Facebook page review</div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Very good service! Highly recommended! The graphic artists are very professional."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">J</div>
                            <div>
                                <div class="testimonial-name">James Frsh</div>
                                <div class="testimonial-source">Facebook page review</div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"The staff are very accommodating. They truly serve their clients with a heart, and they provide high-quality work."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">I</div>
                            <div>
                                <div class="testimonial-name">Isagani Acdog Cañal</div>
                                <div class="testimonial-source">Facebook page review</div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Accommodating staff, and they provide high-quality printing services."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">L</div>
                            <div>
                                <div class="testimonial-name">Lorejo Jhogil</div>
                                <div class="testimonial-source">Facebook page review</div>
                            </div>
                        </div>
                    </div>
                </div>

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
                        ['fas fa-star',   'Quality Printing', 'We deliver clean, vibrant, and reliable prints using quality materials and careful production processes.', '0'],
                        ['fas fa-cog',    'Reliable Printing Equipment', 'Our printing equipment helps us produce consistent and precise results for a wide range of printing projects.', '100'],
                        ['fas fa-tag',    'Competitive Pricing', 'We offer competitive prices while maintaining the quality of our printing services.', '200'],
                        ['fas fa-bolt',   'Fast Turnaround', 'We work efficiently to complete orders on time while maintaining our quality standards.', '300'],
                        ['fas fa-users',  'Professional Service', 'Our experienced team works closely with customers to understand their needs and deliver the right printing solutions.', '400'],
                        ['fas fa-smile',  'Customer-Focused Service', 'We are committed to providing friendly, responsive, and reliable service from inquiry to order completion.', '500'],
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