{{-- Service Card Component --}}
{{-- Usage: <x-service-card icon="fas fa-print" title="Printing" description="..." /> --}}

@props([
    'icon',
    'title',
    'description',
    'aos'      => 'fade-up',
    'aosDelay' => null,
])

<div class="service-card" @if($aos) data-aos="{{ $aos }}" @endif
    @if($aosDelay) data-aos-delay="{{ $aosDelay }}" @endif>
    <i class="{{ $icon }} feature-icon"></i>
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
    {{ $slot }}
</div>
