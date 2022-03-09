
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dashboard')}}">
    <div class="sidebar-brand-icon" style="font-size: 24px;">
      <i class="fas fa-tools fa-5x"></i>
    </div>

  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{url('/dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
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
        {{-- <a class="collapse-item " href="{{route('editclient')}}">Edit Client</a> --}}
        {{-- <a class="collapse-item " href="{{route('deleteclient')}}">delete Client</a> --}}
      </div>
    </div>
  </li>
  
  {{-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTickets">
      <i class="fas fa-id-badge"></i>
      <span>Support Tickets</span>
    </a>
    <div id="collapseTickets" class="collapse " data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item " href="{{route('addclient')}}">Open Tickets</a>
        <a class="collapse-item " href="{{route('clients')}}">Closed Tickets</a>
      </div>
    </div>
  </li> --}}
  @endif
  
  <!--
    <hr class="sidebar-divider">
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser">
        <i class="fas fa-id-badge"></i>
        <span>User Management</span>
      </a>
      <div id="collapseUser" class="collapse" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item " href="users-management.php?method=add_user">Add User</a>
          <a class="collapse-item " href="users-management.php?method=mod_user">Modify User</a>
          <a class="collapse-item " href="users-management.php?method=del_user">Delete User</a>
          <a class="collapse-item " href="users-management.php?method=user_activity">Users Activity Feed</a>
        </div>
      </div>
    </li>
  -->
    <!-- Divider -->
    {{-- <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Projects
    </div>
    <li class="nav-item">
      <a class="nav-link" href="admin.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Assign Project</span></a>
    </li> --}}
 
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"><i class="fas fa-expand-alt"></i></button>
  </div>
</ul>
<!-- End of Sidebar -->