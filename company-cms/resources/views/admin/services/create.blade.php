@extends('admin.layout.app') {{-- Pastikan path layout Anda sudah benar --}}

@section('title', 'Tambah Layanan Baru')

@section('content')
<div class="container-fluid">
    

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir Layanan</h6>
        </div>
        <div class="card-body">
            
            {{-- Formulir diarahkan ke route admin.services.store --}}
            <form action="{{ route('admin.services.store') }}" method="POST">
                @csrf
                
                {{-- Field Judul Layanan --}}
                <div class="form-group">
                    <label for="title">Judul Layanan <span class="text-danger">*</span></label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Field Deskripsi --}}
                <div class="form-group">
                    <label for="description">Deskripsi <span class="text-danger">*</span></label>
                    {{-- Menggunakan area teks untuk deskripsi yang lebih panjang --}}
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Field Status (Checkbox) --}}
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        {{-- is_active akan bernilai '1' jika dicentang, dan jika tidak dicentang, nilainya tidak akan terkirim --}}
                        <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', 1) == 1 ? 'checked' : '' }}>
                        <label class="custom-control-label" for="is_active">Aktifkan Layanan ini?</label>
                    </div>
                </div>

                {{-- Tombol Aksi --}}
                <button type="submit" class="btn btn-primary mt-3">Simpan Layanan</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary mt-3">Batal</a>
            </form>

        </div>
    </div>
</div>
@endsection
