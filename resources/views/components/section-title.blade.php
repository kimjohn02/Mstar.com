{{-- Section Title Component --}}
{{-- Usage: <x-section-title title="Our Services" subtitle="What we offer" /> --}}

@props([
    'title',
    'subtitle' => null,
    'aos'      => 'fade-up',
])

<div class="section-title" @if($aos) data-aos="{{ $aos }}" @endif>
    <h2>{{ $title }}</h2>
    @if($subtitle)
        <p>{{ $subtitle }}</p>
    @endif
</div>
