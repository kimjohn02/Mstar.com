@extends('layouts.admin')

@section('title', 'Add New Service - Admin Dashboard')
@section('page-title', 'Add New Service')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.services.index') }}" class="btn-secondary-admin">
            <i class="fas fa-arrow-left"></i> Back to Services
        </a>
    </div>

    <div class="stat-card">
        <h3 style="margin-bottom: 1.5rem;">Create New Service</h3>

        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="name" class="form-label">Service Name <span style="color: red;">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="icon" class="form-label">Icon (Font Awesome Class)</label>
                    <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" value="{{ old('icon', 'fa-star') }}" placeholder="e.g., fa-print">
                    <small class="text-muted">Example: fa-print, fa-image, etc.</small>
                    @error('icon')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description <span style="color: red;">*</span></label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="benefits" class="form-label">Benefits</label>
                <textarea class="form-control @error('benefits') is-invalid @enderror" id="benefits" name="benefits" rows="3">{{ old('benefits') }}</textarea>
                @error('benefits')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="applications" class="form-label">Applications</label>
                <textarea class="form-control @error('applications') is-invalid @enderror" id="applications" name="applications" rows="3">{{ old('applications') }}</textarea>
                @error('applications')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="image" class="form-label">Service Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    <small class="text-muted">Max 5MB. Supported: JPEG, PNG, JPG, GIF, WebP</small>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="display_order" class="form-label">Display Order</label>
                    <input type="number" class="form-control @error('display_order') is-invalid @enderror" id="display_order" name="display_order" value="{{ old('display_order', 0) }}" min="0">
                    @error('display_order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active') ? 'checked' : 'checked' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn-primary-admin" style="padding: 0.75rem 2rem;">
                    <i class="fas fa-save"></i> Create Service
                </button>
                <a href="{{ route('admin.services.index') }}" class="btn-secondary-admin" style="padding: 0.75rem 2rem;">
                    <i class="fas fa-times"></i> Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
