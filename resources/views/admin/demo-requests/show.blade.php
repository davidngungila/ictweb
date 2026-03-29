@extends('admin.layouts.app')

@section('title', 'Demo Request Details - Admin Panel')
@section('page-title', 'Demo Request Details')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Success Message -->
    @if (session('success'))
        <div class="bg-green-50 border border-green-200 rounded-md p-4 mb-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-400"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-green-800">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- Demo Request Details -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $demoRequest->company_name }}
                </h3>
                <div class="flex items-center space-x-2">
                    <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full 
                        @if($demoRequest->status == 'pending') bg-yellow-100 text-yellow-800
                        @elseif($demoRequest->status == 'completed') bg-green-100 text-green-800
                        @elseif($demoRequest->status == 'cancelled') bg-red-100 text-red-800
                        @else bg-gray-100 text-gray-800 @endif">
                        {{ ucfirst($demoRequest->status) }}
                    </span>
                    <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full 
                        @if($demoRequest->urgency == 'high') bg-red-100 text-red-800
                        @elseif($demoRequest->urgency == 'medium') bg-yellow-100 text-yellow-800
                        @else bg-blue-100 text-blue-800 @endif">
                        {{ ucfirst($demoRequest->urgency) }}
                    </span>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Company Information -->
                <div class="space-y-4">
                    <h4 class="text-md font-semibold text-gray-900 border-b pb-2">Company Information</h4>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Company Name</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->company_name }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Demo Type</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->demo_type }}</p>
                        </div>
                    </div>
                    
                    @if($demoRequest->estimated_value)
                        <div>
                            <p class="text-sm font-medium text-gray-500">Estimated Value</p>
                            <p class="text-sm text-gray-900 font-semibold">{{ $demoRequest->formatted_value }}</p>
                        </div>
                    @endif
                </div>
                
                <!-- Contact Information -->
                <div class="space-y-4">
                    <h4 class="text-md font-semibold text-gray-900 border-b pb-2">Contact Information</h4>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Contact Person</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->contact_person }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Job Title</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->job_title ?: 'N/A' }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Email</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->email }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Phone</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->phone }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Location Information -->
                <div class="space-y-4">
                    <h4 class="text-md font-semibold text-gray-900 border-b pb-2">Location</h4>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Country</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->country ?: 'N/A' }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">City</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->city ?: 'N/A' }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Scheduling Information -->
                <div class="space-y-4">
                    <h4 class="text-md font-semibold text-gray-900 border-b pb-2">Scheduling</h4>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Preferred Date</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->preferred_date->format('M d, Y') }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Preferred Time</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->preferred_time }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Attendees</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->attendees ?: 'N/A' }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Language</p>
                            <p class="text-sm text-gray-900">{{ $demoRequest->language ?: 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Additional Information -->
            @if($demoRequest->message || $demoRequest->notes)
                <div class="mt-6 pt-6 border-t">
                    <h4 class="text-md font-semibold text-gray-900 mb-4">Additional Information</h4>
                    
                    @if($demoRequest->message)
                        <div class="mb-4">
                            <p class="text-sm font-medium text-gray-500 mb-2">Message from Client:</p>
                            <div class="bg-gray-50 rounded-lg p-3">
                                <p class="text-sm text-gray-700">{{ $demoRequest->message }}</p>
                            </div>
                        </div>
                    @endif
                    
                    @if($demoRequest->notes)
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-2">Internal Notes:</p>
                            <div class="bg-blue-50 rounded-lg p-3">
                                <p class="text-sm text-gray-700">{{ $demoRequest->notes }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            @endif
            
            <!-- Metadata -->
            <div class="mt-6 pt-6 border-t">
                <div class="flex items-center justify-between text-sm text-gray-500">
                    <div>
                        <span>Created: {{ $demoRequest->created_at->format('M d, Y h:i A') }}</span>
                        @if($demoRequest->created_at != $demoRequest->updated_at)
                            <span class="mx-2">•</span>
                            <span>Updated: {{ $demoRequest->updated_at->format('M d, Y h:i A') }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Actions -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Actions</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Quick Status Update -->
                <div>
                    <form action="{{ route('admin.demo-requests.update-status', $demoRequest) }}" method="POST" class="space-y-3">
                        @csrf
                        <label class="block text-sm font-medium text-gray-700">Quick Status Update</label>
                        <select name="status" class="block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach(DemoRequest::getStatuses() as $value => $label)
                                <option value="{{ $value }}" {{ $demoRequest->status == $value ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700">
                            Update Status
                        </button>
                    </form>
                </div>
                
                <!-- Other Actions -->
                <div class="space-y-3">
                    <label class="block text-sm font-medium text-gray-700">Other Actions</label>
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('admin.demo-requests.edit', $demoRequest) }}" 
                           class="px-4 py-2 bg-gray-600 text-white rounded-md text-sm hover:bg-gray-700 text-center">
                            <i class="fas fa-edit mr-2"></i>Edit Details
                        </a>
                        <form action="{{ route('admin.demo-requests.destroy', $demoRequest) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md text-sm hover:bg-red-700 w-full"
                                    onclick="return confirm('Are you sure you want to delete this demo request?')">
                                <i class="fas fa-trash mr-2"></i>Delete Request
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.demo-requests.index') }}" 
           class="px-4 py-2 border border-gray-300 rounded-md text-sm hover:bg-gray-50">
            <i class="fas fa-arrow-left mr-2"></i>Back to Demo Requests
        </a>
        
        <div class="flex items-center space-x-2">
            <a href="mailto:{{ $demoRequest->email }}" 
               class="px-4 py-2 bg-green-600 text-white rounded-md text-sm hover:bg-green-700">
                <i class="fas fa-envelope mr-2"></i>Email Client
            </a>
            <a href="tel:{{ $demoRequest->phone }}" 
               class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700">
                <i class="fas fa-phone mr-2"></i>Call Client
            </a>
        </div>
    </div>
</div>
@endsection
