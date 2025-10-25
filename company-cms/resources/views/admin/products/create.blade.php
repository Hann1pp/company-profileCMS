@extends('admin.layout.app')

@section('title', 'Tambah Produk Baru')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @include('admin.products._form')
        </form>
    </div>
</div>
@endsection