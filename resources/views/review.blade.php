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
                    <a href="{{ route('home') }}#home" class="text-gray-800 hover:text-sky-600 transition">Home</a>
                    <a href="{{ route('home') }}#profile" class="text-gray-800 hover:text-sky-600 transition">About
                        Us</a>
                    <a href="{{ route('home') }}#services"
                        class="text-gray-800 hover:text-sky-600 transition">Services</a>
                    <a href="{{ route('home') }}#gallery"
                        class="text-gray-800 hover:text-sky-600 transition">Galerry</a>
                    <a href="{{ route('home') }}#testimonials"
                        class="text-gray-800 hover:text-sky-600 transition">Testimonials</a>
                    <a href="{{ route('home') }}#contact"
                        class="text-gray-800 hover:text-sky-600 transition">Contact</a>
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
                <li><a href="{{ route('home') }}#home" class="block px-2 py-1 text-gray-800 hover:text-sky-600">Home</a>
                </li>
                <li><a href="{{ route('home') }}#profile" class="block px-2 py-1 text-gray-800 hover:text-sky-600">About
                        Us</a></li>
                <li><a href="{{ route('home') }}#services"
                        class="block px-2 py-1 text-gray-800 hover:text-sky-600">Services</a></li>
                <li><a href="{{ route('home') }}#gallery"
                        class="block px-2 py-1 text-gray-800 hover:text-sky-600">Gallery</a></li>
                <li><a href="{{ route('home') }}#testimonials"
                        class="block px-2 py-1 text-gray-800 hover:text-sky-600">Testimonials</a></li>
                <li><a href="{{ route('home') }}#contact"
                        class="block px-2 py-1 text-gray-800 hover:text-sky-600">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- End Navabar section -->

    <!-- Review Form Section-->
    <section id="review-form" class="py-48 bg-gray-100">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Berikan Review Anda</h2>
                @if (session('success'))
                    <div class="bg-green-100 text-green-800 p-4 rounded-md mb-6">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="bg-red-100 text-red-800 p-4 rounded-md mb-6">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div>
                </div>
                <form class="space-y-6" action="{{ route('doReview') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="reviewer-name" class="block text-sm font-medium text-gray-700 mb-2">Nama
                            Lengkap</label>
                        <input type="text" name="name" placeholder="Masukkan nama Anda" value="{{ old('name') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500">
                    </div>

                    <div>
                        <label for="reviewer-photo" class="block text-sm font-medium text-gray-700 mb-2">Unggah Foto
                            (Opsional)</label>
                        <input type="file" name="photo" accept="image/*"
                            class="w-full text-sm text-gray-500
                               file:mr-4 file:py-2 file:px-4
                               file:rounded-full file:border-0
                               file:text-sm file:font-semibold
                               file:bg-sky-50 file:text-sky-700
                               hover:file:bg-sky-100">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Beri Penilaian</label>
                        <div class="flex items-center space-x-1" id="star-rating-container">
                            <input type="radio" id="star1" name="rating" value="1" class="hidden">
                            <label for="star1"
                                class="text-gray-300 text-3xl cursor-pointer hover:text-yellow-400 transition-colors duration-200">★</label>
                            <input type="radio" id="star2" name="rating" value="2" class="hidden">
                            <label for="star2"
                                class="text-gray-300 text-3xl cursor-pointer hover:text-yellow-400 transition-colors duration-200">★</label>
                            <input type="radio" id="star3" name="rating" value="3" class="hidden">
                            <label for="star3"
                                class="text-gray-300 text-3xl cursor-pointer hover:text-yellow-400 transition-colors duration-200">★</label>
                            <input type="radio" id="star4" name="rating" value="4" class="hidden">
                            <label for="star4"
                                class="text-gray-300 text-3xl cursor-pointer hover:text-yellow-400 transition-colors duration-200">★</label>
                            <input type="radio" id="star5" name="rating" value="5" class="hidden">
                            <label for="star5"
                                class="text-gray-300 text-3xl cursor-pointer hover:text-yellow-400 transition-colors duration-200">★</label>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Klik bintang untuk memberi rating.</p>
                    </div>


                    <div>
                        <label for="review-review" class="block text-sm font-medium text-gray-700 mb-2">Tulis Review
                            Anda</label>
                        <textarea id="review-text" name="review" rows="5" placeholder="Bagaimana pengalaman Anda?"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-sky-500 focus:border-sky-500">{{ old('review') }}</textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-sky-600 text-white py-3 px-4 rounded-md hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 transition duration-300">
                        Kirim Review
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!--End Review Form Section-->

    <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50" data-aos="zoom-in" data-aos-delay="1000">
        <a href="https://wa.me/6281234567890"
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


                    <p class="text-gray-400 text-balance">Professional bore well drilling services in Tabanan, Bali
                        since 2010. Providing reliable water solutions for residential and commercial properties.
                    </p>
                </div>
                <div
                    class="flex flex-col md:flex-row justify-end w-full md:w-2/3 space-y-6 md:space-y-0 md:space-x-8 mt-10 md:mt-0">
                    <div>
                        <h4 class="text-lg font-semibold text-white mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li><a href="#home" class="text-gray-400 hover:text-sky-400 transition">Home</a>
                            </li>
                            <li><a href="#profile" class="text-gray-400 hover:text-sky-400 transition">Company
                                    Profile</a></li>
                            <li><a href="#services" class="text-gray-400 hover:text-sky-400 transition">Services</a>
                            </li>
                            <li><a href="#projects" class="text-gray-400 hover:text-sky-400 transition">Projects</a>
                            </li>
                            <li><a href="#contact" class="text-gray-400 hover:text-sky-400 transition">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-white mb-4">Services</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-sky-400 transition">Bore Well
                                    Drilling</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-sky-400 transition">Pump
                                    Installation</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-sky-400 transition">Water
                                    Testing</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-sky-400 transition">Maintenance</a>
                            </li>
                            <li><a href="#" class="text-gray-400 hover:text-sky-400 transition">Geological
                                    Survey</a></li>
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
        document.addEventListener('DOMContentLoaded', function() {
            const starContainer = document.getElementById('star-rating-container');
            const stars = starContainer.querySelectorAll(
                'label[for^="star"]'); // Lebih spesifik memilih label bintang
            const radioButtons = starContainer.querySelectorAll('input[name="rating"]');

            stars.forEach((starLabel, index) => {
                starLabel.addEventListener('click', () => {
                    // Set radio button yang sesuai sebagai checked
                    radioButtons[index].checked = true;

                    // Hapus kelas 'text-yellow-400' dari semua bintang
                    stars.forEach(s => s.classList.remove('text-yellow-400'));

                    // Tambahkan kelas 'text-yellow-400' ke bintang yang diklik dan semua bintang sebelumnya
                    for (let i = 0; i <= index; i++) {
                        stars[i].classList.add('text-yellow-400');
                    }
                });
            });

            // Bagian ini opsional: untuk menampilkan rating awal jika ada radio button yang sudah terpilih
            // Misalnya, jika Anda mengisi form untuk mengedit review yang sudah ada
            radioButtons.forEach((radio, index) => {
                if (radio.checked) {
                    for (let i = 0; i <= index; i++) {
                        stars[i].classList.add('text-yellow-400');
                    }
                }
            });
        });
    </script>
</x-home-layout>
