@extends('layouts.admin')

@section('title', 'Admin Dashboard - Morning Star Printing Press Co.')
@section('page-title', 'Dashboard')

@section('content')
    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <div class="stat-card-icon" style="color: var(--primary);">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="stat-card-value">{{ $totalServices }}</div>
                <div class="stat-card-label">Total Services</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <div class="stat-card-icon" style="color: #28a745;">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-card-value">{{ $activeServices }}</div>
                <div class="stat-card-label">Active Services</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <div class="stat-card-icon" style="color: #ffc107;">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="stat-card-value">{{ $totalMessages }}</div>
                <div class="stat-card-label">Total Messages</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <div class="stat-card-icon" style="color: #dc3545;">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-card-value">{{ $unreadMessages }}</div>
                <div class="stat-card-label">Unread Messages</div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Recent Messages -->
        <div class="col-lg-8">
            <div class="stat-card">
                <h3 style="margin-bottom: 1.5rem; font-family: 'Poppins', sans-serif;">
                    <i class="fas fa-comments"></i> Recent Contact Messages
                </h3>
                
                @if($recentMessages->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentMessages as $message)
                                    <tr>
                                        <td><strong>{{ $message->name }}</strong></td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ Str::limit($message->subject, 20) }}</td>
                                        <td><small>{{ $message->created_at->diffForHumans() }}</small></td>
                                        <td>
                                            <a href="{{ route('admin.contact-messages.show', $message) }}" class="btn-primary-admin" style="padding: 0.25rem 0.5rem; font-size: 0.85rem;">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted text-center py-3">No messages yet.</p>
                @endif

                <div class="mt-3">
                    <a href="{{ route('admin.contact-messages.index') }}" class="btn-primary-admin">
                        <i class="fas fa-arrow-right"></i> View All Messages
                    </a>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="col-lg-4">
            <div class="stat-card">
                <h3 style="margin-bottom: 1.5rem; font-family: 'Poppins', sans-serif;">
                    <i class="fas fa-bar-chart"></i> Quick Stats
                </h3>
                <p>
                    <strong>Website Visits:</strong> {{ $websiteVisits }}<br>
                    <small class="text-muted">This month (placeholder)</small>
                </p>
                <hr>
                <p>
                    <strong>Services Published:</strong> {{ $activeServices }} of {{ $totalServices }}<br>
                    <small class="text-muted">Active services</small>
                </p>
                <hr>
                <p>
                    <strong>Support Efficiency:</strong> {{ $totalMessages > 0 ? round(($totalMessages - $unreadMessages) / $totalMessages * 100) : 0 }}%<br>
                    <small class="text-muted">Messages responded to</small>
                </p>
            </div>

            <div class="stat-card" style="text-align: center;">
                <a href="{{ route('admin.services.create') }}" class="btn-primary-admin" style="width: 100%; padding: 0.75rem;">
                    <i class="fas fa-plus"></i> Add New Service
                </a>
                <a href="{{ route('admin.services.index') }}" class="btn-secondary-admin" style="width: 100%; padding: 0.75rem; margin-top: 0.5rem;">
                    <i class="fas fa-list"></i> Manage Services
                </a>
            </div>
        </div>
    </div>
@endsection
