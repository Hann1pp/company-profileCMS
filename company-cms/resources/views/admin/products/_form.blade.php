@csrf
<div class="row">
    <div class="col-md-8">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="short_description" class="form-label">Deskripsi Singkat (Max 500 Karakter)</label>
            <textarea class="form-control" id="short_description" name="short_description" rows="3">{{ old('short_description', $product->short_description ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Lengkap</label>
            <textarea class="form-control" id="description" name="description" rows="6" required>{{ old('description', $product->description ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga (Rp)</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $product->price ?? 0) }}" required min="0">
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm p-3">
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>

            @if (isset($product) && $product->image)
                <div class="mb-3">
                    <p class="mb-1">Gambar Saat Ini:</p>
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-height: 150px;">
                </div>
            @endif

            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $product->is_active ?? true) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Status Produk Aktif</label>
            </div>

            <button type="submit" class="btn btn-success mt-3 w-100">
                <i class="bi bi-save"></i> {{ isset($product) ? 'Update Produk' : 'Simpan Produk Baru' }}
            </button>
        </div>
    </div>
</div>