<x-layoutAdmin>

<style>
    h2 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .btn-add {
        background: #1e90ff;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 6px;
        font-size: 14px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.15);
        transition: .2s;
    }
    .btn-add:hover {
        background: #0f74d6;
    }

    .box-wrapper {
        margin-top: 20px;
        padding: 20px;
        border: 1px solid #dcdcdc;
        background: #f8f9fc;
        border-radius: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #ccc;
    }

    table th {
        background: #eef3fb;
        font-weight: 600;
        padding: 12px;
        border-bottom: 1px solid #ddd;
        font-size: 14px;
        color: #2c3e50;
        text-align: left;
    }

    table td {
        padding: 12px;
        border-bottom: 1px solid #f2f2f2;
        font-size: 14px;
    }

    .img-thumb {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
    }

    .btn-edit {
        background: #ffcc00;
        padding: 6px 14px;
        border-radius: 6px;
        color: black;
    }
    .btn-edit:hover {
        background: #e0b600;
    }
    .btn-delete {
        background: #e74c3c;
        padding: 6px 14px;
        color: white;
        border-radius: 6px;
    }
    .btn-delete:hover {
        background: #c0392b;
    }
</style>

<h2>Penginapan</h2>

<a href="{{ route('admin.penginapan.create') }}" class="btn-add">Tambah</a>

<div class="box-wrapper">
    <h4>Daftar Penginapan</h4>

    <table>
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Fasilitas</th>
                <th>Promo</th>
                <th>Detail</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($penginapan as $p)
            <tr>
                <td>
                    <img src="{{ asset('storage/'.$p->gambar) }}" class="img-thumb">
                </td>

                <td>{{ $p->nama_penginapan }}</td>
                <td>{{ $p->kategori->nama_kategori }}</td>

                <td>
                    @foreach ($p->fasilitas as $f)
                        • {{ $f->nama_fasilitas }}<br>
                    @endforeach
                </td>

                <td>
                    @if($p->is_promo)
                        <span style="color:green;font-weight:bold;">Promo</span>
                    @else
                        -
                    @endif
                </td>

                <td>{{ Str::limit($p->detail, 80) }}</td>

                <td>
                    <a class="btn-edit"
                       href="{{ route('admin.penginapan.edit', $p->id) }}">Edit</a>

                    <form action="{{ route('admin.penginapan.delete', $p->id) }}"
                          method="POST" style="display:inline-block">
                        @csrf @method('DELETE')

                        <button class="btn-delete"
                                onclick="return confirm('Hapus penginapan ini?')">
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
