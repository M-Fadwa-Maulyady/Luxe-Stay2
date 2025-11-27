<x-layoutAdmin>

<style>
    h2 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .form-box {
        border: 1px solid #d0d0d0;
        padding: 22px;
        background: #f8f9fc;
        border-radius: 8px;
        margin-top: 15px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.06);
    }

    .form-box label {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
    }

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

    .btn-update {
        background: #27ae60;
        border: none;
        padding: 8px 18px;
        color: white;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        transition: 0.2s;
    }

    .btn-update:hover {
        background: #1e8449;
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

<h2>Edit Fasilitas</h2>

<div class="form-box">

    <form action="{{ route('admin.fasilitas.update', $fasilitas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="kode_fasilitas" value="{{ $fasilitas->kode_fasilitas }}">

        <label>Nama Fasilitas</label>
        <input type="text"
               name="nama_fasilitas"
               class="form-control"
               value="{{ $fasilitas->nama_fasilitas }}"
               required>

        <button class="btn-update">Update</button>

        <a href="{{ route('admin.fasilitas') }}" class="btn-back">Batal</a>
    </form>

</div>

</x-layoutAdmin>
