@extends('admin.layouts.app')

@section('title', 'Documents')
@section('page-title', 'Documents')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Document Manager</h1>
            <p class="text-gray-600 mt-1">Organize, store, and manage all project documents and files</p>
        </div>
        <div class="flex space-x-3">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                <i class="fas fa-upload mr-2"></i>
                Upload Files
            </button>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-folder-plus mr-2"></i>
                New Folder
            </button>
        </div>
    </div>

    <!-- Storage Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Storage</p>
                    <p class="text-2xl font-bold text-gray-900">45.2 GB</p>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="fas fa-database"></i> 100 GB available
                    </p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-hdd text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Documents</p>
                    <p class="text-2xl font-bold text-gray-900">3,847</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 124 new this week
                    </p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-file-alt text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Folders</p>
                    <p class="text-2xl font-bold text-gray-900">156</p>
                    <p class="text-xs text-purple-600 mt-1">
                        <i class="fas fa-folder"></i> Organized structure
                    </p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-folder text-purple-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Shared Files</p>
                    <p class="text-2xl font-bold text-gray-900">892</p>
                    <p class="text-xs text-yellow-600 mt-1">
                        <i class="fas fa-share"></i> Active shares
                    </p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-share-alt text-yellow-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- File Browser Interface -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <!-- Toolbar -->
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <!-- Breadcrumb -->
                    <div class="flex items-center text-sm text-gray-600">
                        <a href="#" class="hover:text-gray-900">Home</a>
                        <i class="fas fa-chevron-right mx-2 text-xs"></i>
                        <a href="#" class="hover:text-gray-900">Projects</a>
                        <i class="fas fa-chevron-right mx-2 text-xs"></i>
                        <a href="#" class="hover:text-gray-900">E-commerce</a>
                        <i class="fas fa-chevron-right mx-2 text-xs"></i>
                        <span class="text-gray-900">Documents</span>
                    </div>
                </div>
                
                <div class="flex items-center space-x-2">
                    <div class="relative">
                        <input type="text" placeholder="Search files..." 
                               class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-64">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <button class="text-gray-500 hover:text-gray-700" title="Grid View">
                        <i class="fas fa-th"></i>
                    </button>
                    <button class="text-gray-500 hover:text-gray-700" title="List View">
                        <i class="fas fa-list"></i>
                    </button>
                    <button class="text-gray-500 hover:text-gray-700" title="Sort">
                        <i class="fas fa-sort"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- File Grid -->
        <div class="p-6">
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <!-- Folder 1 -->
                <div class="group cursor-pointer">
                    <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:shadow-md transition-all">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-folder text-4xl text-yellow-500 mb-3"></i>
                            <p class="text-sm font-medium text-gray-900 text-center truncate w-full">Contracts</p>
                            <p class="text-xs text-gray-500">24 items</p>
                        </div>
                    </div>
                    <div class="mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="flex justify-center space-x-1">
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-share"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Folder 2 -->
                <div class="group cursor-pointer">
                    <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:shadow-md transition-all">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-folder text-4xl text-blue-500 mb-3"></i>
                            <p class="text-sm font-medium text-gray-900 text-center truncate w-full">Invoices</p>
                            <p class="text-xs text-gray-500">18 items</p>
                        </div>
                    </div>
                    <div class="mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="flex justify-center space-x-1">
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-share"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Folder 3 -->
                <div class="group cursor-pointer">
                    <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:shadow-md transition-all">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-folder text-4xl text-green-500 mb-3"></i>
                            <p class="text-sm font-medium text-gray-900 text-center truncate w-full">Reports</p>
                            <p class="text-xs text-gray-500">32 items</p>
                        </div>
                    </div>
                    <div class="mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="flex justify-center space-x-1">
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-share"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- PDF File -->
                <div class="group cursor-pointer">
                    <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:shadow-md transition-all">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-file-pdf text-4xl text-red-500 mb-3"></i>
                            <p class="text-sm font-medium text-gray-900 text-center truncate w-full">Project_Proposal.pdf</p>
                            <p class="text-xs text-gray-500">2.4 MB</p>
                        </div>
                    </div>
                    <div class="mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="flex justify-center space-x-1">
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Word Document -->
                <div class="group cursor-pointer">
                    <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:shadow-md transition-all">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-file-word text-4xl text-blue-600 mb-3"></i>
                            <p class="text-sm font-medium text-gray-900 text-center truncate w-full">Meeting_Notes.docx</p>
                            <p class="text-xs text-gray-500">156 KB</p>
                        </div>
                    </div>
                    <div class="mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="flex justify-center space-x-1">
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Excel File -->
                <div class="group cursor-pointer">
                    <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:shadow-md transition-all">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-file-excel text-4xl text-green-600 mb-3"></i>
                            <p class="text-sm font-medium text-gray-900 text-center truncate w-full">Budget_Tracker.xlsx</p>
                            <p class="text-xs text-gray-500">324 KB</p>
                        </div>
                    </div>
                    <div class="mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="flex justify-center space-x-1">
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Image File -->
                <div class="group cursor-pointer">
                    <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:shadow-md transition-all">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-file-image text-4xl text-purple-500 mb-3"></i>
                            <p class="text-sm font-medium text-gray-900 text-center truncate w-full">Logo_Design.png</p>
                            <p class="text-xs text-gray-500">1.2 MB</p>
                        </div>
                    </div>
                    <div class="mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="flex justify-center space-x-1">
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Video File -->
                <div class="group cursor-pointer">
                    <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:shadow-md transition-all">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-file-video text-4xl text-red-600 mb-3"></i>
                            <p class="text-sm font-medium text-gray-900 text-center truncate w-full">Demo_Video.mp4</p>
                            <p class="text-xs text-gray-500">45.6 MB</p>
                        </div>
                    </div>
                    <div class="mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="flex justify-center space-x-1">
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-play"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Archive File -->
                <div class="group cursor-pointer">
                    <div class="p-4 border border-gray-200 rounded-lg hover:bg-gray-50 hover:shadow-md transition-all">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-file-archive text-4xl text-yellow-600 mb-3"></i>
                            <p class="text-sm font-medium text-gray-900 text-center truncate w-full">Project_Backup.zip</p>
                            <p class="text-xs text-gray-500">124 MB</p>
                        </div>
                    </div>
                    <div class="mt-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="flex justify-center space-x-1">
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-unzip"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-lg shadow p-6 mt-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
            <i class="fas fa-history mr-2 text-blue-600"></i>
            Recent Activity
        </h3>
        <div class="space-y-3">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-green-100 rounded-lg">
                    <i class="fas fa-upload text-green-600 text-xs"></i>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-gray-900">Sarah Johnson uploaded 3 files to Contracts folder</p>
                    <p class="text-xs text-gray-500">2 minutes ago</p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-blue-100 rounded-lg">
                    <i class="fas fa-folder-plus text-blue-600 text-xs"></i>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-gray-900">Michael Chen created new folder "Design Assets"</p>
                    <p class="text-xs text-gray-500">15 minutes ago</p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-purple-100 rounded-lg">
                    <i class="fas fa-share text-purple-600 text-xs"></i>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-gray-900">Emma Davis shared "Project_Proposal.pdf" with team</p>
                    <p class="text-xs text-gray-500">1 hour ago</p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-yellow-100 rounded-lg">
                    <i class="fas fa-download text-yellow-600 text-xs"></i>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-gray-900">Robert Kim downloaded "Budget_Tracker.xlsx"</p>
                    <p class="text-xs text-gray-500">2 hours ago</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
