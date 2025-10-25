@extends('admin.layout.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Produk</a>
</div>

<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            {{-- Tambahkan kelas text-center pada elemen <table> --}}
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            {{-- Nama Produk (kolom ke-2) mungkin lebih baik tetap rata kiri agar mudah dibaca --}}
                            <td class="text-start">{{ $product->name }}</td> 
                            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td>
                                <span class="badge bg-{{ $product->is_active ? 'success' : 'secondary' }}">
                                    {{ $product->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-warning me-2"><i class="bi bi-pencil-square"></i> Edit</a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada data produk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection