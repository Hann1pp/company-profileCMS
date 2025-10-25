@extends('client.layout.app')

@section('title', 'Enterprise Digital Solutions')

@section('content')
    <div class="bg-white p-10 rounded-xl shadow-lg" data-aos="fade-up">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Enterprise Digital Solutions</h1>
        <p class="text-xl text-gray-600 mb-8">Transformasi operasional perusahaan Anda melalui platform dan sistem digital berskala enterprise.</p>
        
        <div class="space-y-6 text-gray-700">
            <p><strong>[Isi Konten di Sini]</strong></p>
            <p>Fokus pada solusi besar seperti ERP, CRM, atau sistem manajemen dokumen digital yang dibuat khusus untuk korporasi besar.</p>
            <p>Tampilkan kasus penggunaan spesifik untuk industri tertentu (misalnya, Manufaktur atau Keuangan).</p>
        </div>

        <a href="{{ route('contact') }}" class="mt-8 inline-block bg-blue-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-blue-700 transition duration-300">Jelajahi Solusi Enterprise</a>
    </div>
@endsection
