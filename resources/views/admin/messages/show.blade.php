@extends('admin.layouts.app')

@section('title', 'Message Details')
@section('page-title', 'Message Details')

@section('content')
<div class="p-6">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Message Details</h1>
                    <p class="text-gray-600 mt-1">View and manage message information</p>
                </div>
                <div class="flex space-x-3">
                    <a href="{{ route('messages.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition-colors">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Back to Messages
                    </a>
                    <a href="{{ route('messages.edit', $message) }}" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition-colors">
                        <i class="fas fa-edit mr-2"></i>
                        Edit
                    </a>
                </div>
            </div>
        </div>

        <!-- Message Content -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <div class="space-y-6">
                    <!-- Status Bar -->
                    <div class="flex items-center justify-between pb-6 border-b">
                        <div class="flex items-center space-x-4">
                            <span class="px-3 py-1 text-sm font-semibold rounded-full {{ getStatusClass($message->status) }}">
                                {{ $message->status }}
                            </span>
                            <span class="px-3 py-1 text-sm font-semibold rounded-full {{ getPriorityClass($message->priority) }}">
                                {{ $message->priority }} Priority
                            </span>
                            @if(!$message->read_at)
                                <span class="px-3 py-1 text-sm font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Unread
                                </span>
                            @endif
                            @if($message->replied_at)
                                <span class="px-3 py-1 text-sm font-semibold rounded-full bg-green-100 text-green-800">
                                    Replied
                                </span>
                            @endif
                        </div>
                        <div class="flex space-x-2">
                            @if(!$message->read_at)
                                <form action="{{ route('messages.mark-read', $message) }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit" class="px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">
                                                <i class="fas fa-envelope-open mr-1"></i>
                                                Mark as Read
                                            </button>
                                        </form>
                            @endif
                            @if(!$message->replied_at)
                                <form action="{{ route('messages.mark-replied', $message) }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit" class="px-3 py-1 bg-green-600 text-white text-sm rounded hover:bg-green-700">
                                                <i class="fas fa-reply mr-1"></i>
                                                Mark as Replied
                                            </button>
                                        </form>
                            @endif
                        </div>
                    </div>

                    <!-- Sender Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Sender Information</h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                        <i class="fas fa-user text-blue-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900">{{ $message->name }}</p>
                                        <p class="text-sm text-gray-600">{{ $message->email }}</p>
                                        @if($message->phone)
                                            <p class="text-sm text-gray-600">{{ $message->phone }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Message Details</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Message ID:</span>
                                    <span class="text-sm font-medium">#{{ $message->id }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Received:</span>
                                    <span class="text-sm font-medium">{{ $message->created_at->format('M d, Y H:i') }}</span>
                                </div>
                                @if($message->read_at)
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600">Read:</span>
                                        <span class="text-sm font-medium">{{ $message->read_at->format('M d, Y H:i') }}</span>
                                    </div>
                                @endif
                                @if($message->replied_at)
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600">Replied:</span>
                                        <span class="text-sm font-medium">{{ $message->replied_at->format('M d, Y H:i') }}</span>
                                    </div>
                                @endif
                                @if($message->assignedUser)
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600">Assigned To:</span>
                                        <span class="text-sm font-medium">{{ $message->assignedUser->name }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Subject and Message -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Subject</h3>
                        <p class="text-gray-900 font-medium">{{ $message->subject }}</p>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Message</h3>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-gray-900 whitespace-pre-wrap">{{ $message->message }}</p>
                        </div>
                    </div>

                    @if($message->notes)
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Internal Notes</h3>
                            <div class="bg-yellow-50 rounded-lg p-4">
                                <p class="text-gray-900 whitespace-pre-wrap">{{ $message->notes }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="pt-6 border-t flex justify-end space-x-3">
                        <form action="{{ route('messages.destroy', $message) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                                <i class="fas fa-trash mr-2"></i>
                                Delete Message
                            </button>
                        </form>
                        <a href="{{ route('messages.edit', $message) }}" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition-colors">
                            <i class="fas fa-edit mr-2"></i>
                            Edit Message
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@php
    function getStatusClass($status) {
        $classes = [
            'new' => 'bg-blue-100 text-blue-800',
            'in-progress' => 'bg-yellow-100 text-yellow-800',
            'resolved' => 'bg-green-100 text-green-800',
            'closed' => 'bg-gray-100 text-gray-800'
        ];
        return $classes[$status] ?? 'bg-gray-100 text-gray-800';
    }

    function getPriorityClass($priority) {
        $classes = [
            'low' => 'bg-gray-100 text-gray-800',
            'medium' => 'bg-blue-100 text-blue-800',
            'high' => 'bg-orange-100 text-orange-800',
            'urgent' => 'bg-red-100 text-red-800'
        ];
        return $classes[$priority] ?? 'bg-gray-100 text-gray-800';
    }
@endphp
@endsection
