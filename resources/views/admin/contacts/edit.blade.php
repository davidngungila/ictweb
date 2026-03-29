@extends('admin.layouts.app')

@section('title', 'Edit Contact Message - Admin Panel')
@section('page-title', 'Edit Contact Message')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Edit Contact Message</h1>
                    <p class="mt-1 text-sm text-gray-600">Update contact message details</p>
                </div>
                <a href="{{ route('admin.contacts.show', $contact) }}" 
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
            <form action="{{ route('admin.contacts.update', $contact) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Contact Information -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Contact Information</h3>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="name" value="{{ $contact->name }}" readonly
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" value="{{ $contact->email }}" readonly
                                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                            </div>
                            
                            @if($contact->phone)
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Phone</label>
                                    <input type="tel" name="phone" value="{{ $contact->phone }}" readonly
                                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm">
                                </div>
                            @endif
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Subject</label>
                                <input type="text" name="subject" value="{{ $contact->subject }}" readonly
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
                                    @foreach(ContactSubmission::getStatuses() as $value => $label)
                                        <option value="{{ $value }}" {{ $contact->status == $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div>
                                <label for="notes" class="block text-sm font-medium text-gray-700">Internal Notes</label>
                                <textarea id="notes" name="notes" rows="4"
                                          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                          placeholder="Add internal notes about this contact...">{{ $contact->notes }}</textarea>
                                <p class="mt-1 text-xs text-gray-500">These notes are only visible to admin users</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Original Message -->
                    <div class="mt-6 pt-6 border-t">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Original Message (Read-only)</h3>
                        
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="space-y-3">
                                <div>
                                    <p class="text-sm font-medium text-gray-700">From:</p>
                                    <p class="text-sm text-gray-900">{{ $contact->name }} ({{ $contact->email }})</p>
                                </div>
                                
                                <div>
                                    <p class="text-sm font-medium text-gray-700">Subject:</p>
                                    <p class="text-sm text-gray-900">{{ $contact->subject }}</p>
                                </div>
                                
                                <div>
                                    <p class="text-sm font-medium text-gray-700">Message:</p>
                                    <div class="mt-2 bg-white rounded-lg p-3 border border-gray-200">
                                        <p class="text-sm text-gray-700 whitespace-pre-wrap">{{ $contact->message }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Metadata -->
                    <div class="mt-6 pt-6 border-t">
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <div>
                                <span>Received: {{ $contact->created_at->format('M d, Y h:i A') }}</span>
                                @if($contact->created_at != $contact->updated_at)
                                    <span class="mx-2">•</span>
                                    <span>Updated: {{ $contact->updated_at->format('M d, Y h:i A') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Form Actions -->
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <a href="{{ route('admin.contacts.show', $contact) }}" 
                       class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 mr-3">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="px-4 py-2 bg-blue-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-blue-700">
                        Update Contact Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
