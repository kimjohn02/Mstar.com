@extends('layouts.admin')

@section('title', 'Manage Services - Admin Dashboard')
@section('page-title', 'Manage Services')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.services.create') }}" class="btn-primary-admin">
            <i class="fas fa-plus"></i> Add New Service
        </a>
        <a href="{{ route('admin.dashboard') }}" class="btn-secondary-admin">
            <i class="fas fa-arrow-left"></i> Back to Dashboard
        </a>
    </div>

    <div class="table-container">
        @if($services->count() > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Service Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Order</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>
                                <strong>{{ $service->name }}</strong><br>
                                <small class="text-muted">{{ Str::limit($service->description, 50) }}</small>
                            </td>
                            <td>
                                @if($service->image)
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" style="height: 40px; border-radius: 5px; object-fit: cover;">
                                @else
                                    <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>
                                @if($service->is_active)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $service->display_order }}</td>
                            <td><small>{{ $service->created_at->format('M d, Y') }}</small></td>
                            <td>
                                <a href="{{ route('admin.services.edit', $service) }}" class="btn-primary-admin" style="padding: 0.25rem 0.5rem; font-size: 0.85rem;">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger-admin" style="padding: 0.25rem 0.5rem; font-size: 0.85rem;">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            @if($services->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $services->links('pagination::bootstrap-5') }}
                </div>
            @endif
        @else
            <div class="alert alert-info m-3">
                <i class="fas fa-info-circle"></i> No services found. <a href="{{ route('admin.services.create') }}">Create one now</a>
            </div>
        @endif
    </div>
@endsection
