@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8" data-aos="fade-down">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Edit Produk</span>
            </h1>
            <p class="text-gray-600">Update detail produk Anda</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden" data-aos="fade-up">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="p-8">
                @csrf
                @method('PUT')

                <!-- Product Name -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Produk</label>
                    <input type="text" id="name" name="name" value="{{ $product->name }}" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300"
                           placeholder="Masukkan nama produk" required>
                </div>

                <!-- Product Description -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                    <textarea id="description" name="description" rows="4"
                              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300"
                              placeholder="Masukkan deskripsi produk">{{ $product->description }}</textarea>
                </div>

                <!-- Product Price -->
                <div class="mb-6">
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Harga (Rp)</label>
                    <input type="number" id="price" name="price" value="{{ $product->price }}" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300"
                           placeholder="Masukkan harga" required>
                </div>

                <!-- Product Image -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Produk</label>
                    
                    <!-- Current Image Preview -->
                    @if ($product->picture)
                    <div class="mb-4">
                        <p class="text-sm text-gray-500 mb-2">Gambar Saat Ini:</p>
                        <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" 
                             class="h-40 object-contain rounded-lg border border-gray-200">
                    </div>
                    @endif

                    <!-- File Input -->
                    <div class="flex items-center justify-center w-full">
                        <label for="picture" class="flex flex-col w-full max-w-md cursor-pointer">
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
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row justify-end gap-4 pt-6">
                    <a href="{{ route('products.index') }}" 
                       class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-all duration-300 text-center">
                        Batal
                    </a>
                    <button type="submit" 
                            class="px-6 py-3 bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-lg font-semibold hover:from-pink-600 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Update Produk
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

    // Preview image before upload
    document.getElementById('picture').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const previewContainer = document.createElement('div');
                previewContainer.className = 'mt-4';
                previewContainer.innerHTML = `
                    <p class="text-sm text-gray-500 mb-2">Preview Gambar Baru:</p>
                    <img src="${event.target.result}" alt="Preview" class="h-40 object-contain rounded-lg border border-gray-200">
                `;
                
                const existingPreview = document.querySelector('.mb-4');
                if (existingPreview) {
                    existingPreview.insertAdjacentElement('afterend', previewContainer);
                } else {
                    const fileInput = document.querySelector('input[name="picture"]').parentNode;
                    fileInput.parentNode.insertBefore(previewContainer, fileInput.nextSibling);
                }
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection