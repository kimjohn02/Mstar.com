{{-- Alert Component --}}
{{-- Usage: <x-alert type="success" :message="session('success')" /> --}}

@props([
    'type'    => 'success',   {{-- success | danger | warning | info --}}
    'message' => null,
])

@if($message)
    <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
        @if($type === 'success')
            <i class="fas fa-check-circle me-2"></i>
        @elseif($type === 'danger')
            <i class="fas fa-exclamation-circle me-2"></i>
        @elseif($type === 'warning')
            <i class="fas fa-exclamation-triangle me-2"></i>
        @else
            <i class="fas fa-info-circle me-2"></i>
        @endif
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
