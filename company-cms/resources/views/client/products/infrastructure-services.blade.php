@extends('client.layout.app')

@section('title', 'Infrastructure & Managed Services')

@section('content')
    <div class="bg-white p-10 rounded-xl shadow-lg" data-aos="fade-up">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Infrastructure & Managed Services</h1>
        <p class="text-xl text-gray-600 mb-8">Jasa pengelolaan dan optimasi infrastruktur IT (On-premise, Cloud, Hybrid) untuk menjamin stabilitas dan keamanan sistem.</p>
        
        <div class="space-y-6 text-gray-700">
            <p><strong>[Isi Konten di Sini]</strong></p>
            <p>Tekankan layanan seperti Cloud Migration, Network Management, IT Support 24/7, dan Keamanan Siber (Cyber Security).</p>
            <p>Jelaskan model layanan (misalnya, SLA dan respons waktu cepat).</p>
        </div>

        <a href="{{ route('contact') }}" class="mt-8 inline-block bg-blue-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-blue-700 transition duration-300">Lihat Paket Layanan</a>
    </div>
@endsection
