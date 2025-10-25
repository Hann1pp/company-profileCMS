@extends('client.layout.app')

@section('content')

<!-- HEADER HERO SECTION - Lebih Dramatis dan Modern -->
<section class="bg-gradient-to-br from-blue-900 to-indigo-900 text-white pt-32 pb-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Badge -->
        <span class="inline-flex items-center rounded-full bg-blue-500/20 px-3 py-1 text-sm font-medium text-blue-300 ring-1 ring-inset ring-blue-500/50 mb-4">
            Transformasi Digital End-to-End
        </span>
        <h1 class="text-5xl sm:text-7xl font-extrabold tracking-tight leading-tight">
            Menghadirkan Inovasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Teknologi</span>
        </h1>
        <p class="mt-6 text-xl sm:text-2xl text-gray-300 max-w-5xl mx-auto opacity-90">
            Solusi digital terintegrasi yang dirancang untuk **skalabilitas** dan **efisiensi**, membantu bisnis Anda mencapai level kinerja baru.
        </p>
        <div class="mt-12">
            <a href="#layanan" class="group relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-lg font-bold text-gray-900 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 hover:text-white transition duration-300 transform hover:scale-105 shadow-lg shadow-blue-500/50">
                <span class="relative px-8 py-3.5 transition-all ease-in duration-75 bg-gray-50 rounded-full group-hover:bg-opacity-0 text-blue-900 group-hover:text-white">
                    Jelajahi Semua Solusi &darr;
                </span>
            </a>
        </div>
    </div>
</section>

<!-- LAYANAN SECTION - Menggunakan desain Card yang lebih ringkas dan visual -->
<section id="layanan" class="py-20 sm:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16">
            <span class="text-base font-semibold uppercase tracking-wider text-blue-600">Apa yang Kami Tawarkan</span>
            <h2 class="mt-2 text-4xl sm:text-5xl font-extrabold text-gray-900">
                Solusi Unggulan Kami
            </h2>
            <p class="mt-4 text-lg text-gray-600 max-w-4xl mx-auto">
                Setiap layanan kami didukung oleh produk-produk spesifik yang teruji dan siap diimplementasikan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1: Enterprise Digital Solutions -->
            <div class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-200 transition duration-500 transform hover:shadow-2xl hover:border-blue-500 hover:bg-white/90">
                <!-- Ikon baru: Menggunakan ikon yang lebih tebal/berisi -->
                <div class="p-4 w-max rounded-xl bg-blue-600 text-white mb-6 transition duration-300 shadow-lg shadow-blue-500/50 group-hover:bg-blue-700">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 6a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10.5 18a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10.5 12a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM19.5 6a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM19.5 18a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM19.5 12a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM4.5 6a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM4.5 18a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM4.5 12a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition duration-300">
                    Enterprise Digital Solutions
                </h3>
                <p class="text-gray-600 leading-normal text-base">
                    Solusi terintegrasi untuk mengoptimalkan proses bisnis inti perusahaan Anda.
                </p>

                <!-- Daftar Produk/Fitur Utama dalam bentuk Grid Visual -->
                <div class="mt-5 space-y-3">
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> ERP & Tracking System</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> HR & Health Management</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Procurement & Vendor Mgt.</span>
                </div>

                <!-- Link yang mengarahkan ke halaman Produk/Solutions -->
                <a href="/product"
                    class="mt-6 inline-flex items-center text-blue-600 font-bold group-hover:text-blue-700 transition duration-300">
                    Lihat Produk Terkait
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Card 2: Mobile & Field Applications -->
            <div class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-200 transition duration-500 transform hover:shadow-2xl hover:border-blue-500 hover:bg-white/90">
                <div class="p-4 w-max rounded-xl bg-blue-600 text-white mb-6 transition duration-300 shadow-lg shadow-blue-500/50 group-hover:bg-blue-700">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 6h3m-3 6h3m-3 2.25h3" />
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition duration-300">
                    Mobile & Field Applications
                </h3>
                <p class="text-gray-600 leading-normal text-base">
                    Aplikasi mobile untuk meningkatkan produktivitas tim lapangan dan efisiensi operasional.
                </p>

                <!-- Daftar Produk/Fitur Utama dalam bentuk Grid Visual -->
                <div class="mt-5 space-y-3">
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Absensi Geotagging</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Sales & Asset Management</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Carpooling System</span>
                </div>

                <a href="/product"
                    class="mt-6 inline-flex items-center text-blue-600 font-bold group-hover:text-blue-700 transition duration-300">
                    Lihat Produk Terkait
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Card 3: Custom Software Development -->
            <div class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-200 transition duration-500 transform hover:shadow-2xl hover:border-blue-500 hover:bg-white/90">
                <div class="p-4 w-max rounded-xl bg-blue-600 text-white mb-6 transition duration-300 shadow-lg shadow-blue-500/50 group-hover:bg-blue-700">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5l4.179-2.25m11.142 4.5-5.571 3m5.571-3L21.75 7.5l-4.179-2.25M18.75 12l-4.179 2.25m4.179-4.5-5.571 3-5.571-3m11.142 4.5L21.75 12l-4.179 2.25M12 21.75V12" />
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition duration-300">
                    Custom Software Development
                </h3>
                <p class="text-gray-600 leading-normal text-base">
                    Membangun aplikasi yang dirancang khusus sesuai kebutuhan unik bisnis Anda (web/mobile/SaaS).
                </p>

                <!-- Daftar Produk/Fitur Utama dalam bentuk Grid Visual -->
                <div class="mt-5 space-y-3">
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Web & Mobile Application</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> SaaS & Platform Digital</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> System Integration & API</span>
                </div>

                <a href="/product"
                    class="mt-6 inline-flex items-center text-blue-600 font-bold group-hover:text-blue-700 transition duration-300">
                    Lihat Produk Terkait
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Card 4: Infrastructure & Managed Services -->
            <!-- Tambahkan lg:col-span-2 agar memenuhi 2 kolom, dan di tengah jika hanya 1 baris (flex, justify-center) -->
            <div class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-200 transition duration-500 transform hover:shadow-2xl hover:border-blue-500 hover:bg-white/90">
                <div class="p-4 w-max rounded-xl bg-blue-600 text-white mb-6 transition duration-300 shadow-lg shadow-blue-500/50 group-hover:bg-blue-700">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18 8.442 5.568a1.5 1.5 0 0 1 2.502-.278l.067.068a1.5 1.5 0 0 0 1.942 0l6.391-4.991a.75.75 0 0 1 1.054.919l-6.391 4.991a1.5 1.5 0 0 0-1.942 0l-.067-.068a1.5 1.5 0 0 1-2.502.278L2.25 18zM19.5 21v-12" />
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition duration-300">
                    Infrastructure & Managed Services
                </h3>
                <p class="text-gray-600 leading-normal text-base">
                    Menyediakan instalasi, konfigurasi, dan pengelolaan infrastruktur IT yang andal (On-Premise & Cloud).
                </p>

                <!-- Daftar Produk/Fitur Utama dalam bentuk Grid Visual -->
                <div class="mt-5 space-y-3">
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Server, Storage, Database Mgt.</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Jaringan & Dokumentasi</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> SLA Managed Service</span>
                </div>

                <a href="/product"
                    class="mt-6 inline-flex items-center text-blue-600 font-bold group-hover:text-blue-700 transition duration-300">
                    Lihat Produk Terkait
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Card 5: Integrated Monitoring Solutions -->
            <div class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-200 transition duration-500 transform hover:shadow-2xl hover:border-blue-500 hover:bg-white/90">
                <div class="p-4 w-max rounded-xl bg-blue-600 text-white mb-6 transition duration-300 shadow-lg shadow-blue-500/50 group-hover:bg-blue-700">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 13.5l6-6m6 0l-6 6M3 13.5l1.5-1.5m16.5 1.5l-1.5-1.5M12 18h.01M12 21h.01M12 3h.01M12 6h.01M6 12h.01M18 12h.01M6 6h.01M18 18h.01M6 18h.01M18 6h.01" />
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition duration-300">
                    Integrated Monitoring Solutions
                </h3>
                <p class="text-gray-600 leading-normal text-base">
                    Solusi pemantauan lingkungan end-to-end untuk industri dan instansi pemerintah.
                </p>

                <!-- Daftar Produk/Fitur Utama dalam bentuk Grid Visual -->
                <div class="mt-5 space-y-3">
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Air & Water Quality (AQMS/WQMS)</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Continuous Emission Monitoring (CEMS)</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Data Interfacing System (DIS)</span>
                </div>

                <a href="/product"
                    class="mt-6 inline-flex items-center text-blue-600 font-bold group-hover:text-blue-700 transition duration-300">
                    Lihat Produk Terkait
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Card 6: Data Acquisition & Processing Solutions -->
            <div class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-200 transition duration-500 transform hover:shadow-2xl hover:border-blue-500 hover:bg-white/90">
                <div class="p-4 w-max rounded-xl bg-blue-600 text-white mb-6 transition duration-300 shadow-lg shadow-blue-500/50 group-hover:bg-blue-700">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 13.5l5.25 5.25m5.25-5.25l5.25-5.25M9.75 6l5.25 5.25m-10.5-5.25l5.25 5.25M3 13.5h18" />
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition duration-300">
                    Data Acquisition & Processing Solutions
                </h3>
                <p class="text-gray-600 leading-normal text-base">
                    Akuisisi, penyimpanan, dan pengolahan data real-time dari berbagai sumber.
                </p>

                <!-- Daftar Produk/Fitur Utama dalam bentuk Grid Visual -->
                <div class="mt-5 space-y-3">
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Data Logger & DAS Mgt.</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Akuisisi Data Sensor/PLC</span>
                    <span class="flex items-center text-sm font-medium text-gray-800"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944c2.568 0 5.034.793 7.087 2.234" /></svg> Pengolahan Data Real-time</span>
                </div>

                <a href="/product"
                    class="mt-6 inline-flex items-center text-blue-600 font-bold group-hover:text-blue-700 transition duration-300">
                    Lihat Produk Terkait
                    <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

        </div>

    </div>
</section>

<!-- CTA SECTION - Diperbarui agar lebih menarik -->
<section class="bg-gradient-to-r from-blue-700 to-cyan-500 py-24">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl sm:text-5xl font-extrabold text-white">
            Siap Mengubah Ide Anda Menjadi Solusi Digital?
        </h2>
        <p class="mt-4 text-xl text-blue-100 max-w-3xl mx-auto">
            Jangan ragu, mari diskusikan kebutuhan Anda dan kami akan merancang solusi terbaik.
        </p>
        <div class="mt-10">
            <a href="/contact" class="inline-block px-12 py-4 text-xl font-bold rounded-full bg-white text-blue-700 shadow-2xl transition duration-300 transform hover:scale-105 hover:bg-gray-100 ring-4 ring-blue-300/50">
                Hubungi Kami Sekarang →
            </a>
        </div>
    </div>
</section>

@endsection
