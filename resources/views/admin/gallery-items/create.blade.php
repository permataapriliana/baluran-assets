<form action="{{ route('gallery-items.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama Item</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="category" name="category">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <input class="form-control" type="file" id="image" name="image" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>