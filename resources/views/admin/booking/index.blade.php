<x-layoutAdmin>

<style>
    h2 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 20px;
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

    .status-badge {
        padding: 5px 10px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 600;
        display: inline-block;
    }
    .pending { background: #ffeeba; color: #8a6d3b; }
    .accepted { background: #c8f7c5; color: #2e7d32; }
    .done { background: #d0d0d0; color: #444; }

    select {
        padding: 6px 8px;
        border-radius: 6px;
        border: 1px solid #aaa;
    }
</style>

<h2>Daftar Booking</h2>

<div class="box-wrapper">
    <h4>Status Booking</h4>

    <table>
        <thead>
        <tr>
            <th>Nama</th>
            <th>Penginapan</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Total Harga</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($bookings as $b)
        <tr>
            <td>{{ $b->nama }}</td>
            <td>{{ $b->penginapan->nama_penginapan }}</td>
            <td>{{ $b->checkin_date }}</td>
            <td>{{ $b->checkout_date }}</td>
            <td>Rp {{ number_format($b->total_price,0,',','.') }}</td>

            <td>
                <span class="status-badge
                    {{ $b->status == 'pending' ? 'pending' : '' }}
                    {{ $b->status == 'accepted' ? 'accepted' : '' }}
                    {{ $b->status == 'done' ? 'done' : '' }}">
                    {{ ucfirst($b->status) }}
                </span>
            </td>

            <td>
                <form action="{{ route('admin.booking.status', $b->id) }}" method="POST">
                    @csrf
                    <select name="status" onchange="this.form.submit()">
                        <option value="pending" {{ $b->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="accepted" {{ $b->status == 'accepted' ? 'selected' : '' }}>Diterima</option>
                        <option value="done" {{ $b->status == 'done' ? 'selected' : '' }}>Selesai</option>
                    </select>
                </form>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>

</div>

</x-layoutAdmin>
