{{--
    Partial Form untuk Project (Digunakan di Create dan Edit)
    Catatan: Variabel $project harus dilewatkan saat di-include (null untuk create, object untuk edit)
    Revisi: Menambahkan field 'category', 'challenge', 'solution', 'result'.
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

        <!-- Deskripsi Project (Singkat) -->
        <div class="form-group">
            <label for="description">Deskripsi Project (Singkat) <span class="text-danger">*</span></label>
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
        
        {{-- Kategori Proyek - DIHAPUS SEMENTARA KARENA KOLOM BELUM ADA DI DATABASE. AKAN DITAMBAHKAN KEMBALI SETELAH MIGRATION --}}
        {{-- <div class="form-group">
            <label for="category">Kategori <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="category" 
                   value="{{ old('category', $project ? $project->category : '') }}" required>
            @error('category')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div> --}}

        <!-- Tahun Selesai -->
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

        <!-- Status Publikasi/Unggulan -->
        <div class="form-group">
            <label for="status">Status Publikasi <span class="text-danger">*</span></label>
            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                @php $currentStatus = old('status', $project ? $project->status : 'Draft'); @endphp
                <option value="Draft" {{ $currentStatus == 'Draft' ? 'selected' : '' }}>Draft (Tidak Ditampilkan)</option>
                <option value="Regular" {{ $currentStatus == 'Regular' ? 'selected' : '' }}>Regular (Ditampilkan di Portofolio)</option>
                <option value="Unggulan" {{ $currentStatus == 'Unggulan' ? 'selected' : '' }}>Unggulan (Ditampilkan & disorot)</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    </div>
</div>

<hr>

<h5 class="mt-4 mb-3 font-weight-bold text-primary">Detail Studi Kasus (Untuk Halaman Detail)</h5>

<div class="row">
    <div class="col-md-12">
        <!-- TANTANGAN -->
        <div class="form-group">
            <label for="challenge">Tantangan (Challenge)</label>
            <textarea class="form-control @error('challenge') is-invalid @enderror" id="challenge" name="challenge" rows="5">{{ old('challenge', $project ? $project->challenge : '') }}</textarea>
            @error('challenge')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- SOLUSI -->
        <div class="form-group">
            <label for="solution">Solusi Kami (Solution)</label>
            <textarea class="form-control @error('solution') is-invalid @enderror" id="solution" name="solution" rows="5">{{ old('solution', $project ? $project->solution : '') }}</textarea>
            @error('solution')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <!-- HASIL -->
        <div class="form-group">
            <label for="result">Hasil & Dampak (Result)</label>
            <textarea class="form-control @error('result') is-invalid @enderror" id="result" name="result" rows="5">{{ old('result', $project ? $project->result : '') }}</textarea>
            @error('result')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<hr>

{{-- Tombol Simpan dan Batal --}}
<div class="d-flex justify-content-end mt-4">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mr-2">
        Batal
    </a>
    <button type="submit" class="btn btn-primary">
        Simpan Project
    </button>
</div>