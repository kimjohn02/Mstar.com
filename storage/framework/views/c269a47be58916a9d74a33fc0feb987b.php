

<?php $__env->startSection('title', 'Services - Morning Star Printing Press Co.'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section" style="padding: 50px 0; min-height: 300px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 hero-content text-center">
                    <h1 class="hero-title" style="font-size: 2.5rem;">Our Services</h1>
                    <p class="hero-subtitle">Professional printing solutions tailored to your needs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="<?php echo e(($loop->index % 3) * 100); ?>">
                        <div class="service-card h-100">
                            <?php if($service->image): ?>
                                <img src="<?php echo e(asset('storage/' . $service->image)); ?>" alt="<?php echo e($service->name); ?>" class="img-fluid rounded mb-3" style="height: 250px; object-fit: cover; width: 100%;">
                            <?php elseif($service->icon): ?>
                                <div style="height: 100px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                    <i class="fas <?php echo e($service->icon); ?>" style="font-size: 3rem; color: var(--primary);"></i>
                                </div>
                            <?php endif; ?>
                            <h3 class="mb-3"><?php echo e($service->name); ?></h3>
                            <p class="mb-3"><?php echo e($service->description); ?></p>
                            <a href="<?php echo e(route('service.show', $service->slug)); ?>" class="btn-primary-custom" style="font-size: 0.9rem; padding: 8px 20px;">
                                <i class="fas fa-arrow-right"></i> View Details
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12 text-center">
                        <div class="alert alert-info" role="alert">
                            <i class="fas fa-info-circle"></i> No services available at this moment. Please check back soon!
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <?php if($services->hasPages()): ?>
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-center">
                        <?php echo e($services->links('pagination::bootstrap-5')); ?>

                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Call To Action -->
    <section class="section-padding" style="background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);">
        <div class="container">
            <div class="text-center text-white" data-aos="fade-up">
                <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem;">Don't See What You Need?</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem;">Contact us for custom printing solutions tailored to your specific requirements!</p>
                <a href="<?php echo e(route('contact')); ?>" class="btn-secondary-custom" style="font-size: 1rem; padding: 12px 35px;">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Website\resources\views/pages/services.blade.php ENDPATH**/ ?>