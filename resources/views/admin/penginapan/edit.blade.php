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

    .img-preview {
        margin-top: 10px;
        width: 130px;
        border-radius: 6px;
        border: 1px solid #ccc;
    }

    .checkbox-item {
        margin-bottom: 5px;
    }

    textarea {
        resize: none;
    }

    .btn-update {
        background: #27ae60;
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

<h2>Edit Penginapan</h2>

<div class="form-box">

<form action="{{ route('admin.penginapan.update', $penginapan->id) }}"
      method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <label>Gambar Utama</label>
    <input type="file" name="gambar" class="form-control">
    <img src="{{ asset('storage/'.$penginapan->gambar) }}" class="img-preview">

    <label>Gallery (Tambah Foto)</label>
    <input type="file" name="gallery[]" class="form-control" multiple>

    <label>Nama Penginapan</label>
    <input type="text" name="nama_penginapan" value="{{ $penginapan->nama_penginapan }}" class="form-control">

    <label>Kategori</label>
    <select name="kategori_id" class="form-control">
        @foreach ($kategori as $k)
            <option value="{{ $k->id }}" {{ $penginapan->kategori_id == $k->id ? 'selected' : '' }}>
                {{ $k->nama_kategori }}
            </option>
        @endforeach
    </select>

    <label>Fasilitas</label>
    @foreach ($fasilitas as $f)
        <div>
            <input type="checkbox"
                   name="fasilitas[]"
                   value="{{ $f->id }}"
                   {{ in_array($f->id, $penginapan->fasilitas->pluck('id')->toArray()) ? 'checked' : '' }}>
            {{ $f->nama_fasilitas }}
        </div>
    @endforeach

    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" value="{{ $penginapan->alamat }}">

    <label>Latitude</label>
    <input type="text" name="latitude" class="form-control" value="{{ $penginapan->latitude }}">

    <label>Longitude</label>
    <input type="text" name="longitude" class="form-control" value="{{ $penginapan->longitude }}">
    
    <label>Harga per Malam</label>
    <input type="number" name="harga" class="form-control" value="{{ $penginapan->harga }}" required>

    <label>Detail</label>
    <textarea name="detail" class="form-control" rows="4">{{ $penginapan->detail }}</textarea>

    <label>
        <input type="checkbox" name="is_promo" value="1" {{ $penginapan->is_promo ? 'checked' : '' }}>
        Tandai sebagai promo
    </label>

    <br><br>
    <button class="btn-update">Update</button>
    <a href="{{ route('admin.penginapan') }}" class="btn-back">Batal</a>

</form>

</div>

</x-layoutAdmin>
