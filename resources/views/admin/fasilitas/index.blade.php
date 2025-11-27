<x-layoutAdmin>

<style>
    /* Title */
    h2 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    /* Tombol Tambah */
    .btn-add {
        background: #1e90ff;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 6px;
        font-size: 14px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.15);
        transition: 0.2s;
    }
    .btn-add:hover {
        background: #1475d1;
    }

    /* Kotak Pembungkus */
    .box-wrapper {
        border: 1px solid #d3d3d3;
        background: #f8f9fc;
        padding: 18px;
        border-radius: 8px;
        margin-top: 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.06);
    }

    .box-wrapper h4 {
        margin: 0 0 10px 0;
        font-size: 18px;
        font-weight: 600;
    }

    /* Tabel */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        background: white;
        border-radius: 6px;
        overflow: hidden;
        border: 1px solid #ccc;
    }

    table th {
        background: #eef3fb;
        font-weight: 600;
        text-align: left;
        padding: 12px;
        border-bottom: 1px solid #ddd;
    }

    table td {
        padding: 12px;
        border-bottom: 1px solid #eee;
        font-size: 14px;
    }

    table tr:hover {
        background: #f6faff;
    }

    /* Aksi Buttons */
    .btn-edit {
        background: #ffcc00;
        color: #333;
        border: none;
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 13px;
        margin-right: 5px;
        transition: 0.2s;
    }
    .btn-edit:hover {
        background: #e6b800;
    }

    .btn-delete {
        background: #e74c3c;
        color: #fff;
        border: none;
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 13px;
        transition: 0.2s;
    }
    .btn-delete:hover {
        background: #c0392b;
    }
</style>

<h2>Fasilitas</h2>

<a href="{{ route('admin.fasilitas.create') }}" class="btn-add">Tambah</a>

<div class="box-wrapper">

    <h4>Daftar Fasilitas</h4>

    <table>
        <thead>
            <tr>
                <th>Kode Fasilitas</th>
                <th>Nama Fasilitas</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($fasilitas as $item)
            <tr>
                <td>{{ $item->kode_fasilitas }}</td>
                <td>{{ $item->nama_fasilitas }}</td>

                <td>
                    {{-- EDIT --}}
                    <a href="{{ route('admin.fasilitas.edit', $item->id) }}"
                       class="btn-edit">Edit</a>

                    {{-- DELETE --}}
                    <form action="{{ route('admin.fasilitas.delete', $item->id) }}"
                          method="POST"
                          style="display:inline-block">
                        @csrf
                        @method('DELETE')

                        <button class="btn-delete"
                                onclick="return confirm('Yakin ingin menghapus?')">
                            Hapus
                        </button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layoutAdmin>
