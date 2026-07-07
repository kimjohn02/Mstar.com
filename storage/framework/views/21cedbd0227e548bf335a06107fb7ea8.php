

<?php $__env->startSection('title', $service->name . ' - Morning Star Printing Press Co.'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section" style="padding: 50px 0; min-height: 300px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 hero-content text-center">
                    <h1 class="hero-title" style="font-size: 2.5rem;"><?php echo e($service->name); ?></h1>
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
                        <img src="<?php echo e(asset('storage/' . $service->image)); ?>" alt="<?php echo e($service->name); ?>" class="img-fluid rounded mb-4" style="max-height: 400px; object-fit: cover; width: 100%;">
                    <?php endif; ?>
                    
                    <h2 style="color: #333333; margin-bottom: 1.5rem;"><?php echo e($service->name); ?></h2>
                    
                    <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);">
                        <h3 style="color: var(--primary); margin-bottom: 1rem;">Description</h3>
                        <p style="color: #666666; line-height: 1.8;"><?php echo e($service->description); ?></p>

                        <?php if($service->benefits): ?>
                            <h3 style="color: var(--primary); margin-top: 2rem; margin-bottom: 1rem;">Benefits</h3>
                            <p style="color: #666666; line-height: 1.8;"><?php echo e($service->benefits); ?></p>
                        <?php endif; ?>

                        <?php if($service->applications): ?>
                            <h3 style="color: var(--primary); margin-top: 2rem; margin-bottom: 1rem;">Applications</h3>
                            <p style="color: #666666; line-height: 1.8;"><?php echo e($service->applications); ?></p>
                        <?php endif; ?>
                    </div>

                    <div style="margin-top: 2rem;">
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
                    <!-- Quick Info Card -->
                    <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08); margin-bottom: 2rem;">
                        <h4 style="color: var(--primary); margin-bottom: 1.5rem;">
                            <i class="fas fa-info-circle"></i> Quick Info
                        </h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="padding-bottom: 1rem; border-bottom: 1px solid #eee;">
                                <strong>Service Type:</strong><br>
                                <span style="color: #666666;"><?php echo e($service->name); ?></span>
                            </li>
                            <li style="padding: 1rem 0; border-bottom: 1px solid #eee;">
                                <strong>Status:</strong><br>
                                <span style="color: #666666;"><?php echo e($service->is_active ? 'Available' : 'Not Available'); ?></span>
                            </li>
                            <li style="padding-top: 1rem;">
                                <strong>Quality:</strong><br>
                                <span style="color: #666666;">Premium Grade</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Card -->
                    <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%); color: white; padding: 2rem; border-radius: 15px; text-align: center;">
                        <h4 style="margin-bottom: 1rem;">Need This Service?</h4>
                        <p style="margin-bottom: 1.5rem;">Contact us today for pricing and availability information.</p>
                        <a href="<?php echo e(route('contact')); ?>" class="btn-secondary-custom" style="display: inline-block;">
                            <i class="fas fa-phone"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Services -->
    <?php if($relatedServices->count() > 0): ?>
        <section class="section-padding" style="background: #F8F9FA;">
            <div class="container">
                <h2 style="text-align: center; color: #333333; margin-bottom: 3rem;">Related Services</h2>
                <div class="row">
                    <?php $__currentLoopData = $relatedServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                            <div class="service-card">
                                <?php if($related->image): ?>
                                    <img src="<?php echo e(asset('storage/' . $related->image)); ?>" alt="<?php echo e($related->name); ?>" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                                <?php endif; ?>
                                <h3><?php echo e($related->name); ?></h3>
                                <p><?php echo e(Str::limit($related->description, 100)); ?></p>
                                <a href="<?php echo e(route('service.show', $related->slug)); ?>" class="btn-primary-custom" style="font-size: 0.9rem; padding: 8px 20px;">View Details</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Website\resources\views/pages/service-detail.blade.php ENDPATH**/ ?>