{{-- Form Input Component --}}
{{-- Usage: <x-form-input name="name" label="Your Name" type="text" required /> --}}

@props([
    'name',
    'label',
    'type'        => 'text',
    'placeholder' => null,
    'required'    => false,
    'value'       => null,
])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
        @if($required)
            <span class="required-star">*</span>
        @endif
    </label>
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        class="form-control @error($name) is-invalid @enderror"
        placeholder="{{ $placeholder ?? $label }}"
        value="{{ $value ?? old($name) }}"
        @if($required) required @endif
    >
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
