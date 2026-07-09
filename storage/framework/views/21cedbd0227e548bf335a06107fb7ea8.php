

<?php $__env->startSection('title', $service->name . ' - Morning Star Printing Press Co.'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section hero-section--inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 hero-content text-center">
                    <h1 class="hero-title hero-title--small"><?php echo e($service->name); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4" data-aos="fade-right">
                    <?php if($service->image): ?>
                        <div class="hero-image-box mb-4">
                            <img src="<?php echo e(asset('storage/' . $service->image)); ?>" alt="<?php echo e($service->name); ?>" class="img-fluid rounded-lg detail-image">
                        </div>
                    <?php endif; ?>
                    
                    <h2 class="section-heading"><?php echo e($service->name); ?></h2>
                    
                    <div class="content-card">
                        <h3>Service Description</h3>
                        <p class="section-description"><?php echo e($service->description); ?></p>

                        <?php if($service->benefits): ?>
                            <h3 class="mt-4">Benefits</h3>
                            <p class="section-description"><?php echo e($service->benefits); ?></p>
                        <?php endif; ?>

                        <?php if($service->applications): ?>
                            <h3 class="mt-4">Applications</h3>
                            <p class="section-description"><?php echo e($service->applications); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="mt-4">
                        <a href="<?php echo e(route('services')); ?>" class="btn-primary-custom me-2">
                            <i class="fas fa-arrow-left"></i> Back to Services
                        </a>
                        <a href="<?php echo e(route('contact')); ?>" class="btn-primary-custom">
                            <i class="fas fa-envelope"></i> Request Quote
                        </a>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 mb-4" data-aos="fade-left">
                    <div class="sidebar-card mb-4">
                        <h4 class="section-heading section-heading--accent">
                            <i class="fas fa-info-circle"></i> Quick Info
                        </h4>
                        <ul>
                            <li>
                                <strong>Service Type:</strong>
                                <span><?php echo e($service->name); ?></span>
                            </li>
                            <li>
                                <strong>Status:</strong>
                                <span><?php echo e($service->is_active ? 'Available' : 'Not Available'); ?></span>
                            </li>
                            <li>
                                <strong>Quality:</strong>
                                <span>Premium Grade</span>
                            </li>
                        </ul>
                    </div>

                    <div class="info-card text-center">
                        <h4 class="mb-4">Need This Service?</h4>
                        <p class="section-description">Contact us today for pricing and availability information.</p>
                        <a href="<?php echo e(route('contact')); ?>" class="btn-secondary-custom mt-3">
                            <i class="fas fa-phone"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if($relatedServices->count() > 0): ?>
        <section class="section-padding bg-surface">
            <div class="container">
                <div class="section-title">
                    <h2>Related Services</h2>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $relatedServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                            <div class="service-card">
                                <?php if($related->image): ?>
                                    <img src="<?php echo e(asset('storage/' . $related->image)); ?>" alt="<?php echo e($related->name); ?>" class="img-fluid rounded mb-3 service-image">
                                <?php endif; ?>
                                <h3><?php echo e($related->name); ?></h3>
                                <p><?php echo e(Str::limit($related->description, 100)); ?></p>
                                <a href="<?php echo e(route('service.show', $related->slug)); ?>" class="btn-primary-custom">View Details</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Website\resources\views/pages/service-detail.blade.php ENDPATH**/ ?>