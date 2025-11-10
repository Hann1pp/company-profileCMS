@extends('client.layout.app')

@section('content')
<section class="py-16 sm:py-24 bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- HEADER --}}
        <div class="text-center mb-12 bg-white p-8 rounded-xl shadow-lg">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-2">
                {{ $project->title ?? 'Detail Studi Kasus' }}
            </h1>
            <p class="text-xl text-blue-600 font-medium">
                {{ $project->category ?? 'Solusi Digital' }}
            </p>
            <div class="mt-4 text-gray-500 text-sm flex justify-center space-x-4">
                <span>Klien: <strong class="text-gray-700">{{ $project->client_name ?? 'Rahasia' }}</strong></span>
                <span>|</span>
                <span>Tahun: <strong class="text-gray-700">{{ $project->year ?? 'N/A' }}</strong></span>
            </div>
        </div>

        {{-- GAMBAR UTAMA --}}
        @php
            $imageUrl = $project->thumbnail
                ? asset('storage/' . $project->thumbnail)
                : 'https://placehold.co/1200x600/e0e0e0/555555?text=NO+IMAGE';
        @endphp
        <div class="mb-16">
            <img src="{{ $imageUrl }}" 
                alt="Gambar Proyek {{ $project->title ?? '' }}" 
                class="w-full h-auto object-cover rounded-2xl shadow-2xl border-4 border-white aspect-video"
                onerror="this.onerror=null; this.src='https://placehold.co/1200x600/e0e0e0/555555?text=Image+Error';">
        </div>

        {{-- DESKRIPSI DETAIL --}}
        <div class="bg-white p-8 lg:p-12 rounded-xl shadow-2xl">
            <h2 class="text-3xl font-bold text-blue-600 mb-4 border-b pb-2">Ringkasan Proyek</h2>
            <div class="prose max-w-none text-gray-600 leading-relaxed mb-10">
                {!! $project->description ?? '<p class="p-4 bg-blue-50 rounded-lg">Deskripsi proyek belum tersedia.</p>' !!}
            </div>

            <h2 class="text-3xl font-bold text-red-500 mt-10 mb-4 border-b pb-2">Tantangan Klien</h2>
            <div class="prose max-w-none text-gray-600 leading-relaxed mb-10">
                {!! $project->challenge ?? '<p class="p-4 bg-red-50 rounded-lg">Belum ada data tantangan klien.</p>' !!}
            </div>

            <h2 class="text-3xl font-bold text-green-600 mt-10 mb-4 border-b pb-2">Solusi & Implementasi Kami</h2>
            <div class="prose max-w-none text-gray-600 leading-relaxed mb-10">
                {!! $project->solution ?? '<p class="p-4 bg-green-50 rounded-lg">Belum ada data solusi.</p>' !!}
            </div>

            <h2 class="text-3xl font-bold text-purple-600 mt-10 mb-4 border-b pb-2">Hasil dan Dampak Bisnis</h2>
            <div class="prose max-w-none text-gray-600 leading-relaxed mb-10">
                {!! $project->result ?? '<p class="p-4 bg-purple-50 rounded-lg">Belum ada data hasil proyek.</p>' !!}
            </div>

            <h2 class="text-3xl font-bold text-gray-800 mt-10 mb-4 border-b pb-2">Spesifikasi & Teknologi</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <div class="p-3 bg-gray-100 rounded-lg font-medium text-gray-800">Platform: Web App</div>
                <div class="p-3 bg-gray-100 rounded-lg font-medium text-gray-800">Teknologi: Laravel, Vue/React</div>
                <div class="p-3 bg-gray-100 rounded-lg font-medium text-gray-800">Integrasi: API Eksternal</div>
                <div class="p-3 bg-gray-100 rounded-lg font-medium text-gray-800">Status: {{ $project->status ?? 'N/A' }}</div>
            </div>
        </div>

        {{-- PROYEK LAINNYA --}}
        @if ($relatedProjects->count() > 0)
        <div class="mt-20">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">Proyek Lainnya</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($relatedProjects as $related)
                    @php
                        $img = $related->thumbnail
                            ? asset('storage/' . $related->thumbnail)
                            : 'https://placehold.co/400x225/e0e0e0/555555?text=NO+IMAGE';
                    @endphp
                    <a href="{{ route('portofolio.show', $related->slug) }}"
                       class="block bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <img src="{{ $img }}" alt="{{ $related->title }}" class="w-full h-40 object-cover aspect-video">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-900 truncate hover:text-blue-600">{{ $related->title }}</h3>
                            <p class="text-sm text-gray-500 mt-1">{{ $related->client_name ?? 'Klien' }} - {{ $related->year ?? 'Tahun' }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @endif

        {{-- TOMBOL KEMBALI --}}
        <div class="mt-16 text-center">
            {{-- Pastikan nama route sesuai dengan web.php --}}
            <a href="{{ route('portofolio') }}"
               class="inline-flex items-center px-6 py-3 text-base font-medium rounded-md shadow-sm text-white bg-gray-600 hover:bg-gray-700 transition duration-300">
                &larr; Kembali ke Portofolio
            </a>
        </div>
    </div>
</section>
@endsection
