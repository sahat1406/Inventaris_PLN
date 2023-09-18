<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">{{ substr(config('app.name'), 0, 2) }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown{{ request()->is('admin/dashboard') ? ' active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-laptop"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Manajemen</li>
            <li class="nav-item dropdown{{ request()->is('admin/barang') ? ' active' : '' }}">
                <a href="{{ route('barang.index') }}" class="nav-link"><i class="fas fa-clipboard-list"></i> <span>Data
                        Barang</span></a>
            </li>
            <li class="nav-item dropdown{{ request()->is('admin/asal-barang') ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('asal-barang.index') }}"><i class="fas fa-sign-in-alt"></i>
                    <span>Asal Barang</span></a>
            </li>
            <li class="nav-item dropdown{{ request()->is('admin/ruang') ? ' active' : '' }}">
                <a href="{{ route('ruang.index') }}" class="nav-link"><i class="fas fa-home"></i> <span>Data
                        Ruangan</span></a>
            </li>
            <li class="nav-item dropdown{{ request()->is('admin/qr-code') ? ' active' : '' }}">
                <a href="{{ route('qr-code.index') }}" class="nav-link"><i class="fas fa-qrcode"></i><span>Qr Code</span></a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a class="btn btn-danger btn-lg btn-block btn-icon-split" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </aside>
</div>