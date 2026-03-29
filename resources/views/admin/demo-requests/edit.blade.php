@extends('admin.layouts.app')

@section('title', 'Edit Demo Request - Admin Panel')
@section('page-title', 'Edit Demo Request')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Edit Demo Request</h1>
                    <p class="mt-1 text-sm text-gray-600">Update demo request details</p>
                </div>
                <a href="{{ route('admin.demo-requests.show', $demoRequest) }}" 
                   class="px-4 py-2 border border-gray-300 rounded-md text-sm hover:bg-gray-50">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Details
                </a>
            </div>
        </div>

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

        <!-- Edit Form -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <form action="{{ route('admin.demo-requests.update', $demoRequest) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Basic Information -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Basic Information</h3>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Company Name</label>
                                <input type="text" name="company_name" value="{{ $demoRequest->company_name }}" readonly
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Contact Person</label>
                                <input type="text" name="contact_person" value="{{ $demoRequest->contact_person }}" readonly
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" value="{{ $demoRequest->email }}" readonly
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Phone</label>
                                <input type="tel" name="phone" value="{{ $demoRequest->phone }}" readonly
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Demo Type</label>
                                <input type="text" name="demo_type" value="{{ $demoRequest->demo_type }}" readonly
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                            </div>
                        </div>
                        
                        <!-- Management Fields -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Management</h3>
                            
                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700">Status *</label>
                                <select id="status" name="status" required
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    @foreach(DemoRequest::getStatuses() as $value => $label)
                                        <option value="{{ $value }}" {{ $demoRequest->status == $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div>
                                <label for="estimated_value" class="block text-sm font-medium text-gray-700">Estimated Value (TZS)</label>
                                <input type="number" id="estimated_value" name="estimated_value" 
                                       value="{{ $demoRequest->estimated_value }}" step="0.01" min="0"
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <p class="mt-1 text-xs text-gray-500">Enter the estimated value in Tanzanian Shillings</p>
                            </div>
                            
                            <div>
                                <label for="notes" class="block text-sm font-medium text-gray-700">Internal Notes</label>
                                <textarea id="notes" name="notes" rows="4"
                                          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                          placeholder="Add internal notes about this demo request...">{{ $demoRequest->notes }}</textarea>
                                <p class="mt-1 text-xs text-gray-500">These notes are only visible to admin users</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Read-only Information -->
                    <div class="mt-6 pt-6 border-t">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Additional Information (Read-only)</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Job Title</label>
                                    <input type="text" value="{{ $demoRequest->job_title ?: 'N/A' }}" readonly
                                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Country</label>
                                    <input type="text" value="{{ $demoRequest->country ?: 'N/A' }}" readonly
                                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" value="{{ $demoRequest->city ?: 'N/A' }}" readonly
                                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Preferred Date</label>
                                    <input type="text" value="{{ $demoRequest->preferred_date->format('M d, Y') }}" readonly
                                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Preferred Time</label>
                                    <input type="text" value="{{ $demoRequest->preferred_time }}" readonly
                                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Number of Attendees</label>
                                    <input type="text" value="{{ $demoRequest->attendees ?: 'N/A' }}" readonly
                                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Preferred Language</label>
                                    <input type="text" value="{{ $demoRequest->language ?: 'N/A' }}" readonly
                                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Urgency</label>
                                    <input type="text" value="{{ DemoRequest::getUrgencies()[$demoRequest->urgency] ?? $demoRequest->urgency }}" readonly
                                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                                </div>
                            </div>
                        </div>
                        
                        @if($demoRequest->message)
                            <div class="mt-4">
                                <label class="block text-sm font-medium text-gray-700">Client Message</label>
                                <div class="mt-1 bg-gray-50 rounded-lg p-3">
                                    <p class="text-sm text-gray-700">{{ $demoRequest->message }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                
                <!-- Form Actions -->
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <a href="{{ route('admin.demo-requests.show', $demoRequest) }}" 
                       class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 mr-3">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="px-4 py-2 bg-blue-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-blue-700">
                        Update Demo Request
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
