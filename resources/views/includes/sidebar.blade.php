<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('image.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Str::limit( auth()->user()->name, 15, '...') }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="{{ route('home') }}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Categories
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/photos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Photos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="documents" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Documents</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="events" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="music" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Music</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="videos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Video</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="notes" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Notes</p>
              </a>
            </li>
          </ul>
        </li>
      

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
