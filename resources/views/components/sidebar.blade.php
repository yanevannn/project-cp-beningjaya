<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <img src="/assets/img/logolb.png" alt="" width="150">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is("dashboard") ? 'active' : '' }} mt-3">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">ETC</span>
        </li>
        <li class="menu-item {{  Request::is("dashboard/products*") ? 'active' : '' }}">
            <a href="{{ route('products.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div>Product</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is("dashboard/testimoni*") ? 'active' : '' }}">
            <a href="{{ route('testimoni.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-detail"></i>
                <div>Testimoni</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is("dashboard/galery*") ? 'active' : '' }}">
            <a href="{{ route('gallery.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-images"></i>
                <div>Gallery</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
