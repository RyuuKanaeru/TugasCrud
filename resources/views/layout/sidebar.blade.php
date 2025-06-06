<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sisfo Pegawai</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route('departemen.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Departemen</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route('karyawan.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Karyawan</span></a>
    </li>

    <!-- Divider -->

</ul>