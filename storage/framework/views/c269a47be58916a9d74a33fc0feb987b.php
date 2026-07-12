

<?php $__env->startSection('title', 'Services - Morning Star Printing Press Co.'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section hero-section--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 hero-content text-center">
                    <h1 class="hero-title hero-title--small">Our Services</h1>
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
                                <img src="<?php echo e(asset('storage/' . $service->image)); ?>" alt="<?php echo e($service->name); ?>" class="img-fluid rounded mb-3 service-image">
                            <?php elseif($service->icon): ?>
                                <div class="service-icon-box mb-3">
                                    <i class="fas <?php echo e($service->icon); ?> feature-icon"></i>
                                </div>
                            <?php endif; ?>
                            <h3 class="mb-3"><?php echo e($service->name); ?></h3>
                            <p class="mb-3"><?php echo e($service->description); ?></p>

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

            <?php if($services->hasPages()): ?>
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-center">
                        <?php echo e($services->links('pagination::bootstrap-5')); ?>

                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Website\resources\views/pages/services.blade.php ENDPATH**/ ?>