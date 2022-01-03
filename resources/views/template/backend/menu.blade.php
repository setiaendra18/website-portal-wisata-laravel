<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{url('backend/assets/img/brand/brand.png')}}"  alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('admin')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{url('manajemen-wisata')}}>
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Data Wisata</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('manajemen-kategori-wisata')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Kategori Wisata</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Event</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('manajemen-fasilitas-wisata')}}">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Fasilitas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Users</span>
              </a>
            </li>
       
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
        
      
        </div>
      </div>
    </div>
  </nav>