<x-guest-layout>
    <!-- Background Gradient -->
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-pink-50 to-purple-100 p-4">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Login Card -->
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-500 hover:shadow-2xl" data-aos="zoom-in">
            <!-- Card Header with Gradient -->
            <div class="bg-gradient-to-r from-pink-500 to-purple-600 p-6 text-center">
                <h2 class="text-3xl font-bold text-white">Welcome Back</h2>
                <p class="text-pink-100 mt-2">Sign in to your account</p>
            </div>

            <!-- Card Body -->
            <div class="p-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Input with Floating Label -->
                    <div class="relative mb-6" data-aos="fade-up" data-aos-delay="100">
                        <x-text-input 
                            id="email" 
                            class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition-all duration-300 peer" 
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            required 
                            autofocus 
                            autocomplete="username" 
                            placeholder=" "
                        />
                        <x-input-label 
                            for="email" 
                            class="absolute left-4 top-3 px-1 bg-white text-gray-500 transition-all duration-300 peer-focus:-top-2 peer-focus:text-xs peer-focus:text-pink-600 peer-placeholder-shown:top-3 peer-placeholder-shown:text-base" 
                            :value="__('Email')" 
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                    </div>

                    <!-- Password Input with Floating Label -->
                    <div class="relative mb-6" data-aos="fade-up" data-aos-delay="200">
                        <x-text-input 
                            id="password" 
                            class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition-all duration-300 peer" 
                            type="password" 
                            name="password" 
                            required 
                            autocomplete="current-password" 
                            placeholder=" "
                        />
                        <x-input-label 
                            for="password" 
                            class="absolute left-4 top-3 px-1 bg-white text-gray-500 transition-all duration-300 peer-focus:-top-2 peer-focus:text-xs peer-focus:text-pink-600 peer-placeholder-shown:top-3 peer-placeholder-shown:text-base" 
                            :value="__('Password')" 
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between mb-6" data-aos="fade-up" data-aos-delay="300">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer">
                            <input 
                                id="remember_me" 
                                type="checkbox" 
                                class="rounded border-gray-300 text-pink-600 shadow-sm focus:ring-pink-500 transition duration-150 ease-in-out" 
                                name="remember"
                            >
                            <span class="ms-2 text-sm text-gray-600 hover:text-gray-800 transition-colors duration-300">
                                {{ __('Remember me') }}
                            </span>
                        </label>

                        @if (Route::has('password.request'))
                            <a 
                                class="text-sm text-pink-600 hover:text-pink-800 underline transition-colors duration-300" 
                                href="{{ route('password.request') }}"
                            >
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <div data-aos="fade-up" data-aos-delay="400">
                        <x-primary-button class="w-full bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white py-3 px-4 rounded-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02]">
                            {{ __('Log in') }}
                            <svg class="w-5 h-5 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                        </x-primary-button>
                    </div>
                </form>

                <!-- Register Link -->
                @if (Route::has('register'))
                <div class="mt-6 text-center" data-aos="fade-up" data-aos-delay="500">
                    <p class="text-gray-600">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-pink-600 hover:text-pink-800 font-medium underline transition-colors duration-300">
                            Register
                        </a>
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- AOS Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out-cubic'
        });
    </script>
</x-guest-layout>