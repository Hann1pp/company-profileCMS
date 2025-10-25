{{--
    Partial Form untuk Project (Digunakan di Create dan Edit)
    Catatan: Variabel $project harus dilewatkan saat di-include (null untuk create, object untuk edit)
    Revisi: Mengganti field 'completion_year' menjadi 'year' untuk menyesuaikan dengan error database.
--}}
<div class="row">
    <div class="col-md-7">
        <!-- Judul Project -->
        <div class="form-group">
            <label for="title">Judul Project <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" 
                   value="{{ old('title', $project ? $project->title : '') }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Deskripsi Project -->
        <div class="form-group">
            <label for="description">Deskripsi Project <span class="text-danger">*</span></label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description', $project ? $project->description : '') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Nama Klien -->
        <div class="form-group">
            <label for="client_name">Nama Klien <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('client_name') is-invalid @enderror" id="client_name" name="client_name" 
                   value="{{ old('client_name', $project ? $project->client_name : '') }}" required>
            @error('client_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tahun Selesai (Revisi field name: completion_year -> year) -->
        <div class="form-group">
            <label for="year">Tahun Selesai <span class="text-danger">*</span></label>
            <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year" 
                   value="{{ old('year', $project ? $project->year : '') }}" required min="1900" max="{{ date('Y') + 5 }}">
            @error('year')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-5">
        <!-- Thumbnail (Gambar) -->
        <div class="form-group">
            <label for="thumbnail">Thumbnail (Gambar)</label>
            <div class="custom-file">
                {{-- Input file tidak wajib di halaman edit, hanya wajib di halaman create (dapat dikontrol di Controller/Request) --}}
                <input type="file" class="custom-file-input @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail">
                <label class="custom-file-label" for="thumbnail">Choose file</label>
            </div>
            @error('thumbnail')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            @if ($project && $project->thumbnail)
                <div class="mt-2">
                    <small>Gambar saat ini:</small><br>
                    <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="Thumbnail Proyek" class="img-thumbnail" style="max-width: 150px;">
                </div>
            @endif
        </div>

        <!-- Tanda sebagai Project Unggulan (is_featured) -->
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="hidden" name="is_featured" value="0"> {{-- Hidden field to ensure 0 is sent if not checked --}}
                <input type="checkbox" class="custom-control-input @error('is_featured') is-invalid @enderror" id="is_featured" name="is_featured" value="1" 
                       {{ old('is_featured', $project ? $project->is_featured : 0) == 1 ? 'checked' : '' }}>
                <label class="custom-control-label" for="is_featured">Tanda sebagai Project Unggulan</label>
            </div>
            @error('is_featured')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <small class="form-text text-muted">Centang untuk menampilkan project ini di bagian unggulan.</small>
        </div>
    </div>
</div>

<hr>

{{-- Tombol Simpan dan Batal (Ditempatkan hanya di partial ini untuk mencegah duplikasi) --}}
<div class="d-flex justify-content-end mt-4">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mr-2">
        Batal
    </a>
    <button type="submit" class="btn btn-primary">
        Simpan Project
    </button>
</div>
