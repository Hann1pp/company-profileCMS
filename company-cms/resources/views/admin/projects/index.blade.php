@extends('admin.layout.app')

@section('title', 'Daftar Projects')

@section('content')
<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Project</a>
</div>

<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 20%;">Thumbnail</th>
                        <th style="width: 30%;">Judul</th>
                        <th style="width: 15%;">Klien/Tahun</th>
                        <th style="width: 15%;">Status</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Perhatikan: $loop->iteration hanya menghitung item pada halaman saat ini.
                        Untuk nomor urut global (melintasi halaman), gunakan: 
                        {{ ($projects->currentPage()-1) * $projects->perPage() + $loop->iteration }} 
                    --}}
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($project->thumbnail)
                                    {{-- REVISI PENTING: Menggunakan asset('storage/...') untuk memastikan path benar --}}
                                    <img src="{{ asset('storage/' . $project->thumbnail) }}" 
                                         alt="Thumbnail {{ $project->title }}" 
                                         class="img-thumbnail" 
                                         style="max-height: 80px; object-fit: cover;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td class="text-start">
                                <strong>{{ $project->title }}</strong>
                                <p class="small text-muted mb-0 mt-1">{{ Str::limit(strip_tags($project->description), 80) }}</p>
                            </td>
                            <td>
                                <span class="d-block">{{ $project->client_name ?? '-' }}</span>
                                <span class="badge bg-secondary">{{ $project->year }}</span>
                            </td>
                            <td>
                                {{-- Menggunakan kolom 'status' dari DB, bukan 'is_featured' --}}
                                @php
                                    $badgeClass = ($project->status == 'Unggulan') ? 'success' : (($project->status == 'Regular') ? 'info' : 'secondary');
                                @endphp
                                <span class="badge bg-{{ $badgeClass }}">
                                    {{ $project->status }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-warning me-2" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus project ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Hapus"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data projects.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{-- BAGIAN INI SUDAH BENAR DAN KINI AKAN BERFUNGSI --}}
        <div class="mt-3">
            {{ $projects->links() }}
        </div>
    </div>
</div>
@endsection
