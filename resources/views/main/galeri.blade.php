
    <section class="min-h-screen bg-gradient-to-br from-pink-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-12" data-aos="fade-down">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Galeri
                        Karya</span>
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Koleksi hasil karya terbaik kami dalam berbagai gaya dan kebutuhan makeup
                </p>
            </div>

            <!-- Gallery Filter -->
            <div class="flex flex-wrap justify-center gap-3 mb-8" data-aos="fade-up">
                <button
                    class="px-4 py-2 bg-white rounded-full text-sm font-medium shadow-sm hover:bg-pink-100 transition-all filter-btn active"
                    data-filter="all">
                    Semua
                </button>
                <button
                    class="px-4 py-2 bg-white rounded-full text-sm font-medium shadow-sm hover:bg-pink-100 transition-all filter-btn"
                    data-filter="bridal">
                    Bridal
                </button>
                <button
                    class="px-4 py-2 bg-white rounded-full text-sm font-medium shadow-sm hover:bg-pink-100 transition-all filter-btn"
                    data-filter="editorial">
                    Editorial
                </button>
                <button
                    class="px-4 py-2 bg-white rounded-full text-sm font-medium shadow-sm hover:bg-pink-100 transition-all filter-btn"
                    data-filter="traditional">
                    Traditional
                </button>
                <button
                    class="px-4 py-2 bg-white rounded-full text-sm font-medium shadow-sm hover:bg-pink-100 transition-all filter-btn"
                    data-filter="fashion">
                    Fashion
                </button>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="gallery-grid">
                @php
                    $i = 1;
                @endphp

                @while ($i <= 31)
                    <div class="gallery-item overflow-hidden rounded-2xl shadow-lg bg-white transition-all duration-300 hover:shadow-xl transform hover:-translate-y-1"
                        data-category="fashion" data-aos="zoom-in" data-aos-delay="{{ $i * 50 }}">
                        <a href="{{ asset('galeri/img-' . $i . '.jpg') }}" class="gallery-link">
                            <img src="{{ asset('galeri/img-' . $i . '.jpg') }}"
                                class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                            <div class="p-4">
                                <h3 class="font-medium text-gray-900">Runway Ready {{ $i }}</h3>
                                <p class="text-sm text-gray-600">High fashion makeup look</p>
                            </div>
                        </a>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endwhile
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12" data-aos="fade-up">
                <button id="load-more"
                    class="px-8 py-3 bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-full font-medium hover:from-pink-600 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Muat Lebih Banyak
                </button>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center hidden">
        <div class="relative max-w-6xl w-full p-4">
            <button id="close-lightbox"
                class="absolute -top-12 right-0 text-white text-4xl hover:text-pink-400 transition-colors">
                &times;
            </button>
            <img id="lightbox-img" src="" alt="" class="max-h-screen mx-auto">
            <div class="text-white text-center mt-4 text-lg" id="lightbox-caption"></div>
        </div>
    </div>

    <!-- AOS Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Simple Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simple-lightbox/2.1.0/simpleLightbox.min.js"></script>
    <script>
        // Initialize AOS animations
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out-cubic'
        });

        // Gallery Filter Functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active', 'bg-pink-500', 'text-white'));
                button.classList.add('active', 'bg-pink-500', 'text-white');

                const filterValue = button.getAttribute('data-filter');

                // Filter items
                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') ===
                        filterValue) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });

        // Lightbox functionality
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxCaption = document.getElementById('lightbox-caption');
        const closeBtn = document.getElementById('close-lightbox');
        const galleryLinks = document.querySelectorAll('.gallery-link');

        galleryLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const imgSrc = link.getAttribute('href');
                const imgAlt = link.querySelector('img').getAttribute('alt');
                const title = link.querySelector('h3').textContent;
                const desc = link.querySelector('p').textContent;

                lightboxImg.setAttribute('src', imgSrc);
                lightboxImg.setAttribute('alt', imgAlt);
                lightboxCaption.textContent = `${title} - ${desc}`;
                lightbox.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
        });

        closeBtn.addEventListener('click', () => {
            lightbox.classList.add('hidden');
            document.body.style.overflow = 'auto';
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        });

        // Load more functionality (would need backend integration for real implementation)
        const loadMoreBtn = document.getElementById('load-more');
        let currentItems = 8;

        loadMoreBtn.addEventListener('click', () => {
            const items = [...document.querySelectorAll('.gallery-item')];

            for (let i = currentItems; i < currentItems + 8; i++) {
                if (items[i]) {
                    items[i].style.display = 'block';
                    items[i].classList.add('animate-fadeIn');
                }
            }

            currentItems += 8;

            if (currentItems >= items.length) {
                loadMoreBtn.style.display = 'none';
            }
        });
    </script>

    <style>
        .gallery-item {
            display: none;
        }

        .gallery-item:nth-child(-n+8) {
            display: block;
        }

        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #ec4899, #8b5cf6);
            color: white;
        }
    </style>

