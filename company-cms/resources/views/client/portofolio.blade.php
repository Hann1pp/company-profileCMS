@extends('client.layout.app')

@section('title', 'Portofolio Kami')

@section('content')

<section class="py-16 sm:py-24 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header Section --}}
        <div class="text-center mb-16">
            <span class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                Proyek Unggulan
            </span>
            <h2 class="mt-2 text-4xl sm:text-5xl font-extrabold text-gray-900">
                Portofolio Karya <span class="text-blue-600">Terbaik</span> Kami
            </h2>
            <p class="mt-4 text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto">
                Beberapa karya terbaik yang kami hasilkan untuk berbagai industri — menampilkan solusi digital inovatif
                yang membantu klien mengatasi tantangan bisnis mereka.
            </p>
        </div>

        {{-- List Project --}}
        <div class="space-y-12">

            @forelse ($projects as $project)
                @php
                    // URL Detail Project
                    $projectDetailUrl = $project->slug
                        ? route('portofolio.show', $project->slug)
                        : '#';

                    // Tombol bisa diklik hanya jika slug ada
                    $isClickable = !empty($project->slug);

                    // Gambar (fallback jika null)
                    $imageUrl = $project->thumbnail
                        ? asset('storage/' . $project->thumbnail)
                        : 'https://placehold.co/800x450/e0e0e0/555555?text=NO+IMAGE';

                    // Warna label status
                    $statusClass = match ($project->status) {
                        'Unggulan' => 'bg-yellow-500',
                        'Regular' => 'bg-green-500',
                        default => 'bg-gray-400',
                    };
                @endphp

                {{-- Card Project --}}
                <div
                    class="flex flex-col lg:flex-row bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition duration-500 group">

                    {{-- Gambar Project --}}
                    <div class="lg:w-2/5 p-4 flex-shrink-0">
                        <img src="{{ $imageUrl }}"
                             alt="{{ $project->title }}"
                             class="w-full h-auto object-cover rounded-lg transform transition duration-500 group-hover:scale-[1.03] shadow-lg aspect-video"
                             onerror="this.onerror=null; this.src='https://placehold.co/800x450/e0e0e0/555555?text=Image+Error';">
                    </div>

                    {{-- Informasi Project --}}
                    <div class="lg:w-3/5 p-6 lg:p-10">

                        {{-- Status & Kategori --}}
                        <div class="flex items-center space-x-3 mb-2">
                            <span
                                class="text-xs font-bold uppercase tracking-wider text-white {{ $statusClass }} px-3 py-1 rounded-full">
                                {{ $project->status }}
                            </span>
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-500">
                                {{ $project->category ?? 'Digital Solutions' }}
                            </span>
                        </div>

                        {{-- Judul --}}
                        <a href="{{ $isClickable ? $projectDetailUrl : '#' }}"
                           class="{{ $isClickable ? 'hover:text-blue-600 transition' : 'pointer-events-none' }}">
                            <h2
                                class="text-3xl font-bold text-gray-900 mt-1 mb-4 {{ $isClickable ? 'group-hover:text-blue-600 transition' : '' }}">
                                {{ $project->title }}
                            </h2>
                        </a>

                        {{-- Klien & Tahun --}}
                        <p class="text-sm text-gray-500 mb-6 flex flex-wrap gap-2">
                            <span><strong class="text-gray-700">Klien:</strong> {{ $project->client_name ?? 'Klien Rahasia' }}</span>
                            <span>|</span>
                            <span><strong class="text-gray-700">Tahun:</strong> {{ $project->year }}</span>
                        </p>

                        {{-- Deskripsi Singkat --}}
                        <div class="text-gray-600 leading-relaxed mb-6">
                            {!! \Illuminate\Support\Str::limit(strip_tags($project->description), 250, '...') !!}
                        </div>

                        {{-- Tombol Lihat Detail --}}
                        <a href="{{ $isClickable ? $projectDetailUrl : '#' }}"
                           class="inline-block px-6 py-2 rounded-lg font-semibold transition duration-300 
                           {{ $isClickable ? 'text-white bg-blue-600 hover:bg-blue-700' : 'text-gray-400 bg-gray-200 cursor-not-allowed' }}">
                            {{ $isClickable ? 'Lihat Detail →' : 'Slug Tidak Ditemukan' }}
                        </a>

                        {{-- Pesan jika slug kosong --}}
                        @unless ($isClickable)
                            <p class="text-xs text-red-500 mt-1">
                                ⚠️ Slug proyek ini belum diatur. Edit proyek di halaman Admin.
                            </p>
                        @endunless

                    </div>
                </div>
            @empty
                {{-- Jika Tidak Ada Project --}}
                <div class="text-center py-12 bg-gray-50 rounded-xl shadow-md">
                    <p class="text-xl text-gray-500 font-medium mb-2">
                        Belum ada proyek yang ditampilkan.
                    </p>
                    <p class="text-md text-gray-400">
                        Silakan tambahkan data proyek melalui halaman Admin.
                    </p>
                </div>
            @endforelse

            {{-- Pagination --}}
            @if ($projects instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="mt-10 flex justify-center">
                    {!! $projects->links() !!}
                </div>
            @endif
        </div>

        {{-- Tombol Kembali ke Beranda --}}
        <div class="text-center mt-20">
            <a href="{{ route('home') }}"
               class="inline-block px-8 py-3 bg-gray-800 text-white rounded-lg font-semibold hover:bg-gray-900 transition duration-300">
                ← Kembali ke Beranda
            </a>
        </div>

    </div>
</section>

@endsection
