<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content mt-2">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}"><a href="{{ url('/dashboard') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a></li>
            <li class="nav-item {{ Request::segment(2) == 'aksi' ? 'active' : '' }}"><a href="{{ route('admin:aksi.index') }}"><i class="feather icon-tag"></i><span class="menu-title" data-i18n="Aksi">Aksi</span></a></li>
            <li class="nav-item {{ Request::segment(2) == 'penerima' ? 'active' : '' }}"><a href="{{ route('admin:penerima.index') }}"><i class="feather icon-user-check"></i><span class="menu-title" data-i18n="Penerima">Penerima</span></a></li>
            <li class=" navigation-header"><span>Master</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="Master"></i>
            </li>
            <li class="nav-item {{ Request::segment(2) == 'kategori' ? 'active' : '' }}"><a href="{{ route('admin:kategori.index') }}"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Kategori">Kategori</span></a></li>
            <li class="nav-item {{ Request::segment(2) == 'user' ? 'has-sub open' : '' }} "><a href="#"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Data User">Data User</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::segment(2) == 'user' ? 'active' : '' }}"><a class="menu-item " href="{{ route('admin:user.index') }}" data-i18n="Management User">Management User</a></li>
                    <li class="{{ Request::segment(2) == 'role' ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin:role.index') }}" data-i18n="Role">Role</a></li>
                    {{-- <li class="{{ Request::segment(2) == 'permission' ? 'active' : '' }}"><a class="menu-item" href="{{ route('admin:permission.index') }}" data-i18n="Permission">Permission</a></li> --}}
                </ul>
            </li>
            <li class="nav-item {{ Request::segment(2) == 'wilayah' || Request::segment(2) == 'filter' ? 'active' : '' }} "><a href="{{ route('admin:wilayah.index') }}"><i class="feather icon-globe"></i><span class="menu-title" data-i18n="Data User">Data Wilayah</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->