@extends('client.layout.app')

@section('title', 'Custom Software Development')

@section('content')
    <div class="bg-white py-16 md:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <span class="text-sm font-bold uppercase text-blue-600 tracking-widest">Solusi Inti GenZys</span>
                <h1 class="text-5xl font-extrabold text-gray-900 mt-2 leading-tight">
                    Custom Software Development
                </h1>
                <p class="text-xl text-gray-600 mt-4">
                    Menciptakan solusi perangkat lunak yang dirancang dan dibangun khusus untuk memenuhi kebutuhan bisnis Anda yang unik, bukan sekadar menggunakan template.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                {{-- Ilustrasi/Gambar --}}
                <div class="order-2 md:order-1">
                    <img src="https://placehold.co/600x400/1D4ED8/FFFFFF?text=Pengembangan+Khusus" alt="Custom Software Development" class="rounded-2xl shadow-2xl transform hover:scale-[1.01] transition-transform duration-500">
                </div>

                {{-- Konten Utama --}}
                <div class="order-1 md:order-2 space-y-8">
                    <div class="space-y-4">
                        <h2 class="text-3xl font-bold text-gray-900">Mengapa Perlu Software Kustom?</h2>
                        <p class="text-gray-700 leading-relaxed">
                            Software off-the-shelf sering kali membatasi potensi Anda. Kami merancang sistem yang sepenuhnya terintegrasi dengan alur kerja (workflow) unik perusahaan Anda, menghasilkan efisiensi, dan memberikan keunggulan kompetitif yang nyata.
                        </p>
                    </div>

                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-3 mt-1 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.24a9 9 0 010 13.48"></path></svg>
                            <span>Integrasi Sistem: Sinkronisasi data antar sistem lama dan baru tanpa hambatan.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-3 mt-1 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.24a9 9 0 010 13.48"></path></svg>
                            <span>Skalabilitas: Dibangun dengan teknologi modern yang siap menangani pertumbuhan perusahaan Anda di masa depan.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-3 mt-1 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.24a9 9 0 010 13.48"></path></svg>
                            <span>Keamanan Data: Protokol keamanan tingkat tinggi dan audit teratur.</span>
                        </li>
                    </ul>

                    {{-- CTA --}}
                    <div class="pt-6 border-t border-gray-100">
                        <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-blue-700 text-white font-bold py-3.5 px-8 rounded-full shadow-lg hover:bg-blue-800 transition duration-300">
                            Mulai Konsultasi Proyek Anda
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
