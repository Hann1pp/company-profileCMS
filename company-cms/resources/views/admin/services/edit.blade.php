@extends('admin.layout.app') {{-- Pastikan path layout Anda sudah benar --}}

@section('title', 'Edit Layanan: ' . $service->title)

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Layanan: {{ $service->title }}</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir Edit Layanan</h6>
        </div>
        <div class="card-body">
            
            {{-- Formulir diarahkan ke route admin.services.update dengan parameter ID layanan --}}
            {{-- METHOD harus POST, dan menggunakan @method('PUT') atau @method('PATCH') --}}
            <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                {{-- Field Judul Layanan --}}
                <div class="form-group">
                    <label for="title">Judul Layanan <span class="text-danger">*</span></label>
                    {{-- Menggunakan old() untuk error, dan $service->title untuk nilai awal --}}
                    <input type="text" 
                           name="title" 
                           id="title" 
                           class="form-control @error('title') is-invalid @enderror" 
                           value="{{ old('title', $service->title) }}" 
                           required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Field Deskripsi --}}
                <div class="form-group">
                    <label for="description">Deskripsi <span class="text-danger">*</span></label>
                    <textarea name="description" 
                              id="description" 
                              class="form-control @error('description') is-invalid @enderror" 
                              rows="5" 
                              required>{{ old('description', $service->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Field Status (Checkbox) --}}
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        {{-- Cek apakah is_active true atau false saat ini --}}
                        <input type="checkbox" 
                               class="custom-control-input" 
                               id="is_active" 
                               name="is_active" 
                               value="1" 
                               {{ old('is_active', $service->is_active) ? 'checked' : '' }}>
                        <label class="custom-control-label" for="is_active">Aktifkan Layanan ini?</label>
                    </div>
                </div>

                {{-- Tombol Aksi --}}
                <button type="submit" class="btn btn-success mt-3">Perbarui Layanan</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary mt-3">Batal</a>
            </form>

        </div>
    </div>
</div>
@endsection
