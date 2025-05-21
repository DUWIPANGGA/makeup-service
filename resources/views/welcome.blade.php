@extends('layouts.app')
@section('content')

    <!-- Hero Section with Parallax Effect -->
    <section class="relative h-screen overflow-hidden bg-gradient-to-br from-pink-100 to-purple-100 flex items-center">
        <!-- Animated background elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
            <div class="absolute top-20 left-10 w-16 h-16 rounded-full bg-pink-300 opacity-20 animate-float1"></div>
            <div class="absolute top-1/3 right-20 w-24 h-24 rounded-full bg-purple-300 opacity-20 animate-float2"></div>
            <div class="absolute bottom-20 left-1/4 w-20 h-20 rounded-full bg-pink-400 opacity-15 animate-float3"></div>
        </div>

        <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center relative z-10">
            <!-- Image with hover effect -->
            <div class="w-full md:w-1/2" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                <div class="relative group">
                    <img src="{{ asset('img/logo.png') }}" alt="Belanja Online"
                        class="rounded-lg shadow-xl transform transition-all duration-700 group-hover:scale-105 group-hover:shadow-2xl">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-pink-500 to-transparent opacity-0 group-hover:opacity-20 rounded-lg transition-opacity duration-500">
                    </div>
                </div>
            </div>

            <!-- Text with staggered animation -->
            <div class="w-full md:w-1/1.5 text-left md:text-left mt-10 md:mt-0 md:pl-10">
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-4" data-aos="fade-left" data-aos-delay="200"
                style="font-family: 'Playfair Display', serif;"
                    data-aos-easing="ease-out-back">
                    Selamat Datang di <br><p
                        class=" text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600" style="font-family: 'Playfair Display', serif;">LK MAKEUP ARTIST</p>
            </h2>
                <small style="font-family: 'Playfair Display', serif;">- Laely Khiyaroh</small>
                <br>
                <p class="text-xl text-gray-700 mb-8" data-aos="fade-left" data-aos-delay="400"
                    data-aos-easing="ease-out-back">
                    MUA adalah seorang profesional yang memiliki keahlian khusus dalam seni merias wajah, menciptakan tampilan yang indah dan berkarakter sesuai kebutuhan klien.
                </p>
                <div data-aos="fade-left" data-aos-delay="600">
                    <a href="#"
                        class="relative inline-block bg-gradient-to-r from-pink-500 to-purple-600 text-white px-8 py-4 rounded-full font-semibold overflow-hidden group">
                        <span class="relative z-10">Belanja Sekarang</span>
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white opacity-0 group-hover:opacity-100 group-hover:animate-bounce-right transition-opacity duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce" data-aos="fade-up"
            data-aos-delay="800">
            <svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- About Section with Floating Elements -->
    <section class="relative py-20 px-6 bg-gradient-to-b from-gray-50 to-white overflow-hidden">
        <!-- Floating decorative elements -->
        <div class="absolute -top-20 -right-20 w-64 h-64 rounded-full bg-pink-100 opacity-20 blur-xl"></div>
        <div class="absolute bottom-10 left-10 w-40 h-40 rounded-full bg-purple-100 opacity-20 blur-xl"></div>

        <div class="container mx-auto relative z-10">
            <h2 class="text-4xl font-bold text-center mb-12" data-aos="zoom-in" data-aos-anchor-placement="top-center">
                Tentang <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Kami</span>
            </h2>

            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8 md:p-12 backdrop-blur-sm bg-opacity-70"
                data-aos="fade-up" data-aos-easing="ease-out-cubic">
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Kami adalah platform e-commerce terpercaya yang menyediakan berbagai produk terbaik dengan harga
                    kompetitif.
                    Dengan pengalaman bertahun-tahun di industri ini, kami berkomitmen untuk memberikan pelayanan terbaik
                    kepada pelanggan.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Nikmati pengalaman belanja yang nyaman, aman, dan menyenangkan bersama kami. Setiap produk yang kami
                    tawarkan
                    melalui proses seleksi ketat untuk memastikan kualitas terbaik untuk Anda.
                </p>

                <div class="mt-10 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-4xl font-bold text-pink-500 mb-2">10K+</div>
                        <div class="text-gray-600">Produk</div>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-4xl font-bold text-purple-500 mb-2">50K+</div>
                        <div class="text-gray-600">Pelanggan</div>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-4xl font-bold text-pink-500 mb-2">5+</div>
                        <div class="text-gray-600">Tahun</div>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="text-4xl font-bold text-purple-500 mb-2">99%</div>
                        <div class="text-gray-600">Kepuasan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Showcase with 3D Tilt Effect -->
    <section class="py-20 px-6 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4" data-aos="zoom-in" data-aos-anchor-placement="top-center">
                    Produk <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Terlaris</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up">
                    Temukan koleksi produk terbaik kami yang paling diminati oleh pelanggan
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @if ($products)
                    @foreach ($products as $product)
                        <div class="group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}" data-tilt
                            data-tilt-max="10" data-tilt-speed="400" data-tilt-perspective="1000">
                            <div
                                class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-500 group-hover:shadow-2xl h-full flex flex-col">
                                <div class="relative overflow-hidden h-64">
                                    <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                    </div>
                                    <div class="absolute top-4 right-4">
                                        <span
                                            class="bg-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">Bestseller</span>
                                    </div>
                                </div>

                                <div class="p-6 flex-grow">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $product->name }}</h3>
                                    <div class="flex items-center mb-3">
                                        <div class="flex text-yellow-400">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5" fill="{{ $i < 4 ? 'currentColor' : 'none' }}"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                    </path>
                                                </svg>
                                            @endfor
                                        </div>
                                        <span class="text-gray-600 text-sm ml-2">(42 reviews)</span>
                                    </div>
                                    <p class="text-gray-700 mb-4">Harga: <span class="text-xl font-bold text-pink-500">Rp
                                            {{ number_format($product->price, 0, ',', '.') }}</span></p>
                                </div>

                                <div class="px-6 pb-6">
                                    <a href="{{ route('products.show', $product->id) }}"
                                        class="block w-full text-center bg-gradient-to-r from-pink-500 to-purple-600 text-white px-6 py-3 rounded-full font-medium hover:from-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow hover:shadow-lg">
                                        Beli Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 border border-pink-500 text-pink-500 rounded-full font-medium hover:bg-pink-500 hover:text-white transition-all duration-300 group">
                    Lihat Semua Produk
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section with Swiper -->
    <section class="py-20 px-6 bg-gradient-to-br from-gray-50 to-pink-50">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4" data-aos="zoom-in">
                Kata <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Pelanggan</span>
            </h2>
            <p class="text-lg text-gray-600 text-cente  r max-w-2xl mx-auto mb-12" data-aos="fade-up">
                Apa yang pelanggan kami katakan tentang pengalaman berbelanja
            </p>

            <div class="swiper testimonial-swiper flex flex-row gap-10 overflow-x-auto" data-aos="fade-up">
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-lg p-8 h-full">
                        <div class="flex items-center mb-6">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Customer"
                                class="w-16 h-16 rounded-full object-cover border-4 border-pink-100">
                            <div class="ml-4">
                                <h4 class="font-bold text-lg">Sarah Johnson</h4>
                                <p class="text-gray-600">Pelanggan sejak 2020</p>
                            </div>
                        </div>
                        <div class="text-gray-700 leading-relaxed">
                            "Saya sangat puas dengan layanan dan kualitas produknya. Pengiriman cepat dan packaging sangat
                            aman. Akan belanja lagi di sini!"
                        </div>
                        <div class="flex mt-4">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-lg p-8 h-full">
                        <div class="flex items-center mb-6">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Customer"
                                class="w-16 h-16 rounded-full object-cover border-4 border-purple-100">
                            <div class="ml-4">
                                <h4 class="font-bold text-lg">Michael Tan</h4>
                                <p class="text-gray-600">Pelanggan sejak 2021</p>
                            </div>
                        </div>
                        <div class="text-gray-700 leading-relaxed">
                            "Produk sesuai gambar dan deskripsi. Harga kompetitif dengan kualitas premium. Customer service
                            sangat responsif dan membantu."
                        </div>
                        <div class="flex mt-4">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-yellow-400" fill="{{ $i < 4 ? 'currentColor' : 'none' }}"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                    </path>
                                </svg>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-lg p-8 h-full">
                        <div class="flex items-center mb-6">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Customer"
                                class="w-16 h-16 rounded-full object-cover border-4 border-pink-100">
                            <div class="ml-4">
                                <h4 class="font-bold text-lg">Diana Putri</h4>
                                <p class="text-gray-600">Pelanggan sejak 2022</p>
                            </div>
                        </div>
                        <div class="text-gray-700 leading-relaxed">
                            "Pengalaman belanja online terbaik yang pernah saya alami! Website mudah digunakan dan produk
                            selalu sampai tepat waktu. Sangat recommended!"
                        </div>
                        <div class="flex mt-4">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <!-- Swiper pagination -->
            <div class="swiper-pagination !relative !bottom-0 mt-8"></div>
        </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 px-6 bg-gradient-to-r from-pink-500 to-purple-600 text-white">
        <div class="container mx-auto max-w-4xl text-center" data-aos="zoom-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Dapatkan Penawaran Spesial</h2>
            <p class="text-lg md:text-xl mb-8 opacity-90">Berlangganan newsletter kami dan dapatkan diskon 15% untuk
                pembelian pertama</p>

            <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                <input type="email" placeholder="Alamat email Anda"
                    class="flex-grow px-6 py-3 rounded-full text-gray-900 focus:outline-none focus:ring-2 focus:ring-pink-300">
                <button type="submit"
                    class="px-8 py-3 bg-white text-pink-600 rounded-full font-semibold hover:bg-gray-100 transition-all transform hover:scale-105 shadow-lg">
                    Berlangganan
                </button>
            </form>
        </div>
    </section>

    <!-- Contact Section with Map -->
    <section class="py-20 px-6 bg-white">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4" data-aos="zoom-in">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Hubungi</span>
                Kami
            </h2>
            <p class="text-lg text-gray-600 text-center max-w-2xl mx-auto mb-12" data-aos="fade-up">
                Jika Anda memiliki pertanyaan atau butuh bantuan, tim kami siap membantu Anda
            </p>

            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Contact Form -->
                <div class="lg:w-1/2" data-aos="fade-right">
                    <form class="bg-gray-50 p-8 rounded-2xl shadow-lg">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Alamat Email</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all">
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subjek</label>
                            <input type="text" id="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                            <textarea id="message" rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white py-3 px-6 rounded-lg font-semibold hover:from-pink-600 hover:to-purple-700 transition-all transform hover:scale-105 shadow-lg">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

                <!-- Contact Info and Map -->
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-lg h-full">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Informasi Kontak</h3>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-pink-100 p-3 rounded-full text-pink-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold text-gray-900">Alamat</h4>
                                    <p class="text-gray-600 mt-1">Jl. Contoh No. 123, Jakarta Selatan, Indonesia</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-purple-100 p-3 rounded-full text-purple-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold text-gray-900">Telepon</h4>
                                    <p class="text-gray-600 mt-1">+62 123 4567 890</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-pink-100 p-3 rounded-full text-pink-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold text-gray-900">Email</h4>
                                    <p class="text-gray-600 mt-1">info@example.com</p>
                                </div>
                            </div>
                        </div>

                        <!-- Map Placeholder -->
                        <div class="mt-8 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-w-16 aspect-h-9 bg-gray-200 flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating Action Button -->
    <div class="fixed bottom-8 right-8 z-50">
        <button
            class="w-16 h-16 bg-gradient-to-br from-pink-500 to-purple-600 text-white rounded-full shadow-xl flex items-center justify-center hover:from-pink-600 hover:to-purple-700 transition-all transform hover:scale-110 animate-pulse">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
        </button>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTop"
        class="fixed bottom-8 left-8 w-12 h-12 bg-gray-800 text-white rounded-full shadow-lg hidden items-center justify-center z-50 transition-all opacity-0 scale-90">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <!-- Include necessary JS libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 800,
            once: false,
            easing: 'ease-out-cubic',
            mirror: true
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.testimonial-swiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    }
                }
            });
        });
    </script>

    <!-- Back to Top Button Script -->
    <script>
        const backToTopButton = document.getElementById('backToTop');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('hidden', 'opacity-0', 'scale-90');
                backToTopButton.classList.add('flex', 'opacity-100', 'scale-100');
            } else {
                backToTopButton.classList.remove('flex', 'opacity-100', 'scale-100');
                backToTopButton.classList.add('hidden', 'opacity-0', 'scale-90');
            }
        });

        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

    <!-- Custom Animations -->
    <style>
        @keyframes float1 {

            0%,
            100% {
                transform: translateY(0) translateX(0);
            }

            50% {
                transform: translateY(-20px) translateX(10px);
            }
        }

        @keyframes float2 {

            0%,
            100% {
                transform: translateY(0) translateX(0);
            }

            50% {
                transform: translateY(15px) translateX(-15px);
            }
        }

        @keyframes float3 {

            0%,
            100% {
                transform: translateY(0) translateX(0);
            }

            50% {
                transform: translateY(-10px) translateX(-10px);
            }
        }

        .animate-float1 {
            animation: float1 6s ease-in-out infinite;
        }

        .animate-float2 {
            animation: float2 8s ease-in-out infinite;
        }

        .animate-float3 {
            animation: float3 7s ease-in-out infinite;
        }

        .animate-bounce-right {
            animation: bounceRight 1s infinite;
        }

        @keyframes bounceRight {

            0%,
            100% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(5px);
            }
        }

        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #ccc;
            border-radius: 10px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #aaa;
        }

        ::-webkit-scrollbar-track {
            background-color: #eee;
            border-radius: 10px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }
    </style>
@endsection
