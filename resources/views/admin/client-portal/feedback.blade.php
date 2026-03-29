@extends('admin.layouts.app')

@section('title', 'Feedback')
@section('page-title', 'Feedback')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8">
    <!-- Advanced Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Client Feedback</h1>
            <p class="text-gray-600 mt-1">Collect, manage, and analyze client feedback and reviews</p>
        </div>
        <div class="flex space-x-3">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center">
                <i class="fas fa-plus mr-2"></i>
                Request Feedback
            </button>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center">
                <i class="fas fa-chart-bar mr-2"></i>
                Analytics Report
            </button>
        </div>
    </div>

    <!-- Feedback Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Reviews</p>
                    <p class="text-2xl font-bold text-gray-900">347</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 23% this month
                    </p>
                </div>
                <div class="p-3 bg-blue-100 rounded-lg">
                    <i class="fas fa-star text-blue-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Average Rating</p>
                    <p class="text-2xl font-bold text-gray-900">4.7</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 0.2 improvement
                    </p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-lg">
                    <i class="fas fa-trophy text-yellow-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Response Rate</p>
                    <p class="text-2xl font-bold text-gray-900">89.2%</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> 5% increase
                    </p>
                </div>
                <div class="p-3 bg-green-100 rounded-lg">
                    <i class="fas fa-percentage text-green-600"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Pending</p>
                    <p class="text-2xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="fas fa-clock"></i> Awaiting response
                    </p>
                </div>
                <div class="p-3 bg-purple-100 rounded-lg">
                    <i class="fas fa-hourglass-half text-purple-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Rating Overview -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <div class="lg:col-span-2 bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-chart-bar mr-2 text-blue-600"></i>
                Rating Distribution
            </h3>
            <div class="space-y-3">
                <div class="flex items-center">
                    <span class="text-sm font-medium text-gray-700 w-12">5★</span>
                    <div class="flex-1 mx-3">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                    <span class="text-sm text-gray-600 w-12 text-right">65%</span>
                </div>
                <div class="flex items-center">
                    <span class="text-sm font-medium text-gray-700 w-12">4★</span>
                    <div class="flex-1 mx-3">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 25%"></div>
                        </div>
                    </div>
                    <span class="text-sm text-gray-600 w-12 text-right">25%</span>
                </div>
                <div class="flex items-center">
                    <span class="text-sm font-medium text-gray-700 w-12">3★</span>
                    <div class="flex-1 mx-3">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 7%"></div>
                        </div>
                    </div>
                    <span class="text-sm text-gray-600 w-12 text-right">7%</span>
                </div>
                <div class="flex items-center">
                    <span class="text-sm font-medium text-gray-700 w-12">2★</span>
                    <div class="flex-1 mx-3">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-orange-500 h-2 rounded-full" style="width: 2%"></div>
                        </div>
                    </div>
                    <span class="text-sm text-gray-600 w-12 text-right">2%</span>
                </div>
                <div class="flex items-center">
                    <span class="text-sm font-medium text-gray-700 w-12">1★</span>
                    <div class="flex-1 mx-3">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-red-500 h-2 rounded-full" style="width: 1%"></div>
                        </div>
                    </div>
                    <span class="text-sm text-gray-600 w-12 text-right">1%</span>
                </div>
            </div>
            
            <!-- Sentiment Analysis -->
            <div class="mt-6 pt-6 border-t border-gray-200">
                <h4 class="text-md font-medium text-gray-900 mb-3">Sentiment Analysis</h4>
                <div class="grid grid-cols-3 gap-4">
                    <div class="text-center p-3 bg-green-50 rounded-lg">
                        <div class="text-2xl font-bold text-green-600">78%</div>
                        <div class="text-sm text-gray-600">Positive</div>
                    </div>
                    <div class="text-center p-3 bg-yellow-50 rounded-lg">
                        <div class="text-2xl font-bold text-yellow-600">18%</div>
                        <div class="text-sm text-gray-600">Neutral</div>
                    </div>
                    <div class="text-center p-3 bg-red-50 rounded-lg">
                        <div class="text-2xl font-bold text-red-600">4%</div>
                        <div class="text-sm text-gray-600">Negative</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Feedback -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-comments mr-2 text-purple-600"></i>
                Recent Feedback
            </h3>
            <div class="space-y-4">
                <div class="p-3 border border-gray-200 rounded-lg">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                            <div class="h-6 w-6 rounded-full bg-blue-500 flex items-center justify-center">
                                <span class="text-white text-xs font-medium">SJ</span>
                            </div>
                            <div class="ml-2">
                                <p class="text-sm font-medium text-gray-900">Sarah Johnson</p>
                                <p class="text-xs text-gray-500">E-commerce Platform</p>
                            </div>
                        </div>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">"Excellent work! The team delivered exactly what we needed and the communication was outstanding throughout the project."</p>
                    <p class="text-xs text-gray-500 mt-2">2 days ago</p>
                </div>
                
                <div class="p-3 border border-gray-200 rounded-lg">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                            <div class="h-6 w-6 rounded-full bg-green-500 flex items-center justify-center">
                                <span class="text-white text-xs font-medium">MC</span>
                            </div>
                            <div class="ml-2">
                                <p class="text-sm font-medium text-gray-900">Michael Chen</p>
                                <p class="text-xs text-gray-500">Mobile Banking App</p>
                            </div>
                        </div>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">"Great mobile app development! Minor delays but the quality was exceptional. Would definitely work with them again."</p>
                    <p class="text-xs text-gray-500 mt-2">3 days ago</p>
                </div>
                
                <div class="p-3 border border-gray-200 rounded-lg">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                            <div class="h-6 w-6 rounded-full bg-purple-500 flex items-center justify-center">
                                <span class="text-white text-xs font-medium">ED</span>
                            </div>
                            <div class="ml-2">
                                <p class="text-sm font-medium text-gray-900">Emma Davis</p>
                                <p class="text-xs text-gray-500">Brand Redesign</p>
                            </div>
                        </div>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">"Creative designs and professional service. The final result exceeded our expectations!"</p>
                    <p class="text-xs text-gray-500 mt-2">1 week ago</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Feedback Management -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-900">All Feedback</h3>
                <div class="flex items-center space-x-2">
                    <select class="px-3 py-1 border border-gray-300 rounded text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">All Ratings</option>
                        <option value="5">5 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="2">2 Stars</option>
                        <option value="1">1 Star</option>
                    </select>
                    <select class="px-3 py-1 border border-gray-300 rounded text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">All Status</option>
                        <option value="published">Published</option>
                        <option value="pending">Pending</option>
                        <option value="hidden">Hidden</option>
                    </select>
                    <button class="px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">
                        <i class="fas fa-filter mr-1"></i>Filter
                    </button>
                </div>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Feedback</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-medium">SJ</span>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">E-commerce Platform</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900 max-w-xs truncate">Excellent work! The team delivered exactly what we needed...</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Dec 12, 2024
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Published
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-900" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-green-600 hover:text-green-900" title="Reply">
                                    <i class="fas fa-reply"></i>
                                </button>
                                <button class="text-yellow-600 hover:text-yellow-900" title="Feature">
                                    <i class="fas fa-star"></i>
                                </button>
                                <button class="text-gray-600 hover:text-gray-900" title="Hide">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center">
                                    <span class="text-white text-xs font-medium">MC</span>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">Michael Chen</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mobile Banking App</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900 max-w-xs truncate">Great mobile app development! Minor delays but the quality was exceptional...</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Dec 11, 2024
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Published
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-900" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-green-600 hover:text-green-900" title="Reply">
                                    <i class="fas fa-reply"></i>
                                </button>
                                <button class="text-yellow-600 hover:text-yellow-900" title="Feature">
                                    <i class="fas fa-star"></i>
                                </button>
                                <button class="text-gray-600 hover:text-gray-900" title="Hide">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Feedback Insights -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
        <!-- Common Themes -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-lightbulb mr-2 text-yellow-600"></i>
                Common Themes
            </h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-thumbs-up text-green-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Excellent Communication</span>
                    </div>
                    <span class="text-sm text-gray-600">45 mentions</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-code text-blue-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">High Quality Code</span>
                    </div>
                    <span class="text-sm text-gray-600">38 mentions</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-purple-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-clock text-purple-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Timely Delivery</span>
                    </div>
                    <span class="text-sm text-gray-600">32 mentions</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-dollar-sign text-yellow-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Good Value</span>
                    </div>
                    <span class="text-sm text-gray-600">28 mentions</span>
                </div>
            </div>
        </div>
        
        <!-- Improvement Areas -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-chart-line mr-2 text-red-600"></i>
                Areas for Improvement
            </h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-red-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-triangle text-red-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Project Timeline</span>
                    </div>
                    <span class="text-sm text-gray-600">8 mentions</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-orange-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-comments text-orange-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Documentation</span>
                    </div>
                    <span class="text-sm text-gray-600">5 mentions</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-mobile-alt text-yellow-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Mobile Testing</span>
                    </div>
                    <span class="text-sm text-gray-600">3 mentions</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
