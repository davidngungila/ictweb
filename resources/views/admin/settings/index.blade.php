@extends('admin.layouts.app')

@section('title', 'Settings - Admin Panel')
@section('page-title', 'Settings')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Settings</h1>
        <p class="mt-1 text-sm text-gray-600">Configure your admin panel and website settings</p>
    </div>

    <!-- Settings Navigation -->
    <div class="border-b border-gray-200 mb-8">
        <nav class="-mb-px flex space-x-8">
            <a href="{{ route('admin.settings.general') }}" class="py-2 px-1 border-b-2 border-blue-500 font-medium text-sm text-blue-600">
                General
            </a>
            <a href="{{ route('admin.settings.email') }}" class="py-2 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300">
                Email
            </a>
            <a href="{{ route('admin.settings.sms') }}" class="py-2 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300">
                SMS
            </a>
            <a href="{{ route('admin.settings.security') }}" class="py-2 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300">
                Security
            </a>
            <a href="{{ route('admin.settings.backup') }}" class="py-2 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300">
                Backup
            </a>
        </nav>
    </div>

    <!-- General Settings -->
    <div class="space-y-8">
        <!-- Company Information -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Company Information</h3>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Company Name</label>
                            <input type="text" value="Jezdan Technology" 
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Company Email</label>
                            <input type="email" value="info@jezdantech.com" 
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="tel" value="+255 123 456 789" 
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Address</label>
                            <input type="text" value="Dar es Salaam, Tanzania" 
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Company Description</label>
                        <textarea rows="3" 
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">Leading ICT solutions provider in Tanzania, offering comprehensive technology services for businesses.</textarea>
                    </div>
                    
                    <div class="pt-4">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Website Settings -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Website Settings</h3>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Website Title</label>
                            <input type="text" value="Jezdan Technology" 
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Meta Description</label>
                            <input type="text" value="Professional ICT solutions in Tanzania" 
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Contact Email (for forms)</label>
                            <input type="email" value="contact@jezdantech.com" 
                                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Default Language</label>
                            <select class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>English</option>
                                <option>Swahili</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="maintenance_mode" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="maintenance_mode" class="ml-2 block text-sm text-gray-900">
                                Enable Maintenance Mode
                            </label>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="demo_requests" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="demo_requests" class="ml-2 block text-sm text-gray-900">
                                Enable Demo Requests
                            </label>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="contact_form" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="contact_form" class="ml-2 block text-sm text-gray-900">
                                Enable Contact Form
                            </label>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="email_notifications" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="email_notifications" class="ml-2 block text-sm text-gray-900">
                                Enable Email Notifications
                            </label>
                        </div>
                    </div>
                    
                    <div class="pt-4">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- System Information -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">System Information</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="text-md font-semibold text-gray-900 mb-3">Application</h4>
                        <dl class="space-y-2">
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-500">Version</dt>
                                <dd class="text-sm text-gray-900">1.0.0</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-500">Laravel Version</dt>
                                <dd class="text-sm text-gray-900">11.x</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-500">PHP Version</dt>
                                <dd class="text-sm text-gray-900">8.3.6</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-500">Environment</dt>
                                <dd class="text-sm text-gray-900">Local</dd>
                            </div>
                        </dl>
                    </div>
                    
                    <div>
                        <h4 class="text-md font-semibold text-gray-900 mb-3">Database</h4>
                        <dl class="space-y-2">
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-500">Database</dt>
                                <dd class="text-sm text-gray-900">MySQL</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-500">Connection</dt>
                                <dd class="text-sm text-gray-900">Connected</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-500">Last Backup</dt>
                                <dd class="text-sm text-gray-900">Never</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-500">Total Tables</dt>
                                <dd class="text-sm text-gray-900">8</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-md font-semibold text-gray-900">System Actions</h4>
                            <p class="text-sm text-gray-500 mt-1">Perform system maintenance tasks</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button class="px-4 py-2 bg-yellow-600 text-white rounded-md text-sm font-medium hover:bg-yellow-700">
                                Clear Cache
                            </button>
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">
                                Backup Database
                            </button>
                            <button class="px-4 py-2 bg-green-600 text-white rounded-md text-sm font-medium hover:bg-green-700">
                                Check Updates
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
