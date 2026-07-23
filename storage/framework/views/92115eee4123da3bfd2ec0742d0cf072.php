


<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'subtitle' => null,
    'aos'      => 'fade-up',
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
    'title',
    'subtitle' => null,
    'aos'      => 'fade-up',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="section-title" <?php if($aos): ?> data-aos="<?php echo e($aos); ?>" <?php endif; ?>>
    <h2><?php echo e($title); ?></h2>
    <?php if($subtitle): ?>
        <p><?php echo e($subtitle); ?></p>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\Website\resources\views/components/section-title.blade.php ENDPATH**/ ?>