<x-layoutAdmin>

<style>
    h2 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .box-wrapper {
        background: #f8f9fc;
        padding: 20px;
        border: 1px solid #dcdcdc;
        border-radius: 10px;
        margin-top: 20px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.06);
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
        text-align: left;
    }

    table td {
        padding: 12px;
        border-bottom: 1px solid #eee;
        font-size: 14px;
    }

    tr:hover td {
        background: #f7fbff;
    }
</style>

<h2>Data Rating Pengguna</h2>

<div class="box-wrapper">

    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Penginapan</th>
                <th>Rating</th>
                <th>Komentar</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($ratings as $rating)
            <tr>
                <td>{{ $rating->user->name }}</td>
                <td>{{ $rating->penginapan->nama_penginapan }}</td>
                <td>⭐ {{ $rating->rating }}</td>
                <td>{{ $rating->review }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</x-layoutAdmin>
