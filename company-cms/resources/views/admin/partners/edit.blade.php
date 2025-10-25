@extends('admin.layout.app')

{{-- Perbaikan 1: Ganti $partners menjadi $partner --}}
@section('title', 'Edit Produk: ' . $partner->name)

@section('content')
<div class="card shadow">
    <div class="card-body">
        {{-- Perbaikan 2: Ganti $partners menjadi $partner pada route update --}}
        <form action="{{ route('admin.partners.update', $partner) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            {{-- Perbaikan 3: Ganti $partners menjadi $partner saat mengirim data ke _form --}}
            {{-- Perhatian: Di dalam array, kunci (key) tetap 'partner' (sesuai nama variabel yang diharapkan oleh _form) --}}
            @include('admin.partners._form', ['partner' => $partner])
        </form>
    </div>
</div>
@endsection
