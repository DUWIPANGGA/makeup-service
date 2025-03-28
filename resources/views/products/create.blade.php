@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8" data-aos="fade-down">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Tambah Produk Baru</span>
            </h1>
            <p class="text-gray-600">Isi formulir berikut untuk menambahkan produk baru</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden" data-aos="fade-up">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="p-6 sm:p-8">
                @csrf

                <!-- Product Name -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Produk</label>
                    <input type="text" id="name" name="name" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300"
                           placeholder="Contoh: Paket Makeup Pengantin Premium" required>
                </div>

                <!-- Product Description -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Produk</label>
                    <textarea id="description" name="description" rows="4"
                              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300"
                              placeholder="Deskripsikan produk Anda secara detail"></textarea>
                </div>

                <!-- Product Price -->
                <div class="mb-6">
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Harga (Rp)</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">Rp</span>
                        <input type="number" id="price" name="price" 
                               class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300"
                               placeholder="1.500.000" required>
                    </div>
                </div>

                <!-- Product Image -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Produk</label>
                    
                    <!-- File Input with Preview -->
                    <div class="flex items-center justify-center w-full">
                        <label for="picture" class="flex flex-col w-full cursor-pointer">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:bg-gray-50 transition-colors duration-300">
                                <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500">
                                    <span class="font-semibold">Klik untuk upload</span> atau drag & drop
                                </p>
                                <p class="text-xs text-gray-500">PNG, JPG, JPEG (Max. 2MB)</p>
                            </div>
                            <input id="picture" name="picture" type="file" class="hidden" accept="image/*">
                        </label>
                    </div>
                    <div id="image-preview" class="mt-4 hidden">
                        <p class="text-sm text-gray-500 mb-2">Preview Gambar:</p>
                        <img id="preview-image" class="h-40 object-contain rounded-lg border border-gray-200">
                    </div>
                </div>

                <!-- Category (if applicable) -->
                @if(isset($categories))
                <div class="mb-6">
                    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <select id="category_id" name="category_id" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300">
                        <option value="">Pilih Kategori</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                @endif

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row justify-end gap-4 pt-6">
                    <a href="{{ route('products.index') }}" 
                       class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-all duration-300 text-center">
                        Batal
                    </a>
                    <button type="submit" 
                            class="px-6 py-3 bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-lg font-semibold hover:from-pink-600 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Simpan Produk
                    </button>
                </div>
            </form>
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

    // Image preview functionality
    document.getElementById('picture').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const previewContainer = document.getElementById('image-preview');
                const previewImage = document.getElementById('preview-image');
                
                previewImage.src = event.target.result;
                previewContainer.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection