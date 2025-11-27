<x-layoutAdmin>

<style>
    /* Judul */
    h2 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    /* Box Form */
    .form-box {
        border: 1px solid #d0d0d0;
        padding: 22px;
        background: #f8f9fc;
        border-radius: 8px;
        margin-top: 15px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.06);
    }

    /* Label */
    .form-box label {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
    }

    /* Input */
    .form-control {
        width: 100%;
        padding: 9px 12px;
        margin-bottom: 15px;
        font-size: 14px;
        border: 1px solid #bdbdbd;
        border-radius: 6px;
        background: white;
        transition: 0.2s;
    }
    .form-control:focus {
        border-color: #1e90ff;
        outline: none;
        box-shadow: 0 0 3px rgba(30,144,255,.4);
    }

    /* Buttons */
    .btn-save {
        background: #2ecc71;
        border: none;
        padding: 8px 18px;
        color: white;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        transition: 0.2s;
    }
    .btn-save:hover {
        background: #27ae60;
    }

    .btn-back {
        background: #7f8c8d;
        border: none;
        padding: 8px 18px;
        color: white;
        border-radius: 6px;
        margin-left: 8px;
        font-size: 14px;
        font-weight: 600;
        transition: 0.2s;
    }
    .btn-back:hover {
        background: #6c7a7a;
    }
</style>


<h2>Tambah Kategori</h2>

<div class="form-box">

    <form action="{{ route('admin.kategori.store') }}" method="POST">
        @csrf

        <label>Nama Kategori</label>
        <input type="text" name="nama_kategori" class="form-control" required>

        <button class="btn-save">Simpan</button>

        <a href="{{ route('admin.kategori') }}" class="btn-back">Batal</a>
    </form>

</div>

</x-layoutAdmin>
