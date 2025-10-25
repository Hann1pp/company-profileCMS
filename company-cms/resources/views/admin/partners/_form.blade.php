{{-- Perhatian: @csrf dihapus dari sini. Pastikan @csrf ada di file induk (create.blade.php dan edit.blade.php) --}}
<div class="row">
    <div class="col-md-8">
        {{-- Input Nama Partner --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nama Partner</label>
            {{-- Menggunakan null coalescing untuk memastikan tidak ada eror saat membuat baru --}}
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" 
                   value="{{ old('name', $partner->name ?? '') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    </div>
    <div class="col-md-4">
        <div class="card shadow-sm p-3">
            {{-- Input Gambar Partner --}}
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Partner</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Tampilan Gambar Saat Ini (hanya muncul di halaman edit) --}}
            @if (isset($partner) && $partner->image)
                <div class="mb-3">
                    <p class="mb-1">Gambar Saat Ini:</p>
                    <img src="{{ asset($partner->image) }}" alt="{{ $partner->name }}" class="img-thumbnail" style="max-height: 150px;">
                </div>
            @endif

            {{-- Switch Status Aktif --}}
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" 
                       {{ old('is_active', $partner->is_active ?? true) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Status Partner Aktif</label>
            </div>

            {{-- Tombol Submit --}}
            <button type="submit" class="btn btn-success mt-3 w-100">
                <i class="bi bi-save"></i> {{ isset($partner) ? 'Update Partner' : 'Simpan Partner Baru' }}
            </button>
        </div>
    </div>
</div>
