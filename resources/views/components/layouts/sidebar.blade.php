
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dashboard')}}">
    <div class="sidebar-brand-icon" style="font-size: 24px;">
      <i class="fas fa-tools fa-5x"></i>
    </div>

  </a>
  <!-- Divider -->
  {{--     
    Server Management Links
  --}}
  <div class="sidebar-heading mt-2">
    Dashboard Settings
  </div>
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{url('/dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard Home</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Home Page</span></a>
    </li>
  <hr class="sidebar-divider my-0">
  @if (Auth::user()->is_admin)
  <div class="sidebar-heading mt-2">
    Server Management
  </div>
  <li class="nav-item">
    <a class="nav-link" href="{{route('server.index')}}">
      <i class="fas fa-fw fa-server"></i>
      <span>Server Settings</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('service.index') }}">
      <i class="fas fa-fw fa-server"></i>
      <span>Manage Services</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('portfolio.index')}}">
      <i class="fas fa-fw fa-server"></i>
      <span>Manage Portfolio</span></a>
  </li>
  @endif

  {{--     
    END SERVER MANGENENT LINKS
  --}}
  
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Nav Item - Dashboard -->
  @if (Auth::user()->is_admin)
  <div class="sidebar-heading mt-2">
    Client Management
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfile">
      <i class="fas fa-id-badge"></i>
      <span>Clients</span>
    </a>
    <div id="collapseProfile" class="collapse " data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item " href="{{route('client.index')}}">All Clients</a>
        <a class="collapse-item " href="{{route('client.create')}}">Add Client</a> 
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNote">
      <i class="fas fa-id-badge"></i>
      <span>Notes</span>
    </a>
    <div id="collapseNote" class="collapse " data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item " href="">Notes</a>
        <a class="collapse-item " href="">Note Images</a>
      </div>
    </div>
  </li>
  @endif
  

 
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"><i class="fas fa-expand-alt"></i></button>
  </div>
</ul>
<!-- End of Sidebar -->