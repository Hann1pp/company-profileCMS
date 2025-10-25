@extends('client.layout.app')

@section('title', 'Integrated Monitoring Solutions')

@section('content')
    <div class="bg-white p-10 rounded-xl shadow-lg" data-aos="fade-up">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Integrated Monitoring Solutions</h1>
        <p class="text-xl text-gray-600 mb-8">Solusi terpadu untuk memantau performa dan kesehatan seluruh infrastruktur serta aplikasi Anda secara real-time.</p>
        
        <div class="space-y-6 text-gray-700">
            <p><strong>[Isi Konten di Sini]</strong></p>
            <p>Jelaskan manfaat utama, fitur-fitur, dan teknologi yang digunakan dalam solusi monitoring Anda. Misalnya: pemantauan server, jaringan, aplikasi, hingga pengalaman pengguna (UX monitoring).</p>
            <p>Gunakan tag `data-aos="fade-up"` pada setiap elemen utama untuk efek animasi saat scroll.</p>
        </div>

        <a href="{{ route('contact') }}" class="mt-8 inline-block bg-blue-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-blue-700 transition duration-300">Hubungi untuk Demo</a>
    </div>
@endsection
