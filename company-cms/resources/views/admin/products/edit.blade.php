@extends('admin.layout.app')

@section('title', 'Edit Produk: ' . $product->name)

@section('content')
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('admin.products._form', ['product' => $product])
        </form>
    </div>
</div>
@endsection