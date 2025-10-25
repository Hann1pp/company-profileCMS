@extends('admin.layout.app')

@section('title', 'Tambah Produk Baru')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
            {{-- PERBAIKAN: Menambahkan token CSRF wajib --}}
            @csrf
            
            {{-- Memuat partial form --}}
            @include('admin.partners._form')
        </form>
    </div>
</div>
@endsection
