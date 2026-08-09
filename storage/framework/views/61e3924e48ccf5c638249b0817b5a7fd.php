


<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'icon',
    'title',
    'description',
    'aos'      => 'fade-up',
    'aosDelay' => null,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'icon',
    'title',
    'description',
    'aos'      => 'fade-up',
    'aosDelay' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="service-card" <?php if($aos): ?> data-aos="<?php echo e($aos); ?>" <?php endif; ?>
    <?php if($aosDelay): ?> data-aos-delay="<?php echo e($aosDelay); ?>" <?php endif; ?>>
    <div class="icon-circle">
        <i class="<?php echo e($icon); ?>"></i>
    </div>
    <h3><?php echo e($title); ?></h3>
    <p><?php echo e($description); ?></p>
    <?php echo e($slot); ?>

</div>
<?php /**PATH C:\xampp\htdocs\Website\resources\views/components/service-card.blade.php ENDPATH**/ ?>