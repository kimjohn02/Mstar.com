@extends('layouts.admin')

@section('title', 'View Message - Admin Dashboard')
@section('page-title', 'View Contact Message')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.contact-messages.index') }}" class="btn-secondary-admin">
            <i class="fas fa-arrow-left"></i> Back to Messages
        </a>
    </div>

    <div class="stat-card">
        <div class="row">
            <div class="col-lg-8">
                <h3 style="margin-bottom: 1.5rem;">{{ $contactMessage->subject }}</h3>

                <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 8px; margin-bottom: 1.5rem;">
                    <p><strong>From:</strong> {{ $contactMessage->name }}</p>
                    <p><strong>Email:</strong> <a href="mailto:{{ $contactMessage->email }}">{{ $contactMessage->email }}</a></p>
                    <p><strong>Phone:</strong> <a href="tel:{{ $contactMessage->phone_number }}">{{ $contactMessage->phone_number }}</a></p>
                    <p><strong>Date:</strong> {{ $contactMessage->created_at->format('F j, Y g:i A') }}</p>
                    <p><strong>Status:</strong> 
                        @if(is_null($contactMessage->read_at))
                            <span class="badge bg-warning">Unread</span>
                        @else
                            <span class="badge bg-success">Read</span> - {{ $contactMessage->read_at->format('F j, Y g:i A') }}
                        @endif
                    </p>
                </div>

                <h4 style="margin-bottom: 1rem; margin-top: 2rem;">Message</h4>
                <div style="background: white; padding: 1.5rem; border: 1px solid #ddd; border-radius: 8px; white-space: pre-wrap; word-wrap: break-word;">
                    {{ $contactMessage->message }}
                </div>
            </div>

            <div class="col-lg-4">
                <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 8px;">
                    <h5>Quick Actions</h5>
                    <a href="mailto:{{ $contactMessage->email }}" class="btn-primary-admin" style="width: 100%; padding: 0.75rem; text-align: center; display: block; margin-bottom: 0.5rem;">
                        <i class="fas fa-envelope"></i> Send Email Reply
                    </a>
                    <a href="tel:{{ $contactMessage->phone_number }}" class="btn-primary-admin" style="width: 100%; padding: 0.75rem; text-align: center; display: block; margin-bottom: 0.5rem;">
                        <i class="fas fa-phone"></i> Call Sender
                    </a>
                    <form action="{{ route('admin.contact-messages.destroy', $contactMessage) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger-admin" style="width: 100%; padding: 0.75rem;">
                            <i class="fas fa-trash"></i> Delete Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
