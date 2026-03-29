@extends('admin.layouts.app')

@section('title', 'Contact Message Details - Admin Panel')
@section('page-title', 'Contact Message Details')

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

    <!-- Contact Details -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $contact->name }}
                </h3>
                <div class="flex items-center space-x-2">
                    <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full 
                        @if($contact->status == 'new') bg-red-100 text-red-800
                        @elseif($contact->status == 'replied') bg-green-100 text-green-800
                        @elseif($contact->status == 'read') bg-yellow-100 text-yellow-800
                        @else bg-gray-100 text-gray-800 @endif">
                        {{ ucfirst($contact->status) }}
                    </span>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Contact Information -->
                <div class="space-y-4">
                    <h4 class="text-md font-semibold text-gray-900 border-b pb-2">Contact Information</h4>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Name</p>
                            <p class="text-sm text-gray-900">{{ $contact->name }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Email</p>
                            <p class="text-sm text-gray-900">{{ $contact->email }}</p>
                        </div>
                        @if($contact->phone)
                            <div>
                                <p class="text-sm font-medium text-gray-500">Phone</p>
                                <p class="text-sm text-gray-900">{{ $contact->phone }}</p>
                            </div>
                        @endif
                        <div>
                            <p class="text-sm font-medium text-gray-500">Subject</p>
                            <p class="text-sm text-gray-900">{{ $contact->subject }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Message Details -->
                <div class="space-y-4">
                    <h4 class="text-md font-semibold text-gray-900 border-b pb-2">Message Details</h4>
                    
                    <div>
                        <p class="text-sm font-medium text-gray-500 mb-2">Message:</p>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-sm text-gray-700 whitespace-pre-wrap">{{ $contact->message }}</p>
                        </div>
                    </div>
                    
                    @if($contact->notes)
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-2">Internal Notes:</p>
                            <div class="bg-blue-50 rounded-lg p-3">
                                <p class="text-sm text-gray-700 whitespace-pre-wrap">{{ $contact->notes }}</p>
                            </div>
                        </div>
                    @endif
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
    </div>
    
    <!-- Actions -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Actions</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Quick Status Update -->
                <div>
                    <form action="{{ route('admin.contacts.update-status', $contact) }}" method="POST" class="space-y-3">
                        @csrf
                        <label class="block text-sm font-medium text-gray-700">Quick Status Update</label>
                        <select name="status" class="block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach(ContactSubmission::getStatuses() as $value => $label)
                                <option value="{{ $value }}" {{ $contact->status == $value ? 'selected' : '' }}>
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
                        <a href="{{ route('admin.contacts.edit', $contact) }}" 
                           class="px-4 py-2 bg-gray-600 text-white rounded-md text-sm hover:bg-gray-700 text-center">
                            <i class="fas fa-edit mr-2"></i>Edit Details
                        </a>
                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md text-sm hover:bg-red-700 w-full"
                                    onclick="return confirm('Are you sure you want to delete this contact message?')">
                                <i class="fas fa-trash mr-2"></i>Delete Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.contacts.index') }}" 
           class="px-4 py-2 border border-gray-300 rounded-md text-sm hover:bg-gray-50">
            <i class="fas fa-arrow-left mr-2"></i>Back to Contact Messages
        </a>
        
        <div class="flex items-center space-x-2">
            <a href="mailto:{{ $contact->email }}" 
               class="px-4 py-2 bg-green-600 text-white rounded-md text-sm hover:bg-green-700">
                <i class="fas fa-envelope mr-2"></i>Reply via Email
            </a>
            @if($contact->phone)
                <a href="tel:{{ $contact->phone }}" 
                   class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700">
                    <i class="fas fa-phone mr-2"></i>Call Contact
                </a>
            @endif
        </div>
    </div>
</div>
@endsection
