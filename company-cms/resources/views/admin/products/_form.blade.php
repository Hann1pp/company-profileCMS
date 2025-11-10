@csrf
<div class="row">
    <div class="col-md-8">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name ?? '') }}" required>
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="short_description" class="form-label">Deskripsi Singkat (Max 500 Karakter)</label>
            <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="3">{{ old('short_description', $product->short_description ?? '') }}</textarea>
            @error('short_description')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Lengkap</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="6" required>{{ old('description', $product->description ?? '') }}</textarea>
            @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga (Rp)</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product->price ?? 0) }}" required min="0">
            @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm p-3">
            
            {{-- REVISI UTAMA: Tambahkan Kategori Produk --}}
            <div class="mb-3">
                <label for="category" class="form-label">Kategori Produk</label>
                <select id="category" name="category" class="form-select @error('category') is-invalid @enderror" required>
                    <option value="">-- Pilih Kategori --</option>
                    {{-- Nilai SLUG harus sama persis dengan yang ada di client/services.blade.php --}}
                    @php $currentCategory = old('category', $product->category ?? ''); @endphp
                    <option value="enterprise-digital" {{ $currentCategory == 'enterprise-digital' ? 'selected' : '' }}>Enterprise Digital Solutions</option>
                    <option value="mobile-field" {{ $currentCategory == 'mobile-field' ? 'selected' : '' }}>Mobile & Field Applications</option>
                    <option value="custom-software" {{ $currentCategory == 'custom-software' ? 'selected' : '' }}>Custom Software Development</option>
                    <option value="infrastructure-managed" {{ $currentCategory == 'infrastructure-managed' ? 'selected' : '' }}>Infrastructure & Managed Services</option>
                    <option value="monitoring-solutions" {{ $currentCategory == 'monitoring-solutions' ? 'selected' : '' }}>Integrated Monitoring Solutions</option>
                    <option value="data-acquisition" {{ $currentCategory == 'data-acquisition' ? 'selected' : '' }}>Data Acquisition & Processing Solutions</option>
                </select>
                @error('category')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            @if (isset($product) && $product->image)
                <div class="mb-3">
                    <p class="mb-1">Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-height: 150px;">
                </div>
            @endif

            <div class="form-check form-switch mb-3">
                {{-- Menggunakan is_active (boolean) --}}
                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $product->is_active ?? true) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Status Produk Aktif</label>
            </div>

            <button type="submit" class="btn btn-success mt-3 w-100">
                <i class="bi bi-save"></i> {{ isset($product) ? 'Update Produk' : 'Simpan Produk Baru' }}
            </button>
        </div>
    </div>
</div>