{{-- Form Textarea Component --}}
{{-- Usage: <x-form-textarea name="message" label="Your Message" rows="5" required /> --}}

@props([
    'name',
    'label',
    'rows'        => 5,
    'placeholder' => null,
    'required'    => false,
])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
        @if($required)
            <span class="required-star">*</span>
        @endif
    </label>
    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        class="form-control @error($name) is-invalid @enderror"
        placeholder="{{ $placeholder ?? $label }}"
        @if($required) required @endif
    >{{ old($name) }}</textarea>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
