<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/Djaja2.png') }}" alt="BPPD Palembang" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BPPD Palembang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/karyawan.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link {{Request::segment(1) ==='home' ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <span class="sr-only">(current)</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/adm')}}" class="nav-link {{Request::segment(1) ==='adm' ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/cuti')}}" class="nav-link {{Request::segment(1) ==='cuti' ? 'active' : '' }}">
               <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Pengajuan Cuti
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/karyawan')}}" class="nav-link {{Request::segment(1) ==='karyawan' ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Karyawan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/kritik')}}" class="nav-link {{Request::segment(1) ==='kritik' ? 'active' : '' }}">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Kritik
              </p>
            </a>
          </li>
            
          <li class="nav-item">
            <a href="{{url('/logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>