<x-home-layout>
    <!-- Navbar Section -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-6">
                    <a href="{{ route('home') }}">
                        <img src="/assets/img/logo2.png" alt="" width="130">
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}#home" class="text-gray-800 hover:text-sky-600 transition">Beranda</a>
                    <a href="{{ route('home') }}#profile"
                        class="text-gray-800 hover:text-sky-600 transition">Tentang</a>
                    <a href="{{ route('home') }}#services"
                        class="text-gray-800 hover:text-sky-600 transition">Layanan</a>
                    <a href="{{ route('home') }}#gallery" class="text-gray-800 hover:text-sky-600 transition">Galeri</a>
                    <a href="{{ route('home') }}#testimonials"
                        class="text-gray-800 hover:text-sky-600 transition">Testimoni</a>
                    <a href="{{ route('home') }}#contact" class="text-gray-800 hover:text-sky-600 transition">Kontak</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-800" x-show="!showMenu" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="hidden mobile-menu">
            <ul class="bg-white px-4 py-2 space-y-2">
                <li><a href="{{ route('home') }}#home" class="block px-2 py-1 text-gray-800 hover:text-sky-600">Beranda</a>
                </li>
                <li><a href="{{ route('home') }}#profile" class="block px-2 py-1 text-gray-800 hover:text-sky-600">Tentang</a></li>
                <li><a href="{{ route('home') }}#services"
                        class="block px-2 py-1 text-gray-800 hover:text-sky-600">Layanan</a></li>
                <li><a href="{{ route('home') }}#gallery"
                        class="block px-2 py-1 text-gray-800 hover:text-sky-600">Galeri</a></li>
                <li><a href="{{ route('home') }}#testimonials"
                        class="block px-2 py-1 text-gray-800 hover:text-sky-600">Testimoni</a></li>
                <li><a href="{{ route('home') }}#contact"
                        class="block px-2 py-1 text-gray-800 hover:text-sky-600">Kontak</a></li>
            </ul>
        </div>
    </nav>
    <!-- End Navabar section -->

    <!-- Hero Section -->
    <section id="home" class="hero-bg pt-64 pb-32 flex items-center animated-gradient-sky">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-shadow" data-aos="fade-right">
                        Jasa Pengeboran Sumur Profesional di Tabanan, Bali</h1>
                    <p class="text-xl text-shadow" data-aos="fade-right" data-aos-delay="100">Dipercaya oleh ratusan
                        klien di seluruh Bali untuk solusi air yang andal sejak tahun 2005.</p>
                    <div class="flex flex-wrap gap-4" data-aos="fade-right" data-aos-delay="200">
                        <a href="#services"
                            class="bg-white text-sky-900 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Lihat
                            Produk Kami</a>

                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="300">
                    <div class="relative w-full h-64 md:h-80 lg:h-96 bg-black rounded-xl overflow-hidden">
                        <!-- Thumbnail YouTube -->
                        <!-- URL thumbnail YouTube diambil dari video ID: 3fGUwWHodOY -->
                        <img src="" alt="YouTube Video Thumbnail"
                            class="w-full h-full object-cover cursor-pointer" id="youtubeThumbnail" />

                        <!-- Overlay dengan tombol play -->
                        <!-- Overlay ini akan terlihat di atas thumbnail dan juga bisa diklik untuk membuka modal -->
                        <div class="absolute inset-0 bg-black/40 bg-opacity-30 flex items-center justify-center cursor-pointer"
                            id="playOverlay">
                            <div
                                class="w-16 h-16 bg-white bg-opacity-80 rounded-full flex items-center justify-center hover:bg-opacity-100 transition duration-300 ease-in-out transform hover:scale-110">
                                <i class="fas fa-play text-sky-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Video -->
                <!-- Modal ini akan muncul di tengah layar dengan latar belakang transparan saat thumbnail diklik -->
                <div class="fixed inset-0 z-50 flex items-center justify-center bg-sky-900/80 backdrop-blur-md transition-opacity duration-300 ease-in-out opacity-0 pointer-events-none"
                    id="videoModal">
                    <!-- Konten modal, termasuk tombol tutup dan iframe video -->
                    <div class="relative w-11/12 max-w-3xl transform -translate-y-4 opacity-0 transition-all duration-300 ease-in-out"
                        id="modalContent">
                        <!-- Tombol tutup modal -->
                        <button class="absolute -top-10 right-0 text-white hover:text-gray-300 text-4xl leading-none"
                            id="closeModal">
                            &times;
                        </button>
                        <!-- Kontainer untuk iframe video YouTube dengan rasio aspek 16:9 -->
                        <div class="relative w-full rounded-lg overflow-hidden" style="padding-bottom: 56.25%;">
                            <iframe class="absolute top-0 left-0 w-full h-full" src=""
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                                id="youtubePlayer"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section -->

    <!-- About Section -->
    <section id="profile" class="py-30 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Tentang Bening Jaya</h2>
                <div class="w-20 h-1 bg-sky-600 mx-auto mt-4"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center" data-aos="fade-up">
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-gray-800">Tentang Kami</h3>
                    <p class="text-gray-600 text-justify">Didirikan pada tahun 2005, Bening Jaya telah berkembang menjadi salah satu
                        perusahaan pengeboran sumur terpercaya di Tabanan, Bali. Dengan tim profesional yang sangat
                        terampil dan peralatan pengeboran canggih, kami telah berhasil menyelesaikan lebih dari 1000
                        proyek pengeboran di seluruh Bali.</p>
                    <p class="text-gray-600 text-justify">Misi kami adalah menyediakan solusi air yang andal dan berkelanjutan untuk
                        rumah tangga, bisnis, dan operasional pertanian di seluruh Bali. Kami bangga dengan komitmen
                        kami terhadap kualitas, keselamatan, dan tanggung jawab terhadap lingkungan.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-sky-50 p-4 rounded-lg">
                            <h4 class="font-bold text-sky-700 text-lg">20+</h4>
                            <p class="text-gray-600 text-sm">Tahun Pengalaman</p>
                        </div>
                        <div class="bg-sky-50 p-4 rounded-lg">
                            <h4 class="font-bold text-sky-600 text-lg">150+</h4>
                            <p class="text-gray-600 text-sm">Klien Puas</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative rounded-xl overflow-hidden h-96">
                        <img src="assets/img/homepage/assets.png" alt="Bening Jaya Team"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section-->

    <!-- Service / Product Section-->
    <section id="services" class="py-24 bg-sky-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Bagian -->
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight text-white">Layanan Unggulan Kami
                </h2>
                <div class="w-24 h-1.5 bg-white mx-auto rounded-full mt-4"></div>
                <p class="mt-6 max-w-2xl mx-auto text-lg text-gray-200 opacity-95">Menyediakan solusi menyeluruh untuk
                    kebutuhan air Anda.</p>
            </div>

            <!-- Grid untuk Kartu Layanan -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($products as $product)
                    <!-- Kartu Layanan: Jasa Sumur Bor Dalam & Dangkal -->
                    <div class="group bg-white rounded-xl overflow-hidden shadow-md border border-gray-200 transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl"
                        data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->photo }}"
                            class="w-full h-60 object-cover">
                        <div class="p-6 flex flex-col items-start">
                            <h3 class="text-xl font-bold mb-3 text-gray-900">{{ $product->name }}</h3>
                            <div class="flex items-center space-x-4 mb-4 text-gray-600 text-sm">
                                <span class="flex items-center"><i class="fas fa-users text-base mr-1"></i>
                                    Profesional</span>
                                <span class="flex items-center"><i class="fas fa-shield-alt text-base mr-1"></i>
                                    Bergaransi</span>
                            </div>
                            <div class="flex star-rating mb-4 text-yellow-500 text-lg space-x-0.5">
                                <!-- Added space-x-0.5 for star spacing -->
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-700 mb-6 flex-grow text-sm text-justify">{{ $product->description }}</p>
                            <a href="https://wa.me/628990477851?text={{ urlencode('Halo Tim Bening Jaya, saya tertarik dengan produk "' . $product->name . '". Mohon informasinya lebih lanjut. Terima kasih!') }}"
                                target="_blank"
                                class="text-center bg-[#5cb85c] text-white font-semibold py-3 px-8 rounded-lg shadow-md hover:shadow-lg w-full transition-all duration-300 ease-in-out hover:-translate-y-0.5 hover:bg-[#4cae4c]">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Service / Product Section-->

    <!-- Gallery Section -->
    <section id="gallery" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16" data-aos="fade-down">
            <div class="text-center">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">Galeri Proyek Kami</h2>
                <div class="w-24 h-1.5 bg-sky-700 mx-auto rounded-full mt-4"></div>
                <p class="mt-6 max-w-2xl mx-auto text-lg text-gray-600 opacity-95">Lihat beberapa proyek pengeboran dan
                    instalasi yang telah kami kerjakan.</p>
            </div>
        </div>

        <!-- Wrapper untuk Carousel Galeri (mirip struktur referensi) -->
        <!-- Overflow hidden untuk menjaga konten di dalam area, left-1/2 -translate-x-1/2 untuk centering -->
        <div class="relative flex flex-col gap-8 w-screen overflow-hidden left-1/2 -translate-x-1/2">
            <!-- Baris Atas (bergerak dari kanan ke kiri) -->
            <div class="relative flex gap-8 home-gallery-row-top animate-scroll">
                @foreach ($galleries as $gallery)
                    <img src="{{ asset('storage/' . $gallery->photo) }}" alt="Photo Galery" loading="lazy"
                        class="bg-surface-1 w-full md:w-1/2 shrink-0 lg:grayscale-100 hover:grayscale-0 lg:opacity-90 hover:opacity-100 transition-all duration-300 rounded-lg object-cover h-48 md:h-64 hover:scale-105 hover:z-10">
                @endforeach
                @foreach ($galleries as $gallery)
                    <img src="{{ asset('storage/' . $gallery->photo) }}" alt="Photo Galery" loading="lazy"
                        class="bg-surface-1 w-full md:w-1/2 shrink-0 lg:grayscale-100 hover:grayscale-0 lg:opacity-90 hover:opacity-100 transition-all duration-300 rounded-lg object-cover h-48 md:h-64 hover:scale-105 hover:z-10">
                @endforeach
            </div>

            <!-- Baris Bawah (bergerak dari kiri ke kanan) -->
            <div class="relative flex gap-8 home-gallery-row-bottom animate-scroll-reverse">
                @foreach ($galleries as $gallery)
                    <img src="{{ asset('storage/' . $gallery->photo) }}" alt="Photo Galery" loading="lazy"
                        class="bg-surface-1 w-full md:w-1/2 shrink-0 lg:grayscale-100 hover:grayscale-0 lg:opacity-90 hover:opacity-100 transition-all duration-300 rounded-lg object-cover h-48 md:h-64 hover:scale-105 hover:z-10">
                @endforeach
                @foreach ($galleries as $gallery)
                    <img src="{{ asset('storage/' . $gallery->photo) }}" alt="Photo Galery" loading="lazy"
                        class="bg-surface-1 w-full md:w-1/2 shrink-0 lg:grayscale-100 hover:grayscale-0 lg:opacity-90 hover:opacity-100 transition-all duration-300 rounded-lg object-cover h-48 md:h-64 hover:scale-105 hover:z-10">
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="pt-30 pb-24 text-white bg-sky-700">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 px-4 sm:px-6 lg:px-8" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">Apa Kata Klien Kami</h2>
                <div class="w-24 h-1.5 bg-white mx-auto rounded-full mt-4"></div>
                <p class="mt-6 max-w-2xl mx-auto text-lg text-gray-200 opacity-95">Dengarkan pengalaman pelanggan yang
                    puas setelah mempercayakan solusi air mereka kepada Bening Jaya.</p>
            </div>

            <div class="overflow-hidden">
                <div class="swiper-container px-4 sm:px-6 lg:px-8">
                    <ul class="swiper-wrapper">
                        @if ($reviews->isEmpty())
                            <div class="bg-white bg-opacity-10 rounded-2xl p-7 backdrop-blur-lg mx-auto">
                                <p class="text-gray-500">Belum ada review saat ini.</p>
                            </div>
                        @endif
                        @foreach ($reviews as $review)
                            <li class="swiper-slide mx-2 md:mx-0">
                                <div class="bg-white bg-opacity-10 rounded-2xl p-7 backdrop-blur-lg">
                                    <div class="flex items-center mb-5">
                                        <div
                                            class="w-14 h-14 rounded-full overflow-hidden mr-4 shadow-md ring-2 ring-white ring-opacity-20">
                                            <img src="{{ $review->photo ? asset('storage/' . $review->photo) : 'https://cdn.pixabay.com/photo/2023/02/18/11/00/icon-7797704_640.png' }}"
                                                alt="{{ $review->name }} " class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-xl text-gray-600">
                                                {{ $review->name, asset($review->photo) }}</h4>
                                            <div class="flex text-yellow-400 text-sm">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fas fa-star{{ $i < $review->star ? '' : '-o' }}"></i>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <p class="italic text-gray-500 text-justify">"{{ $review->review }}"</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="py-30 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12" data-aos="fade-down">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Hubungi Kami</h2>
                    <p class="text-gray-600 mb-8">Siap membahas proyek pengeboran sumur Anda? Hubungi kami hari ini
                        untuk konsultasi dan penawaran gratis.</p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 rounded-full bg-sky-100 flex items-center justify-center text-sky-600">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Alamat</h4>
                                <p class="text-gray-600">Jl. Rambutan No.30, Tabanan.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 rounded-full bg-sky-100 flex items-center justify-center text-sky-600">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Telepon</h4>
                                <p class="text-gray-600">+62 899-0477-851</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 rounded-full bg-sky-100 flex items-center justify-center text-sky-600">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Email</h4>
                                <p class="text-gray-600">beningjayasumurbor@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 rounded-full bg-sky-100 flex items-center justify-center text-sky-600">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Jam Operasional</h4>
                                <p class="text-gray-600">Senin - Sabtu: 08:00 - 16:00</p>
                                <p class="text-gray-600">Minggu: 08:00 - 13:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h4 class="font-bold text-gray-800 mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="https://web.facebook.com/p/beningjaya.sumurbor" target="_blank"
                                class="w-10 h-10 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center hover:bg-sky-200 transition"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/beningjaya_sumurbor" target="_blank"
                                class="w-10 h-10 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center hover:bg-sky-200 transition"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://wa.me/628990477851" target="_blank"
                                class="w-10 h-10 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center hover:bg-sky-200 transition"><i
                                    class="fab fa-whatsapp"></i></a>
                            <a href="https://www.youtube.com/@BeningJayaSumurbor" target="_blank"
                                class="w-10 h-10 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center hover:bg-sky-200 transition"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-sky-50 p-8 rounded-xl">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan kepada Kami</h3>
                        <form class="space-y-4" onsubmit="sendToWhatsApp(event)">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-1">Nama
                                    Lengkap</label>
                                <input type="text" id="name"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent"
                                    placeholder="Nama Anda" required>
                            </div>
                            <div>
                                <label for="service" class="block text-gray-700 font-medium mb-1">Layanan</label>
                                <select id="service"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent">
                                    <option value="">Pilih layanan</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->name }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-1">Pesan</label>
                                <textarea id="message" rows="4"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent"
                                    placeholder="Ceritakan kepada kami tentang rencana proyek Anda"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-sky-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-sky-700 transition duration-300">Kirim
                                Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50" data-aos="zoom-in" data-aos-delay="1000">
        <a href="https://wa.me/628990477851?text=Saya%20ingin%20berkonsultasi%20mengenai%20layanan%20yang%20tersedia.%20Mohon%20bantuannya%20untuk%20penjelasan%20lebih%20lanjut."
            target="_blank"
            class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition transform hover:scale-110">
            <i class="fab fa-whatsapp text-white text-3xl"></i>
        </a>
    </div>
    <!-- End Floating WhatsApp Button -->

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-6 md:space-y-0 md:space-x-8">
                <div class="w-full md:w-1/3">
                    <img src="/assets/img/logo2.png" class="-ml-5" alt="" width="200">
                    <p class="text-gray-400 text-balance text-justify">Layanan pengeboran sumur profesional di Tabanan, Bali sejak
                        tahun 2005. Menyediakan solusi air yang andal untuk properti hunian dan komersial.
                    </p>
                </div>
                <div
                    class="flex flex-col md:flex-row justify-end w-full md:w-2/3 space-y-6 md:space-y-0 md:space-x-8 mt-10 md:mt-0">
                    <div>
                        <h4 class="text-lg font-semibold text-white mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="#home" class="text-gray-400 hover:text-sky-400 transition">Beranda</a>
                            </li>
                            <li><a href="#profile" class="text-gray-400 hover:text-sky-400 transition">Tentang</a></li>
                            <li><a href="#services" class="text-gray-400 hover:text-sky-400 transition">Layanan</a></li>
                            <li><a href="#gallery" class="text-gray-400 hover:text-sky-400 transition">Galeri</a>
                            </li>
                            <li><a href="#contact" class="text-gray-400 hover:text-sky-400 transition">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2023 Bening Jaya. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script>
        function sendToWhatsApp(event) {
            event.preventDefault(); // mencegah submit form biasa

            const name = document.getElementById("name").value;
            const service = document.getElementById("service").value;
            const message = document.getElementById("message").value;

            // Nomor WhatsApp tujuan — TANPA "+"
            const targetNumber = "628990477851";

            const url = `https://wa.me/${targetNumber}?text=${encodeURIComponent(
    `Halo tim *Bening Jaya*!

                    Saya ingin berkonsultasi mengenai layanan yang tersedia. Berikut data saya:

                    Nama: ${name}
                    Layanan yang diminati: ${service}
                    Pesan:
                    ${message}

                    Mohon dibantu ya. Terima kasih sebelumnya!`)}`;
            window.open(url, '_blank');
        }
    </script>
</x-home-layout>
