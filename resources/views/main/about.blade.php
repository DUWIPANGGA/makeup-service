@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Tentang LK Makeup Artist</span>
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Menciptakan kecantikan yang alami dan memukau dengan sentuhan profesional
            </p>
        </div>

        <!-- About Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <!-- Image -->
            <div class="relative rounded-2xl overflow-hidden shadow-xl" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" 
                     alt="LK Makeup Artist Team" 
                     class="w-full h-auto object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-purple-900/30 to-pink-500/20"></div>
            </div>

            <!-- Text Content -->
            <div class="space-y-6" data-aos="fade-left">
                <h2 class="text-3xl font-bold text-gray-900">Visi & Misi Kami</h2>
                <p class="text-gray-600">
                    LK Makeup Artist didirikan pada tahun 2015 dengan misi untuk memberikan pengalaman makeup profesional yang membuat setiap klien merasa istimewa dan percaya diri. Kami percaya bahwa kecantikan sejati berasal dari dalam, dan makeup adalah alat untuk mengekspresikan keunikan setiap individu.
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-pink-100 p-2 rounded-full text-pink-600 flex-shrink-0 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <p class="ml-3 text-gray-600">Menggunakan produk berkualitas tinggi yang ramah kulit</p>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-pink-100 p-2 rounded-full text-pink-600 flex-shrink-0 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <p class="ml-3 text-gray-600">Tim profesional dengan sertifikasi internasional</p>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-pink-100 p-2 rounded-full text-pink-600 flex-shrink-0 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <p class="ml-3 text-gray-600">Teknik terkini yang disesuaikan dengan kebutuhan klien</p>
                    </div>
                </div>
                
                <div class="pt-4">
                    <a href="{{ route('contact') }}" 
                       class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-lg font-medium hover:from-pink-600 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Hubungi Kami
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Tim Profesional Kami</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Lisa Kurniawan" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900">Lisa Kurniawan</h3>
                        <p class="text-pink-600 font-medium mb-3">Founder & Lead Makeup Artist</p>
                        <p class="text-gray-600 text-sm">Spesialis bridal makeup dengan pengalaman 10+ tahun</p>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Dewi Anggraeni" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900">Dewi Anggraeni</h3>
                        <p class="text-pink-600 font-medium mb-3">Makeup Artist</p>
                        <p class="text-gray-600 text-sm">Ahli dalam makeup editorial dan fashion</p>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Rina Wijaya" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900">Rina Wijaya</h3>
                        <p class="text-pink-600 font-medium mb-3">Hair Stylist</p>
                        <p class="text-gray-600 text-sm">Spesialis tatanan rambut pengantin tradisional & modern</p>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                    <img src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Ahmad Fauzi" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900">Ahmad Fauzi</h3>
                        <p class="text-pink-600 font-medium mb-3">Photographer</p>
                        <p class="text-gray-600 text-sm">Mengabadikan momen berharga dengan sentuhan artistic</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Apa Kata Klien Kami</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-pink-50 rounded-xl p-6 relative">
                    <div class="absolute -top-4 -left-4 bg-pink-500 w-10 h-10 rounded-full flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Makeup dari LK Makeup Artist membuat saya merasa seperti ratu di hari pernikahan saya. Hasilnya natural tapi tetap glamour!"</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                             alt="Sarah Putri" 
                             class="w-10 h-10 rounded-full object-cover mr-3">
                        <div>
                            <h4 class="font-bold text-gray-900">Sarah Putri</h4>
                            <p class="text-sm text-gray-500">Bride, June 2023</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-purple-50 rounded-xl p-6 relative">
                    <div class="absolute -top-4 -left-4 bg-purple-500 w-10 h-10 rounded-full flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Tim LK sangat profesional dan detail. Hasil makeup tahan seharian meskipun di bawah terik matahari untuk foto prewedding."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                             alt="Dian Sastro" 
                             class="w-10 h-10 rounded-full object-cover mr-3">
                        <div>
                            <h4 class="font-bold text-gray-900">Dian Sastro</h4>
                            <p class="text-sm text-gray-500">Prewedding Client</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-pink-50 rounded-xl p-6 relative">
                    <div class="absolute -top-4 -left-4 bg-pink-500 w-10 h-10 rounded-full flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Saya selalu menggunakan jasa LK untuk event-event penting. Mereka mengerti karakter wajah saya dan selalu memberikan hasil terbaik."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" 
                             alt="Maya Sari" 
                             class="w-10 h-10 rounded-full object-cover mr-3">
                        <div>
                            <h4 class="font-bold text-gray-900">Maya Sari</h4>
                            <p class="text-sm text-gray-500">Corporate Client</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Achievements -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6 text-center" data-aos="fade-up">
            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <div class="text-4xl font-bold text-pink-600 mb-2">10+</div>
                <div class="text-gray-600">Tahun Pengalaman</div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <div class="text-4xl font-bold text-purple-600 mb-2">500+</div>
                <div class="text-gray-600">Klien Bahagia</div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <div class="text-4xl font-bold text-pink-600 mb-2">50+</div>
                <div class="text-gray-600">Acara Besar</div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <div class="text-4xl font-bold text-purple-600 mb-2">15+</div>
                <div class="text-gray-600">Penghargaan</div>
            </div>
        </div>
    </div>
    @include('main.galeri')
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