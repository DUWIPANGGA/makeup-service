<section class="bg-white rounded-2xl shadow-lg overflow-hidden">
    <!-- Section Header -->
    <div class="bg-gradient-to-r from-pink-500 to-purple-600 p-6 text-white">
        <h2 class="text-2xl font-bold flex items-center">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Admin Configuration Panel
        </h2>
        <p class="text-pink-100 mt-2">Manage your store settings and configurations</p>
    </div>
    
    @if(Auth::user()->role === 'admin' or Auth::user()->role === 'superadmin')
    <!-- Configuration Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
        <!-- Product Management -->
        <a href="{{ route('products.index') }}" class="group">
            <div class="bg-gradient-to-br from-pink-50 to-purple-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 h-full border border-gray-100 hover:border-pink-200">
                <div class="flex items-center mb-4">
                    <div class="bg-pink-100 p-3 rounded-full text-pink-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 group-hover:text-pink-600 transition-colors">Product Configuration</h3>
                </div>
                <p class="text-gray-600">Manage all products, categories, and inventory settings</p>
                <div class="mt-4 text-pink-600 flex items-center group-hover:translate-x-1 transition-transform">
                    <span>Go to Products</span>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>
        <!-- Order Management -->
        <a href="{{ route('bookings.index') }}" class="group">
            <div class="bg-gradient-to-br from-pink-50 to-purple-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 h-full border border-gray-100 hover:border-pink-200">
                <div class="flex items-center mb-4">
                    <div class="bg-pink-100 p-3 rounded-full text-pink-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 group-hover:text-pink-600 transition-colors">Order Management</h3>
                </div>
                <p class="text-gray-600">View and process customer orders and transactions</p>
                <div class="mt-4 text-pink-600 flex items-center group-hover:translate-x-1 transition-transform">
                    <span>Go to Orders</span>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>

        @endif
        @if(Auth::user()->role === 'superadmin')
            
       
        <!-- User Management -->
        <a href="{{ route('users.index') }}" class="group">
            <div class="bg-gradient-to-br from-pink-50 to-purple-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 h-full border border-gray-100 hover:border-pink-200">
                <div class="flex items-center mb-4">
                    <div class="bg-purple-100 p-3 rounded-full text-purple-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 group-hover:text-purple-600 transition-colors">User Management</h3>
                </div>
                <p class="text-gray-600">View and manage user accounts, roles, and permissions</p>
                <div class="mt-4 text-purple-600 flex items-center group-hover:translate-x-1 transition-transform">
                    <span>Go to Users</span>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>
        @endif

        
        <!-- System Settings -->
        <a href="" class="group">
            <div class="bg-gradient-to-br from-pink-50 to-purple-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 h-full border border-gray-100 hover:border-pink-200">
                <div class="flex items-center mb-4">
                    <div class="bg-purple-100 p-3 rounded-full text-purple-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 group-hover:text-purple-600 transition-colors">System Settings</h3>
                </div>
                <p class="text-gray-600">Configure store settings, payment methods, and integrations</p>
                <div class="mt-4 text-purple-600 flex items-center group-hover:translate-x-1 transition-transform">
                    <span>Go to Settings</span>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>

        <!-- Reports & Analytics -->
        <a href="" class="group">
            <div class="bg-gradient-to-br from-pink-50 to-purple-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 h-full border border-gray-100 hover:border-pink-200">
                <div class="flex items-center mb-4">
                    <div class="bg-pink-100 p-3 rounded-full text-pink-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 group-hover:text-pink-600 transition-colors">Reports & Analytics</h3>
                </div>
                <p class="text-gray-600">View sales reports, customer analytics, and business insights</p>
                <div class="mt-4 text-pink-600 flex items-center group-hover:translate-x-1 transition-transform">
                    <span>Go to Reports</span>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>

        <!-- Content Management -->
        <a href="" class="group">
            <div class="bg-gradient-to-br from-pink-50 to-purple-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 h-full border border-gray-100 hover:border-pink-200">
                <div class="flex items-center mb-4">
                    <div class="bg-purple-100 p-3 rounded-full text-purple-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 group-hover:text-purple-600 transition-colors">Content Management</h3>
                </div>
                <p class="text-gray-600">Manage pages, blogs, banners, and marketing content</p>
                <div class="mt-4 text-purple-600 flex items-center group-hover:translate-x-1 transition-transform">
                    <span>Go to Content</span>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>
    </div>
</section>