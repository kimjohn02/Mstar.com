@extends('layouts.admin')

@section('title', 'Contact Messages - Admin Dashboard')
@section('page-title', 'Contact Messages')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.dashboard') }}" class="btn-secondary-admin">
            <i class="fas fa-arrow-left"></i> Back to Dashboard
        </a>
    </div>

    <div class="table-container">
        @if($messages->count() > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $message)
                        <tr style="background-color: {{ is_null($message->read_at) ? '#f8f9ff' : 'transparent' }};">
                            <td><strong>{{ $message->name }}</strong></td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->phone_number }}</td>
                            <td>{{ Str::limit($message->subject, 30) }}</td>
                            <td><small>{{ $message->created_at->format('M d, Y') }}</small></td>
                            <td>
                                @if(is_null($message->read_at))
                                    <span class="badge bg-warning">Unread</span>
                                @else
                                    <span class="badge bg-success">Read</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.contact-messages.show', $message) }}" class="btn-primary-admin" style="padding: 0.25rem 0.5rem; font-size: 0.85rem;">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <form action="{{ route('admin.contact-messages.destroy', $message) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?');">
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
            @if($messages->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $messages->links('pagination::bootstrap-5') }}
                </div>
            @endif
        @else
            <div class="alert alert-info m-3">
                <i class="fas fa-info-circle"></i> No contact messages yet.
            </div>
        @endif
    </div>
@endsection
