@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8" data-aos="fade-down">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Detail Pengguna</span>
            </h1>
            <p class="text-gray-600">Informasi lengkap tentang pengguna sistem</p>
        </div>

        <!-- User Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden" data-aos="fade-up">
            <div class="p-6 sm:p-8">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6 mb-6">
                    <div class="bg-gradient-to-r from-pink-100 to-purple-100 p-4 rounded-full">
                        <svg class="w-12 h-12 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">{{ $user->name }}</h2>
                        <p class="text-gray-500">{{ $user->email }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Role -->
                    <div class="bg-gray-50 p-5 rounded-xl">
                        <h3 class="text-sm font-medium text-gray-500 mb-1">Role</h3>
                        @if($user->role === 'admin')
                        <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                            Admin
                        </span>
                        @else
                        <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-pink-100 text-pink-800">
                            User
                        </span>
                        @endif
                    </div>

                    <!-- Phone -->
                    <div class="bg-gray-50 p-5 rounded-xl">
                        <h3 class="text-sm font-medium text-gray-500 mb-1">Telepon</h3>
                        <p class="text-gray-900">
                            @if($user->telepon)
                            {{ $user->telepon }}
                            @else
                            <span class="text-gray-400">Tidak tersedia</span>
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Additional Info Section (can be expanded) -->
                <div class="mt-6 border-t border-gray-100 pt-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Informasi Tambahan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Tanggal Dibuat</p>
                            <p class="text-gray-900">{{ $user->created_at->format('d M Y H:i') }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Terakhir Diupdate</p>
                            <p class="text-gray-900">{{ $user->updated_at->format('d M Y H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Footer -->
            <div class="bg-gradient-to-r from-pink-50 to-purple-50 px-6 py-4 flex flex-col sm:flex-row justify-between items-center gap-4">
                <a href="{{ route('users.index') }}" 
                   class="w-full sm:w-auto flex items-center justify-center px-6 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-all">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Daftar
                </a>
                
                <div class="flex space-x-2 w-full sm:w-auto">
                    <a href="{{ route('users.edit', $user->id) }}" 
                       class="w-1/2 sm:w-auto flex items-center justify-center px-6 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-pink-500 hover:bg-pink-600 transition-all shadow-sm">
                        Edit
                    </a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="w-1/2 sm:w-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="w-full flex items-center justify-center px-6 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-red-500 hover:bg-red-600 transition-all shadow-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AOS Animation Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-out-cubic'
    });
</script>
@endsection