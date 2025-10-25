@extends('client.layout.app')

@section('content')

    <section class="max-w-7xl mx-auto py-16 px-4">

        {{-- 1. HEADER SECTION --}}
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-3 text-gray-900">
                Mari Kita Mulai Proyek Anda
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Kami siap mewujudkan visi digital Anda. Silakan hubungi kami melalui formulir atau kontak di bawah ini.
            </p>
        </div>

        {{-- 2. LAYOUT UTAMA: INFORMASI KONTAK (Kiri) & FORMULIR (Kanan) --}}
        {{-- Gunakan grid 1 kolom untuk mobile, dan 3 kolom untuk desktop (1 kolom untuk kontak, 2 kolom untuk form) --}}
        {{-- Kita menggunakan 'lg:order-last' pada form untuk membalik urutan di desktop (agar Kontak di Kiri) --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            {{-- KOLOM KIRI (1/3 Lebar di Desktop): INFORMASI KONTAK (Disusun Vertikal) --}}
            <div class="lg:col-span-1 space-y-6 lg:order-first" data-aos="fade-right" data-aos-delay="150">
                <h3 class="text-2xl font-bold mb-4 text-gray-800 lg:text-left text-center">Informasi Kontak</h3>

                {{-- Card 1: Telepon --}}
                <div class="p-6 bg-white rounded-xl shadow-lg border-l-4 border-blue-500 hover:shadow-xl transition transform hover:translate-x-1">
                    <div class="flex items-center space-x-4">
                        <div class="text-blue-600 text-3xl flex-shrink-0">📞</div>
                        <div>   
                            <h4 class="text-lg font-bold text-gray-800">Telepon Kami</h4>
                            <p class="text-gray-600 text-sm">Senin - Jumat, 09:00 - 17:00 WIB</p>
                            <a href="tel:+6281234567890" class="text-blue-600 font-semibold text-sm hover:text-blue-700 transition">
                                (+62) 812-3456-7890
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Card 2: Email --}}
                <div class="p-6 bg-white rounded-xl shadow-lg border-l-4 border-teal-500 hover:shadow-xl transition transform hover:translate-x-1">
                    <div class="flex items-center space-x-4">
                        <div class="text-teal-600 text-3xl flex-shrink-0">📧</div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800">Kirim Email</h4>
                            <p class="text-gray-600 text-sm">Respon dalam 1x24 jam kerja</p>
                            <a href="mailto:halo@genzys.com" class="text-teal-600 font-semibold text-sm hover:text-teal-700 transition">
                                halo@genzys.com
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Card 3: Lokasi --}}
                <div class="p-6 bg-white rounded-xl shadow-lg border-l-4 border-amber-500 hover:shadow-xl transition transform hover:translate-x-1">
                    <div class="flex items-center space-x-4">
                        <div class="text-amber-600 text-3xl flex-shrink-0">📍</div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800">Kunjungi Kami</h4>
                            <p class="text-gray-600 text-sm">Kantor Pusat GenZys, Jakarta Selatan</p>
                            <a href="#" target="_blank" class="text-amber-600 font-semibold text-sm hover:text-amber-700 transition">
                                Lihat di Google Maps
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            {{-- KOLOM KANAN (2/3 Lebar di Desktop): FORMULIR KONTAK --}}
            <div class="lg:col-span-2 bg-white p-6 md:p-10 rounded-2xl shadow-2xl border border-gray-100 lg:order-last" data-aos="fade-left"
                data-aos-delay="400">
                <h3 class="text-2xl font-bold mb-8 text-gray-800">Kirim Pesan Langsung</h3>

                <form action="#" method="POST" class="space-y-6">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Nama Lengkap --}}
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap *</label>
                            <input type="text" id="name" name="name" placeholder="Budi Santoso" required
                                class="w-full border-gray-300 rounded-lg px-4 py-3 border focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition">
                        </div>

                        {{-- Email Anda --}}
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email *</label>
                            <input type="email" id="email" name="email" placeholder="contoh@perusahaan.com" required
                                class="w-full border-gray-300 rounded-lg px-4 py-3 border focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition">
                        </div>
                    </div>

                    {{-- Subjek --}}
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek Pesan</label>
                        <input type="text" id="subject" name="subject" placeholder="Contoh: Permintaan Penawaran Proyek Baru"
                            class="w-full border-gray-300 rounded-lg px-4 py-3 border focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition">
                    </div>

                    {{-- Pesan Anda --}}
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Detail Proyek/Pesan *</label>
                        <textarea id="message" name="message" rows="5"
                            placeholder="Jelaskan kebutuhan Anda secara singkat dan jelas..." required
                            class="w-full border-gray-300 rounded-lg px-4 py-3 border focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition"></textarea>
                    </div>

                    {{-- Tombol Kirim --}}
                    <button type="submit"
                        class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg shadow-lg hover:bg-blue-700 transition transform hover:scale-[1.005] focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>

        </div>

    </section>
@endsection
