<x-layoutAdmin>
    <div class="container mt-4">
        <h2 class="fw-bold mb-4">Dashboard Admin</h2>

        <div class="row g-4">

            {{-- CARD JUMLAH HOTEL --}}
            <div class="col-md-3">
                <div class="card shadow-sm border-0" style="background: #1E90FF; color:white;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="fw-bold">Jumlah Penginapan</h5>
                                <h3>{{ $jumlahHotel ?? 0 }}</h3>
                                <small>Semua Penginapan</small>
                            </div>
                            <div>
                                <i class="fas fa-hotel fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CARD USER --}}
            <div class="col-md-3">
                <div class="card shadow-sm border-0" style="background: #00C4CC; color:white;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="fw-bold">User</h5>
                                <h3>{{ $jumlahUser ?? 0 }}</h3>
                                <small>Semua Jumlah User</small>
                            </div>
                            <div>
                                <i class="fas fa-user fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CARD KATEGORI --}}
            <div class="col-md-3">
                <div class="card shadow-sm border-0" style="background: #FFA500; color:white;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="fw-bold">Kategori</h5>
                                <h3>{{ $jumlahKategori ?? 0 }}</h3>
                                <small>Semua Kategori</small>
                            </div>
                            <div>
                                <i class="fas fa-list fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CARD RATING --}}
            <div class="col-md-3">
                <div class="card shadow-sm border-0" style="background: #2ECC71; color:white;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="fw-bold">Rating</h5>
                                <h3>{{ $jumlahRating ?? 0 }}</h3>
                                <small>Rating Penginapan</small>
                            </div>
                            <div>
                                <i class="fas fa-star fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-layoutAdmin>
