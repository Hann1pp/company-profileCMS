@extends('client.layout.app')

@section('content')

    <section class="py-16 sm:py-24 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">
                <span class="text-sm font-semibold uppercase tracking-wider text-blue-600">Proyek Unggulan</span>
                <h2 class="mt-2 text-4xl sm:text-5xl font-extrabold text-gray-900">
                    Portofolio Karya <span class="text-blue-600">Terbaik</span> Kami
                </h2>
                <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">
                    Beberapa karya terbaik yang pernah kami buat, menampilkan solusi inovatif untuk tantangan bisnis klien.
                </p>
            </div>

            <div class="space-y-12">
                
                {{-- Mulai Looping data projects dari Controller --}}
                @forelse ($projects as $project)
                    <div
                        class="flex flex-col lg:flex-row bg-white rounded-xl overflow-hidden shadow-xl border border-gray-100 hover:shadow-2xl transition duration-500 group">

                        <div class="lg:w-2/5 p-4 flex-shrink-0">
                            {{-- Pengecekan dan Path Gambar: Ambil path lengkap dari DB --}}
                            @php
                                // Path di database sudah lengkap (misal: 'thumbnails/projects/namafile.ext')
                                // Digabungkan dengan asset('storage/') akan menghasilkan URL yang benar.
                                $imageUrl = $project->thumbnail 
                                    ? asset('storage/' . $project->thumbnail) 
                                    : 'https://placehold.co/800x450/e0e0e0/555555?text=NO+IMAGE';
                            @endphp
                            
                            <img src="{{ $imageUrl }}"
                                alt="{{ $project->title }}"
                                class="w-full h-auto object-cover rounded-lg transform transition duration-500 group-hover:scale-[1.03] shadow-lg aspect-video"
                                {{-- Jika gambar gagal dimuat (misal 404), tampilkan placeholder (fallback) --}}
                                onerror="this.onerror=null; this.src='https://placehold.co/800x450/e0e0e0/555555?text=Image+Error';">
                        </div>

                        <div class="lg:w-3/5 p-6 lg:p-10">
                            {{-- Tampilkan Status/Kategori Proyek --}}
                            <div class="flex items-center space-x-3 mb-2">
                                @php
                                    // Status sesuai dengan logika di ProjectController: Unggulan atau Regular
                                    $statusClass = $project->status == 'Unggulan' ? 'bg-yellow-500' : 'bg-green-500';
                                @endphp
                                <span class="text-xs font-bold uppercase tracking-wider text-white {{ $statusClass }} px-3 py-1 rounded-full">
                                    {{ $project->status }}
                                </span>
                                {{-- Asumsi Anda memiliki kolom 'category' di model Project --}}
                                <span class="text-xs font-semibold uppercase tracking-wider text-gray-500">
                                    {{ $project->category ?? 'Digital Solutions' }} 
                                </span>
                            </div>
                            
                            {{-- Tampilkan Judul Proyek --}}
                            <h2
                                class="text-3xl font-bold text-gray-900 mt-1 mb-4 group-hover:text-blue-600 transition duration-300">
                                {{ $project->title }}
                            </h2>

                            {{-- Tampilkan Klien dan Tahun secara berdampingan --}}
                            <p class="text-sm text-gray-500 mb-6 flex space-x-4">
                                <span><strong class="text-gray-700">Klien:</strong> {{ $project->client_name ?? 'Klien Rahasia' }}</span>
                                <span>|</span>
                                <span><strong class="text-gray-700">Tahun:</strong> {{ $project->year }}</span>
                            </p>

                            <div class="text-gray-600 leading-relaxed mb-6">
                                {{-- Tampilkan deskripsi dengan batasan karakter (300) dan hapus tag HTML --}}
                                {!! \Illuminate\Support\Str::limit(strip_tags($project->description), 300, '...') !!} 
                            </div>

                            {{-- Tombol Detail Studi Kasus --}}
                            <a href="#" {{-- Ganti '#' dengan route detail project jika Anda membuatnya --}}
                                class="inline-block px-6 py-2 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                                Lihat Studi Kasus &rarr;
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-10 bg-gray-50 rounded-xl shadow-lg">
                        <p class="text-xl text-gray-500">Belum ada project yang dipublikasikan dalam portofolio ini.</p>
                        <p class="text-md text-gray-400 mt-2">Silakan tambahkan data Project melalui halaman Admin.</p>
                    </div>
                @endforelse
                {{-- Akhir Looping --}}

                {{-- Tambahkan pagination links di sini jika Anda menggunakan paginate() di PortfolioController --}}
                {{-- @if ($projects instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="mt-10">
                    {!! $projects->links() !!}
                </div>
                @endif --}}
            </div>

        </div>
    </section>

@endsection
