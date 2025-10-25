@extends('client.layout.app')

@section('content')
<main>
    {{-- ================================================================= --}}
    {{-- HERO SECTION --}}
    {{-- ================================================================= --}}
    <section class="relative bg-cover bg-center rounded-xl overflow-hidden shadow-lg"
        {{-- Pertahankan Base64 jika ini adalah gambar statis. Jika Anda memiliki file, gunakan asset(). --}}
        style="background-image: url('data:image/jpeg;base64,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');">

        {{-- Overlay untuk Hero Section (opacity 60, sedikit lebih gelap agar teks lebih kontras) --}}
        <div class="bg-black bg-opacity-60 w-full h-full flex items-center justify-center text-center px-6 py-28">
            <div class="text-white max-w-4xl" data-aos="fade-up">
                <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
                    PT GenZys Digital Creatindo
                </h1>

                <p class="text-lg md:text-xl mb-8 text-gray-200">
                    Semangat muda adalah kekuatan kami dalam melahirkan karya yang **penuh imajinasi, berani, dan berbeda**.
                </p>
                <a href="{{ route('services') }}"
                    class="bg-blue-600 px-8 py-4 rounded-lg font-semibold shadow-2xl hover:bg-blue-700 hover:scale-105 transition transform duration-300">
                    Jelajahi Solusi Kami
                </a>
            </div>
        </div>
    </section>

    {{-- ================================================================= --}}
    {{-- WHY CHOOSE US SECTION --}}
    {{-- ================================================================= --}}
    <section class="mt-20 text-center px-4">
        {{-- Judul dan Deskripsi --}}
        <h2 class="text-3xl md:text-5xl font-extrabold mb-4 text-gray-800" data-aos="fade-up">
            Mengapa Memilih GenZys?
        </h2>
        <p class="max-w-3xl mx-auto text-lg text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
            Kami adalah mitra strategis bagi perusahaan yang ingin bertumbuh. Dengan kombinasi keahlian, teknologi, dan inovasi, kami menghadirkan solusi yang berdampak nyata dan berkelanjutan.
        </p>

        {{-- Grid 3 Kolom untuk Keunggulan --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            {{-- Keunggulan 1: Tim Profesional --}}
            <div class="bg-white p-8 rounded-xl shadow-lg border-b-4 border-blue-600 hover:shadow-2xl transition transform hover:-translate-y-2 duration-300"
                data-aos="zoom-in">
                <div
                    class="text-blue-600 mx-auto w-16 h-16 mb-4 p-3 bg-blue-100 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M7 15c-3.243 0-6 2.333-6 5h12c0-2.667-2.757-5-6-5zM12 9a4 4 0 100 8 4 4 0 000-8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Tim Profesional</h3>
                <p class="text-gray-600">Tim ahli bersertifikat dengan pengalaman luas di bidang teknologi dan inovasi digital, siap mewujudkan visi Anda.</p>
            </div>

            {{-- Keunggulan 2: Inovasi Terbaru --}}
            <div class="bg-white p-8 rounded-xl shadow-lg border-b-4 border-teal-500 transition transform hover:-translate-y-2 duration-300"
                data-aos="zoom-in" data-aos-delay="150">
                <div
                    class="text-teal-500 mx-auto w-16 h-16 mb-4 p-3 bg-teal-100 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Inovasi Terbaru</h3>
                <p class="text-gray-600">Selalu mengikuti dan menerapkan tren teknologi terkini untuk memberikan solusi yang paling efektif dan *future-proof*.</p>
            </div>

            {{-- Keunggulan 3: Layanan Terpercaya --}}
            <div class="bg-white p-8 rounded-xl shadow-lg border-b-4 border-amber-500 transition transform hover:-translate-y-2 duration-300"
                data-aos="zoom-in" data-aos-delay="300">
                <div
                    class="text-amber-500 mx-auto w-16 h-16 mb-4 p-3 bg-amber-100 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.007 12.007 0 002.944 12c.045 4.095 2.14 7.575 5.56 9.175A11.902 11.902 0 0112 21.996c3.42-.095 6.556-1.92 8.612-4.82A12.007 12.007 0 0021.056 12a11.955 11.955 0 01-1.438-5.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Layanan Terpercaya</h3>
                <p class="text-gray-600">Dipercaya oleh klien besar, baik skala nasional maupun internasional, membuktikan kualitas dan komitmen kami.</p>
            </div>
        </div>
    </section>

    ---

    {{-- ================================================================= --}}
    {{-- SOLUTION CATEGORIES SECTION --}}
    {{-- ================================================================= --}}
    <section class="mt-28 text-center px-4">
        {{-- Judul dan Deskripsi --}}
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 text-gray-800" data-aos="fade-up">
            Kategori Solusi Digital Unggulan 🚀
        </h2>
        <p class="text-gray-600 mb-16 max-w-3xl mx-auto text-lg" data-aos="fade-up" data-aos-delay="100">
            Temukan Solusi **VisionAire** kami yang inovatif. Kami memberdayakan bisnis Anda dengan teknologi terbaik untuk mendorong efisiensi dan pertumbuhan di berbagai sektor industri.
        </p>

        {{-- Layout 2x2 Grid dengan penataan card yang lebih menarik --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-[1140px] mx-auto">

            {{-- Card 1: Enterprise Digital Solutions --}}
            <a href="{{ route('services') }}#enterprise" class="block">
                <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-blue-600 transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl text-left"
                    data-aos="zoom-in" data-aos-delay="100">
                    <div class="text-blue-600 text-4xl mb-4">🖥️</div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Enterprise Digital Solutions</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Solusi digital terintegrasi untuk mengoptimalkan operasional perusahaan, manajemen data, dan alur kerja bisnis.
                    </p>
                    <span class="text-blue-600 font-semibold flex items-center group">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                </div>
            </a>

            {{-- Card 2: Custom Software Development --}}
            <a href="{{ route('services') }}#custom-software" class="block">
                <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-teal-500 transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl text-left"
                    data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-teal-500 text-4xl mb-4">💡</div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Custom Software Development</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Pengembangan aplikasi web & mobile, serta sistem khusus yang dirancang sepenuhnya sesuai kebutuhan unik klien.
                    </p>
                    <span class="text-teal-500 font-semibold flex items-center group">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                </div>
            </a>

            {{-- Card 3: Environmental Monitoring Solutions --}}
            <a href="{{ route('services') }}#monitoring" class="block">
                <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-amber-500 transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl text-left"
                    data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-amber-500 text-4xl mb-4">🌳</div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Environmental Monitoring Solutions</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Solusi pemantauan lingkungan *end-to-end* yang akurat untuk industri, instansi pemerintah, dan keberlanjutan.
                    </p>
                    <span class="text-amber-500 font-semibold flex items-center group">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                </div>
            </a>

            {{-- Card 4: Infrastructure & Managed Services --}}
            <a href="{{ route('services') }}#infrastructure" class="block">
                <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-indigo-600 transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl text-left"
                    data-aos="zoom-in" data-aos-delay="400">
                    <div class="text-indigo-600 text-4xl mb-4">⚙️</div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Infrastructure & Managed Services</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Layanan profesional untuk infrastruktur, *cloud*, jaringan, dan manajemen IT agar sistem Anda selalu optimal dan aman.
                    </p>
                    <span class="text-indigo-600 font-semibold flex items-center group">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                </div>
            </a>
        </div>
    </section>

    ---

  {{-- ================================================================= --}}
{{-- LOGO SLIDE / PARTNER CAROUSEL SECTION --}}
{{-- ================================================================= --}}
<section id="marquee-section" class="py-16 bg-white dark:bg-gray-900" data-aos="fade-up">
    <div class="max-w-[1140px] mx-auto px-6">
        <h2 class="text-center text-2xl font-semibold text-gray-800 dark:text-blue-400 mb-8" data-aos="fade-down">
            Our Completed Project & Trusted By
        </h2>

        <div id="marqeetop" class="owl-carousel owl-theme" data-aos-delay="200">
            @foreach ($partners as $partner)
                <div class="item flex justify-center p-2">
                    @if($partner->image)
                        {{-- REVISI KRITIS: HAPUS asset() karena Model::getImageAttribute() sudah mengembalikan FULL URL. --}}
                        <img src="{{ $partner->image }}" alt="{{ $partner->name }}"
                            class="h-24 max-w-full object-contain dark:invert" 
                            onerror="this.onerror=null;this.src='https://placehold.co/150x80/9ca3af/ffffff?text=Logo+Error';"
                        />
                    @else
                        <span class="text-gray-400">No Logo</span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
    {{-- AKHIR LOGO SLIDE --}}

    ---

    {{-- ================================================================= --}}
    {{-- CALL TO ACTION (CTA) SECTION --}}
    {{-- ================================================================= --}}
    <section class="mt-28 relative bg-cover bg-center bg-fixed rounded-xl shadow-xl py-16 px-6 text-center overflow-hidden"
        style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWykYS-_ZsAwUSj028kpLrfyZ8SXJ89BZIIQ&s');"
        data-aos="zoom-in">

        {{-- Overlay gelap transparan untuk CTA agar teks putih tetap terbaca --}}
        <div class="absolute inset-0 bg-gray-900 opacity-70"></div> {{-- Ditingkatkan ke opacity 70 --}}

        {{-- Konten CTA --}}
        <div class="relative z-10 text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Tingkatkan Potensi Bisnis Anda?</h2>
            <p class="max-w-2xl mx-auto mb-8 text-gray-200">
                Mulailah transformasi digital sekarang bersama GenZys. Kami siap membantu Anda di setiap langkah menuju kesuksesan.
            </p>
            <a href="{{ route('contact') }}"
                class="bg-white text-blue-700 font-semibold px-8 py-4 rounded-lg shadow-lg hover:bg-gray-100 hover:scale-105 transition transform duration-300">
                Hubungi Kami Sekarang
            </a>
        </div>
    </section>
</main>
@endsection

@push('styles')
    {{-- Owl Carousel CSS Ditaruh di sini agar terdorong ke dalam <head> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
        
    <style>
        /* CSS tambahan untuk memastikan logo memiliki tinggi yang konsisten dan rapi */
        #marquee-section .owl-carousel .item img {
            max-height: 96px; /* Setara dengan h-24 Tailwind */
            width: auto;
            margin: auto; 
            /* Memberikan sedikit transparansi untuk logo yang tidak aktif */
            opacity: 0.7; 
            transition: opacity 0.3s;
        }
        
        /* Tambahkan efek hover pada logo */
        #marquee-section .owl-carousel .item:hover img {
            opacity: 1;
        }
        
        /* Memperbaiki tampilan Marquee agar lebih mulus */
        .owl-carousel.owl-drag .owl-item {
            /* Mencegah highlight biru saat diklik/di-drag di beberapa browser */
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
@endpush

@push('scripts')
    {{-- WAJIB: jQuery harus dimuat paling awal agar Owl Carousel dapat menginisialisasi --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 

    {{-- Owl Carousel JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inisialisasi Owl Carousel dengan pengaturan untuk efek Marquee (slide terus menerus)
            $("#marqeetop").owlCarousel({
                loop: true,           
                autoplay: true,       
                autoplayTimeout: 1500,  
                autoplayHoverPause: false, // PENTING: Jangan berhenti saat mouse di atas
                smartSpeed: 1000, 
                margin: 30,           
                dots: false,          
                responsive: {           
                    0: { items: 3 }, // Mengurangi items untuk mobile agar tidak terlalu rapat
                    640: { items: 5 }, 
                    1024: { items: 6 }
                }
            });
        });
    </script>
@endpush