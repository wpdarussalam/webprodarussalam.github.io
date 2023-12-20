<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('gambar\gambar1.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Lab CBT</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Kelola Data Master
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('user') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('prodi') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>User Prodi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('fasilitas') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Fasilitas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('kepala_cbt') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Kepala CBT</p>
              </a>
            </li>
          </ul>
        </li>
    </nav><!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Peminjaman
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="{{ route('peminjaman') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Peminjaman Internal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('peminjaman') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Semua Peminjaman</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('peminjaman.external') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Peminjaman Eksternal</p>
              </a>
            </li>
          </ul>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>