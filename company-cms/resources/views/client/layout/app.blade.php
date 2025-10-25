<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- REVISI 1: Menambahkan default title --}}
    <title>@yield('title', 'GenZys | Company Profile')</title> 

    {{-- Tailwind CSS dari CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    @stack('styles')

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    {{-- STYLE TAMBAHAN UNTUK DROPDOWN (PENTING AGAR MENU BISA MUNCUL SAAT DI-HOVER) --}}
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }
        .dropdown-menu {
            display: none; /* Default tersembunyi */
            opacity: 0;
            transition: all 0.3s ease-in-out;
            transform: translateY(10px);
        }
    </style>

</head>
<body class="bg-gray-50 text-gray-800">
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto max-w-[1140px] flex justify-between items-center py-4 px-6">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">GenZys</a>
            <nav class="flex space-x-6 items-center">
                
                {{-- REVISI 3: Menambahkan class 'active' dan aria-current (Opsional, tergantung styling 'active') --}}
                <a href="{{ route('home') }}" class="hover:text-blue-600 @if(Route::currentRouteName() == 'home') text-blue-600 font-semibold @endif" aria-current="{{ Route::currentRouteName() == 'home' ? 'page' : 'false' }}">Home</a>
                <a href="{{ route('about') }}" class="hover:text-blue-600 @if(Route::currentRouteName() == 'about') text-blue-600 font-semibold @endif" aria-current="{{ Route::currentRouteName() == 'about' ? 'page' : 'false' }}">About</a>
                <a href="{{ route('services') }}" class="hover:text-blue-600 @if(Route::currentRouteName() == 'services') text-blue-600 font-semibold @endif" aria-current="{{ Route::currentRouteName() == 'services' ? 'page' : 'false' }}">Services</a>
                
                {{-- Cek jika rute saat ini adalah salah satu rute produk --}}
                @php
                    $isProductRoute = str_starts_with(Route::currentRouteName(), 'product.');
                @endphp
                
                {{-- DROPDOWN MENU PRODUCT --}}
                <div class="relative dropdown">
                    {{-- Tombol utama Product, aktif jika sedang di halaman salah satu produk --}}
                    <span class="hover:text-blue-600 cursor-pointer flex items-center @if($isProductRoute) text-blue-600 font-semibold @endif" aria-current="{{ $isProductRoute ? 'page' : 'false' }}">
                        Product
                        {{-- Icon panah kecil --}}
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                    {{-- Menu Konten Dropdown --}}
                    <div class="dropdown-menu absolute right-0 mt-3 w-64 bg-white rounded-lg shadow-xl py-2 border border-gray-100 origin-top-right">
                        {{-- Menggunakan class active di item dropdown --}}
                        <a href="{{ route('product.custom.software') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 whitespace-nowrap @if(Route::currentRouteName() == 'product.custom.software') bg-gray-100 font-semibold text-blue-600 @endif">Custom Software Development</a>
                        <a href="{{ route('product.monitoring.solutions') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 whitespace-nowrap @if(Route::currentRouteName() == 'product.monitoring.solutions') bg-gray-100 font-semibold text-blue-600 @endif">Integrated Monitoring Solutions</a>
                        <a href="{{ route('product.digital.solutions') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 whitespace-nowrap @if(Route::currentRouteName() == 'product.digital.solutions') bg-gray-100 font-semibold text-blue-600 @endif">Enterprise Digital Solutions</a>
                        <a href="{{ route('product.infrastructure.services') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 whitespace-nowrap @if(Route::currentRouteName() == 'product.infrastructure.services') bg-gray-100 font-semibold text-blue-600 @endif">Infrastructure & Managed Services</a>
                    </div>
                </div>

                <a href="{{ route('portofolio') }}" class="hover:text-blue-600 @if(Route::currentRouteName() == 'portofolio') text-blue-600 font-semibold @endif" aria-current="{{ Route::currentRouteName() == 'portofolio' ? 'page' : 'false' }}">Portofolio</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-600 @if(Route::currentRouteName() == 'contact') text-blue-600 font-semibold @endif" aria-current="{{ Route::currentRouteName() == 'contact' ? 'page' : 'false' }}">Contact</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto max-w-[1140px] px-6 py-10">
        @yield('content')
    </main>

    <footer class="bg-white text-gray-800 border-t border-gray-200">
    <div class="container mx-auto max-w-[1140px] px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-y-10 gap-x-8">

            {{-- Kolom 1: Logo & Deskripsi --}}
            <div class="lg:col-span-1">
                {{-- REVISI 2: Menghapus ?? '#' --}}
                <a href="{{ route('home') }}" class="mb-4 inline-block">
                    <img 
                        src="{{ asset('images/logo_genzys.png') }}" 
                        alt="GenZys Digital Creatindo Logo" 
                        class="h-10 w-auto" 
                        onerror="this.onerror=null; this.src='https://placehold.co/120x40/0d47a1/ffffff?text=GenZys';"
                    >
                </a>
                
                <p class="text-sm text-gray-600 leading-relaxed max-w-xs">
                    PT GenZys Digital Creatindo adalah perusahaan IT Solutions yang berfokus pada server infrastructure, software integration, dan pengembangan sistem digital.
                </p>
            </div>

            {{-- Kolom 2: Quick Links --}}
            <div>
                <h4 class="font-bold text-lg mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm text-gray-600">
                    {{-- REVISI 2: Menghapus ?? '#' --}}
                    <li><a href="{{ route('home') }}" class="hover:text-blue-600 transition duration-150">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-blue-600 transition duration-150">About</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition duration-150">Product Category</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-blue-600 transition duration-150">Service</a></li>
                    <li><a href="{{ route('portofolio') }}" class="hover:text-blue-600 transition duration-150">Portofolio</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-blue-600 transition duration-150">Project</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Product (Footer) --}}
            <div>
                <h4 class="font-bold text-lg mb-4">Product</h4>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li><a href="{{ route('product.custom.software') }}" class="hover:text-blue-600 transition duration-150">Custom Software Development</a></li>
                    <li><a href="{{ route('product.monitoring.solutions') }}" class="hover:text-blue-600 transition duration-150">Integrated Monitoring Solutions</a></li>
                    <li><a href="{{ route('product.digital.solutions') }}" class="hover:text-blue-600 transition duration-150">Enterprise Digital Solutions</a></li>
                    <li><a href="{{ route('product.infrastructure.services') }}" class="hover:text-blue-600 transition duration-150">Infrastructure & Managed Services</a></li>
                </ul>
            </div>

            {{-- Kolom 4: Contact Us --}}
            <div>
                <h4 class="font-bold text-lg mb-4">Contact Us</h4>
                <div class="space-y-3 text-sm text-gray-600">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <p>Jalan Raya Tapos No. 57 RT 001 RW 011 Tapos, Depok 16457</p>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:hello@genzys.co.id" class="hover:text-blue-600 transition duration-150">hello@genzys.co.id</a>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-11a2 2 0 01-2-2z"></path></svg>
                        <p>+62 852-1310-1722</p>
                    </div>
                </div>
            </div>

            {{-- Kolom 5: Join Our Newsletter --}}
            <div>
                <h4 class="font-bold text-lg mb-4">Join Our Newsletter</h4>
                <p class="text-sm text-gray-600 mb-4">
                    Get the latest news, tips, and special offers directly to your inbox.
                </p>
                <form class="flex">
                    <input type="email" placeholder="Your email address" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <button type="submit" class="bg-blue-600 text-white p-3 rounded-r-lg hover:bg-blue-700 transition duration-150">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    {{-- Copyright Bar & Social Media --}}
    <div class="bg-gray-50 border-t border-gray-100 py-4">
        <div class="container mx-auto max-w-[1140px] px-6 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
            <p class="mb-3 md:mb-0">
                &copy; 2024 PT GenZys Digital Creatindo. All rights reserved.
            </p>
            
            {{-- Social Media Icons --}}
            <div class="flex space-x-4">
                {{-- REVISI 4: Menambahkan target="_blank" dan rel="noopener noreferrer" --}}
                <a href="#" class="text-gray-500 hover:text-blue-600 transition duration-150" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-2c-1.042 0-1.25 0.518-1.25 1.496v1.504h3l-0.51 3h-2.49v7h-3v-7h-2v-3h2v-2.193c0-2.138 1.168-3.807 3.844-3.807h2.156v3z"/></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-blue-600 transition duration-150" aria-label="Twitter" target="_blank" rel="noopener noreferrer">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.795-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-1.989-2.003-5.5-1.004-5.5 3.332 0 .445.048.878.136 1.295-4.708-.238-8.88-2.494-11.674-5.926-.48.827-.756 1.792-.756 2.795 0 1.936.983 3.65 2.475 4.654-.91-.028-1.761-.282-2.505-.693v.041c0 2.91 2.067 5.334 4.814 5.88-.498.135-.1.217-.993.18-.727 1.796-2.825 3.091-5.074 3.091-1.233 0-2.395-.088-3.535-.615.421 1.309 1.638 2.302 3.085 2.331-2.045 1.597-4.634 2.548-7.423 2.548-4.814 0-7.04-1.921-7.04-3.414 0-1.494 2.115-3.414 7.04-3.414 2.79 0 5.378.951 7.423 2.548 1.447-.029 2.664-1.022 3.085-2.331.421 1.309 1.638 2.302 3.085 2.331 1.447-.029 2.664-1.022 3.085-2.331.42-.533 1.637-.615 3.535-.615s4.634.951 7.423 2.548c-2.475 1.004-3.535 2.331-3.535 3.414 0 1.493 2.226 3.414 7.04 3.414 2.79 0 5.378-.951 7.423-2.548 1.447-.029 2.664-1.022 3.085-2.331 1.309.814 2.802 1.36 4.414 1.36 1.493 0 2.985-.546 4.414-1.36z"/></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-blue-600 transition duration-150" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 22h-16c-1.1 0-2-.9-2-2v-16c0-1.1.9-2 2-2h16c1.1 0 2 .9 2 2v16c0 1.1-.9 2-2 2zm-12-11.5v7.5h-3v-7.5h3zm-1.5-3.5c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5zm13.5 3.5v7.5h-3v-3.875c0-2.296-1.517-3.791-3.693-3.791-1.81 0-2.801 1.018-3.297 1.996v1.97h-3v7.5h3v-4.145c0-2.071 1.25-3.855 3.295-3.855 2.045 0 3.295 1.784 3.295 3.855v4.145h3v-5.25c0-3.344-1.748-4.75-4.198-4.75z"/></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-blue-600 transition duration-150" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2c2.614 0 2.946.01 3.998.056 1.053.046 1.597.227 2.052.41 0.708.288 1.233.673 1.838 1.278.605.605.989 1.13 1.277 1.838.183.455.364.999.41 2.052.046 1.052.056 1.384.056 3.998s-.01 2.946-.056 3.998c-.046 1.053-.227 1.597-.41 2.052-0.288 0.708-0.673 1.233-1.278 1.838-0.605 0.605-1.13 0.989-1.838 1.277-0.455 0.183-0.999 0.364-2.052 0.41-1.052 0.046-1.384 0.056-3.998 0.056s-2.946-.01-3.998-.056c-1.053-.046-1.597-.227-2.052-.41-0.708-0.288-1.233-0.673-1.838-1.278-0.605-0.605-1.13-0.989-1.277-1.838-0.183-0.455-0.364-0.999-0.41-2.052-0.046-1.052-0.056-1.384-0.056-3.998s0.01-2.946 0.056-3.998c0.046-1.053 0.227-1.597 0.41-2.052 0.288-0.708 0.673-1.233 1.278-1.838 0.605-0.605 1.13-0.989 1.838-1.277 0.455-0.183 0.999-0.364 2.052-0.41 1.052-0.046 1.384-0.056 3.998-0.056zm0 2c-2.584 0-2.88.01-3.921.055-0.957.042-1.4.218-1.742.365-0.548 0.222-0.89.444-1.222 0.776s-0.554 0.674-0.776 1.222c-0.147 0.342-0.323 0.785-0.365 1.742-0.045 1.041-0.055 1.338-0.055 3.921s0.01 2.88 0.055 3.921c0.042 0.957 0.218 1.4 0.365 1.742 0.222 0.548 0.444 0.89 0.776 1.222s0.674 0.554 1.222 0.776c0.342 0.147 0.785 0.323 1.742 0.365 1.041 0.045 1.338 0.055 3.921 0.055s2.88-.01 3.921-.055c0.957-.042 1.4-.218 1.742-.365 0.548-0.222 0.89-.444 1.222-0.776s0.554-0.674 0.776-1.222c-0.147-0.342-0.323-0.785-0.365-1.742-0.045-1.041-0.055-1.338-0.055-3.921s-.01-2.88-.055-3.921c-.042-0.957-0.218-1.4-.365-1.742-0.222-0.548-0.444-0.89-0.776-1.222s-0.674-0.554-1.222-0.776c-0.342-0.147-0.785-0.323-1.742-0.365-1.041-0.045-1.338-0.055-3.921-0.055zm0 3c3.859 0 7 3.141 7 7s-3.141 7-7 7-7-3.141-7-7 3.141-7 7-7zm0 2c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm6.5-4c0.552 0 1 0.448 1 1s-0.448 1-1 1-1-0.448-1-1 0.448-1 1-1z"/></svg>
                </a>
            </div>
        </div>
    </div>
</footer>

    @stack('scripts') 

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>