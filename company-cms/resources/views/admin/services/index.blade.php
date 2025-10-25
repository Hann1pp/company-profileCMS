@extends('admin.layout.app') {{-- Pastikan path layout Anda benar --}}

@section('title', 'Manajemen Layanan')

@section('content')

<div class="container-fluid">
    {{-- Header Halaman --}}
    <h1 class="h3 mb-4 text-gray-800"></h1>

    {{-- Notifikasi Sukses/Error --}}
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ Session::get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Layanan</h6>
            {{-- Tombol Tambah --}}
            <a href="{{ route('admin.services.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Layanan
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Judul Layanan</th>
                            <th class="text-center">Deskripsi Singkat</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Perulangan Data Layanan --}}
                        @forelse($services as $service)
                        {{-- Tambahkan align-middle untuk pemusatan vertikal di seluruh baris --}}
                        <tr class="align-middle">
                            <td class="text-center">{{ $service->id }}</td>
                            <td>{{ $service->title }}</td>
                            {{-- Menggunakan Str::limit untuk membatasi karakter dan memusatkan --}}
                            <td class="text-center">{{ Str::limit($service->description, 50) }}</td> 
                            {{-- REVISI KOLOM STATUS: MENJADI DINAMIS SEPERTI PARTNER --}}
                            <td class="text-center">
                                <span class="badge bg-{{ $service->is_active ? 'success' : 'secondary' }}">
                                    {{ $service->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                </span>
                            </td>
                            {{-- AKHIR REVISI KOLOM STATUS --}}
                            
                            <td class="text-center">
                                
                                {{-- Tombol Edit --}}
                                <a href="{{ route('admin.services.edit', $service->id) }}" 
                                   class="btn btn-warning btn-sm me-1" 
                                   title="Edit">
                                   <i class="fas fa-edit"></i> Edit
                                </a>

                                {{-- Tombol Hapus --}}
                                <form action="{{ route('admin.services.destroy', $service->id) }}" 
                                      method="POST" 
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-danger btn-sm" 
                                            onclick="return confirm('Yakin ingin menghapus layanan ini?')"
                                            title="Hapus">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr class="align-middle">
                            <td colspan="5" class="text-center">Belum ada layanan yang ditambahkan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
