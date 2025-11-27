<x-layoutAdmin>

<style>
    h2 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .form-box {
        border: 1px solid #d0d0d0;
        padding: 25px;
        background: #fafbfd;
        border-radius: 8px;
        margin-top: 15px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    label {
        font-weight: 600;
        display: block;
        margin-bottom: 6px;
        margin-top: 10px;
    }

    .form-control, select, textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #bbb;
        border-radius: 6px;
        margin-bottom: 10px;
    }

    .note {
        font-size: 12px;
        color: #666;
        margin-top: -8px;
        margin-bottom: 10px;
    }

    .checkbox-item {
        margin-bottom: 5px;
    }

    textarea {
        resize: none;
    }

    .btn-save {
        background: #2ecc71;
        color: white;
        border: none;
        padding: 8px 18px;
        border-radius: 6px;
        font-size: 14px;
    }

    .btn-back {
        background: #7f8c8d;
        color: white;
        border: none;
        padding: 8px 18px;
        border-radius: 6px;
        font-size: 14px;
        margin-left: 6px;
    }

</style>

<h2>Tambah Penginapan</h2>

<div class="form-box">
    <form action="{{ route('admin.penginapan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Gambar -->
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
        <p class="note">Format: JPG, JPEG, PNG — Maksimal 2MB</p>

        <!-- Nama -->
        <label>Nama Penginapan</label>
        <input type="text" name="nama_penginapan" class="form-control" required>

        <!-- Kategori -->
        <label>Kategori</label>
        <select name="kategori_id" class="form-control" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach ($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
            @endforeach
        </select>

        <!-- Fasilitas -->
        <label>Fasilitas</label>
        @foreach ($fasilitas as $f)
            <div class="checkbox-item">
                <input type="checkbox" name="fasilitas[]" value="{{ $f->id }}">
                {{ $f->nama_fasilitas }}
            </div>
        @endforeach

        <!-- Detail -->
        <label>Detail</label>
        <textarea name="detail" class="form-control" rows="4"></textarea>

        <!-- Promo -->
        <label class="block mt-3">
            <input type="checkbox" name="is_promo" value="1">
            Tandai sebagai promo
        </label>

        <!-- Tombol -->
        <button class="btn-save">Simpan</button>
        <a href="{{ route('admin.penginapan') }}" class="btn-back">Batal</a>

    </form>
</div>

</x-layoutAdmin>
