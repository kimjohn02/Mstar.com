{{-- Contact Info Card Component --}}
{{-- Usage:
    <x-contact-info-card icon="fas fa-map-marker-alt" title="Address">
        <p>132 Bolton St, Davao</p>
    </x-contact-info-card>
--}}

@props([
    'icon',
    'title',
    'href'       => null,   {{-- optional link for the icon box --}}
    'hrefTarget' => '_self',
    'hrefTitle'  => null,
])

<div class="contact-info-card h-100">
    @if($href)
        <a href="{{ $href }}"
           target="{{ $hrefTarget }}"
           class="icon-box text-decoration-none"
           style="color: var(--primary) !important;"
           @if($hrefTitle) title="{{ $hrefTitle }}" @endif>
            <i class="{{ $icon }}"></i>
        </a>
    @else
        <div class="icon-box">
            <i class="{{ $icon }}"></i>
        </div>
    @endif

    <div>
        <h3>{{ $title }}</h3>
        {{ $slot }}
    </div>
</div>
