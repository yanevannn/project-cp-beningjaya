<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Profile | Bening jaya</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="assets/css/aos.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body class="font-sans bg-gray-50">
    {{ $slot }}
    <!--AOS Animation Library-->
    {{-- <script src="assets/js/aos.js"></script> --}}
    <script>
        AOS.init();
    </script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mendapatkan referensi elemen HTML
            const youtubeThumbnail = document.getElementById('youtubeThumbnail');
            const playOverlay = document.getElementById('playOverlay');
            const videoModal = document.getElementById('videoModal');
            const modalContent = document.getElementById('modalContent');
            const closeModal = document.getElementById('closeModal');
            const youtubePlayer = document.getElementById('youtubePlayer');
    
            // ID video YouTube yang akan diputar
            // Ini adalah ID dari URL: https://youtu.be/qOCQwtW0h_k?si=dRERNaSi2Sg1GSl1
            //https://youtu.be/8c_Q8eXi468?si=GVr68nsD-f9X0NN4
            const videoId = '8c_Q8eXi468'; 
            
            // Memastikan URL thumbnail sesuai dengan video ID
            const thumbnailUrl = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;
            youtubeThumbnail.src = thumbnailUrl;
    
            // Fungsi untuk membuka modal
            function openModal() {
                // Menghilangkan kelas untuk menyembunyikan modal dan menambahkan kelas untuk menampilkannya
                videoModal.classList.remove('opacity-0', 'pointer-events-none');
                videoModal.classList.add('opacity-100');
                
                // Menghilangkan kelas untuk efek transisi masuk konten modal
                modalContent.classList.remove('-translate-y-4', 'opacity-0');
                modalContent.classList.add('translate-y-0', 'opacity-100');
                
                // Memuat video YouTube dengan autoplay
                youtubePlayer.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            }
    
            // Fungsi untuk menutup modal
            function closeModalFn() {
                // Membalikkan kelas untuk efek transisi keluar konten modal
                modalContent.classList.remove('translate-y-0', 'opacity-100');
                modalContent.classList.add('-translate-y-4', 'opacity-0');
                
                // Membalikkan kelas untuk efek transisi keluar latar belakang modal
                videoModal.classList.remove('opacity-100');
                videoModal.classList.add('opacity-0');
                
                // Menggunakan setTimeout untuk menunggu transisi selesai sebelum menyembunyikan sepenuhnya
                // dan menghentikan video agar tidak terus berputar di latar belakang
                setTimeout(() => {
                    videoModal.classList.add('pointer-events-none'); // Membuat modal tidak bisa diklik lagi
                    youtubePlayer.src = ''; // Mengosongkan src iframe untuk menghentikan video
                }, 300); // Durasi ini harus sesuai dengan 'duration-300' di kelas Tailwind CSS
            }
    
            // Menambahkan event listener ke thumbnail dan overlay untuk membuka modal
            [youtubeThumbnail, playOverlay].forEach(element => {
                element.addEventListener('click', openModal);
            });
    
            // Menambahkan event listener ke tombol tutup modal
            closeModal.addEventListener('click', closeModalFn);
    
            // Menambahkan event listener ke latar belakang modal (klik di luar konten) untuk menutup modal
            videoModal.addEventListener('click', function(event) {
                if (event.target === videoModal) { // Pastikan klik terjadi pada latar belakang modal, bukan pada konten di dalamnya
                    closeModalFn();
                }
            });
        });
    </script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            slidesPerView: 1,
            spaceBetween: 24,

            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 32,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },

            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
        });
    </script>

</body>

</html>
