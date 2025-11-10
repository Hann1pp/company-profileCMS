@extends('admin.layout.app')

@section('title', 'Tambah Project')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Project Baru</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Judul --}}
        <div class="form-group mb-3">
            <label for="title">Judul Project</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan judul project" required>
        </div>

        {{-- Slug (otomatis atau manual) --}}
        <div class="form-group mb-3">
            <label for="slug">Slug (otomatis dari judul)</label>
            <input type="text" name="slug" id="slug" class="form-control" placeholder="contoh: website-company-profile">
        </div>

        {{-- Nama Klien --}}
        <div class="form-group mb-3">
            <label for="client_name">Nama Klien</label>
            <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Nama klien">
        </div>

        {{-- Tahun --}}
        <div class="form-group mb-3">
            <label for="year">Tahun</label>
            <input type="number" name="year" id="year" class="form-control" placeholder="2025">
        </div>

        {{-- Kategori --}}
        <div class="form-group mb-3">
            <label for="category">Kategori</label>
            <input type="text" name="category" id="category" class="form-control" placeholder="Web Development, Mobile App, dsb.">
        </div>

        {{-- Thumbnail --}}
        <div class="form-group mb-3">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
        </div>

        {{-- Deskripsi --}}
        <div class="form-group mb-3">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Deskripsi project..."></textarea>
        </div>

        {{-- Studi Kasus --}}
        <hr>
        <h4 class="mt-4 mb-3">🧩 Studi Kasus</h4>

        <div class="form-group mb-3">
            <label for="challenge">Tantangan (Challenge)</label>
            <textarea name="challenge" id="challenge" class="form-control" rows="3" placeholder="Tantangan yang dihadapi klien..."></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="solution">Solusi (Solution)</label>
            <textarea name="solution" id="solution" class="form-control" rows="3" placeholder="Solusi yang diberikan tim..."></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="result">Hasil (Result)</label>
            <textarea name="result" id="result" class="form-control" rows="3" placeholder="Dampak atau hasil akhir dari project..."></textarea>
        </div>

        {{-- Status --}}
        <div class="form-group mb-3">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="draft">Draft</option>
                <option value="published">Published</option>
            </select>
        </div>

        {{-- Tombol Simpan --}}
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mt-3">Batal</a>
    </form>
</div>

{{-- Script otomatis buat slug --}}
<script>
    document.getElementById('title').addEventListener('input', function() {
        const title = this.value;
        const slug = title.toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/(^-|-$)/g, '');
        document.getElementById('slug').value = slug;
    });
</script>
@endsection
