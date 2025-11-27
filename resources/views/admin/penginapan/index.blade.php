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
        box-shadow: 0 2px 6px rgba(0,0,0,0.06);
    }

    .box-wrapper h4 {
        margin-bottom: 15px;
        font-size: 18px;
        font-weight: 600;
        color: #34495e;
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
        color: #333;
        vertical-align: top;
    }

    tr:hover td {
        background: #f7fbff;
    }

    .img-thumb {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #ccc;
    }

    .btn-edit {
        background: #ffcc00;
        padding: 6px 14px;
        color: #333;
        border-radius: 6px;
        text-decoration: none;
        transition: .2s;
        font-size: 13px;
        margin-right: 5px;
    }
    .btn-edit:hover {
        background: #e0b600;
    }

    .btn-delete {
        background: #e74c3c;
        padding: 6px 14px;
        color: white;
        border-radius: 6px;
        text-decoration: none;
        border: none;
        font-size: 13px;
        transition: .2s;
    }
    .btn-delete:hover {
        background: #c0392b;
    }

    .fasilitas-list {
        line-height: 1.4;
    }
</style>

<h2>Penginapan</h2>

{{-- BUTTON TAMBAH --}}
<a href="{{ route('admin.penginapan.create') }}" class="btn-add">Tambah</a>

<div class="box-wrapper">
    <h4>Daftar Penginapan</h4>

    <table>
        <thead>
            <tr>
                <th style="width: 10%">Gambar</th>
                <th style="width: 18%">Nama Penginapan</th>
                <th style="width: 12%">Kategori</th>
                <th style="width: 20%">Fasilitas</th>
                <th style="width: 25%">Detail</th>
                <th style="width: 15%">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($penginapan as $p)
            <tr>
                <td>
                    @if ($p->gambar)
                        <img src="{{ asset('storage/'.$p->gambar) }}" class="img-thumb">
                    @else
                        <img class="img-thumb" src="https://via.placeholder.com/60">
                    @endif
                </td>

                <td>{{ $p->nama_penginapan }}</td>
                <td>{{ $p->kategori->nama_kategori ?? '-' }}</td>

                <td class="fasilitas-list">
                    @foreach ($p->fasilitas as $f)
                        • {{ $f->nama_fasilitas }} <br>
                    @endforeach
                </td>

                <td>{{ Str::limit($p->detail, 100) }}</td>

                <td>
                    {{-- EDIT --}}
                    <a href="{{ route('admin.penginapan.edit', $p->id) }}" class="btn-edit">Edit</a>

                    {{-- DELETE --}}
                    <form action="{{ route('admin.penginapan.delete', $p->id) }}"
                          method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')

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
