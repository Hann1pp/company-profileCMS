@extends('client.layout.app')

@section('content')
<h2 class="text-3xl font-bold mb-4 text-center">Blog</h2>
<p class="mb-10 text-center text-gray-600">Artikel terbaru seputar teknologi dan inovasi digital.</p>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Tren Teknologi 2025</h3>
        <p class="text-gray-600">Prediksi perkembangan teknologi yang akan mengubah dunia bisnis.</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Tips Membuat Website Modern</h3>
        <p class="text-gray-600">Panduan membuat website yang responsif dan user-friendly.</p>
    </div>
</div>
@endsection
