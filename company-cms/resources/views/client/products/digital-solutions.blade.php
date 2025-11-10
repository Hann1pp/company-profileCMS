@extends('client.layout.app')

@section('title', 'Enterprise Digital Solutions')

@section('content')
<section class="max-w-7xl mx-auto py-16 px-6">

    {{-- Breadcrumb --}}
    <nav class="text-sm text-gray-500 mb-8" data-aos="fade-right">
        <a href="{{ url('/') }}" class="hover:text-blue-600">Home</a>
        <span class="mx-2">/</span>
        <a href="{{ url('/product') }}" class="hover:text-blue-600">Product</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800 font-semibold">Enterprise Digital Solutions</span>
    </nav>

    {{-- Header Section --}}
    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-8 mb-16" data-aos="fade-up">
        <div class="flex-1">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">
                Enterprise Digital Solutions
            </h1>
            <ul class="text-lg text-gray-700 space-y-2">
                <li>📱 Mobile & Field Applications</li>
                <li>📊 ERP & Tracking System → Transactional Tracking System</li>
                <li>🧍‍♂️ HR & Health Management → Employee Management & Health Monitoring System</li>
                <li>📦 Procurement & Vendor Management → Sistem pendataan vendor dengan workflow approval</li>
                <li>📣 Marketing Automation → Autocampaign Management System</li>
                <li>📸 Absensi Geotagging dengan Face Recognition → Absensi presisi berbasis lokasi & wajah</li>
                <li>🚗 Carpooling System → Mengoptimalkan perjalanan karyawan dengan rute efisien</li>
                <li>🗂️ Sales Canvasing → Monitoring tim sales lapangan & pendataan calon pelanggan</li>
                <li>📋 Asset Management System → Pengelolaan aset efisien & mudah dipantau</li>
                <li>🌐 genzys.co.id</li>
            </ul>
        </div>

        {{-- Kartu Total Produk --}}
        <div class="bg-white shadow-lg rounded-2xl p-6 text-center w-full sm:w-64 lg:w-72 relative" data-aos="fade-left">
            <img src="https://via.placeholder.com/300x180?text=Enterprise+Digital+Solutions" 
                alt="Enterprise Digital Solutions" 
                class="rounded-xl mb-6 w-full object-cover shadow-sm">
            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 bg-white rounded-xl shadow-lg px-4 py-2">
                <p class="text-gray-600 text-sm">Total Produk</p>
                <p class="text-3xl font-bold text-blue-700">5</p>
            </div>
        </div>
    </div>

    {{-- Section Jelajahi Produk --}}
    <div class="text-center max-w-3xl mx-auto mt-24" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">
            Jelajahi Produk Enterprise Digital Solutions
        </h2>
        <p class="text-gray-600 text-lg mb-10">
            Temukan solusi yang paling sesuai dengan kebutuhan Anda dari rangkaian produk kami, 
            mulai dari sistem manajemen perusahaan hingga aplikasi berbasis AI yang inovatif.
        </p>
        <a href="{{ route('contact') }}" 
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-full transition duration-300">
           Hubungi Kami
        </a>
    </div>

</section>
@endsection
