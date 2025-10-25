@extends('admin.layout.app')

@section('title', 'Daftar Partner')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"></h1>

    {{-- Tombol Tambah --}}
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('admin.partners.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Partner
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama Partner</th>
                            <th class="text-center">Logo</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($partners as $partner)
                        <tr class="align-middle">
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $partner->name }}</td>
                            <td class="text-center">
                                @if($partner->image)
                                    {{-- REVISI DILAKUKAN DI BARIS INI: Mengganti 'storage/' dengan 'partners/' --}}
                                    <img src="{{ asset('partners/' . $partner->image) }}"
                                        alt="{{ $partner->name }}"
                                        style="max-width: 100px; max-height: 50px; object-fit: contain;">
                                @else
                                    <span class="text-muted">Tidak ada logo</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <span class="badge bg-{{ $partner->is_active ? 'success' : 'secondary' }}">
                                    {{ $partner->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.partners.edit', $partner) }}" class="btn btn-sm btn-warning me-2">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('admin.partners.destroy', $partner) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus partner ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada data partner.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $partners->links() }}
            </div>
        </div>
    </div>
</div>

@endsection