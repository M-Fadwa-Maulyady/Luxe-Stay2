<aside class="sidebar">
    <div class="menu-wrapper">

        <h2 class="sidebar-title">Admin Panel</h2>

        <ul class="menu-list">

            <!-- Dashboard -->
            <li class="menu-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Kategori -->
            <li class="menu-item {{ request()->is('admin/kategori') ? 'active' : '' }}">
                <a href="{{ route('admin.kategori') }}">
                    <i class="fa fa-list"></i>
                    <span>Kategori</span>
                </a>
            </li>

            <!-- Penginapan -->
            <li class="menu-item {{ request()->is('admin/penginapan') ? 'active' : '' }}">
                <a href="{{ route('admin.penginapan') }}">
                    <i class="fa fa-hotel"></i>
                    <span>Penginapan</span>
                </a>
            </li>

            <!-- Fasilitas -->
            <li class="menu-item {{ request()->is('admin/fasilitas') ? 'active' : '' }}">
                <a href="{{ route('admin.fasilitas') }}">
                    <i class="fa fa-bed"></i>
                    <span>Fasilitas</span>
                </a>
            </li>

            <!-- Rating -->
            <li class="menu-item {{ request()->is('admin/rating') ? 'active' : '' }}">
                <a href="{{ route('admin.rating.index') }}">
                    <i class="fa fa-star"></i>
                    <span>Rating</span>
                </a>
            </li>

            <!-- Booking (BARU) -->
            <li class="menu-item {{ request()->is('admin/booking') ? 'active' : '' }}">
                <a href="{{ route('admin.booking.index') }}">
                    <i class="fa fa-calendar-check"></i>
                    <span>Booking</span>
                </a>
            </li>

        </ul>

        <form action="{{ route('logout') }}" method="POST" style="margin-top: 20px;">
            @csrf
            <button type="submit" class="logout-btn">
                <i class="fa fa-sign-out"></i> Logout
            </button>
        </form>

        <div class="logo-bottom">
            <h3>LUXE<br>STAY</h3>
        </div>

    </div>
</aside>
