{{-- Feature Card Component --}}
{{-- Usage: <x-feature-card icon="fas fa-star" title="Quality" description="..." /> --}}

@props([
    'icon',
    'title',
    'description',
    'aos'      => 'fade-up',
    'aosDelay' => null,
])

<div class="feature-card" @if($aos) data-aos="{{ $aos }}" @endif
    @if($aosDelay) data-aos-delay="{{ $aosDelay }}" @endif>
    <i class="{{ $icon }} feature-icon"></i>
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
</div>
