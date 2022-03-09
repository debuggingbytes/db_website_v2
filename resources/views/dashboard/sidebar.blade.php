
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon" style="font-size: 24px;">
      <i class="fas fa-tools fa-5x"></i>
    </div>

  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{url('/')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfile">
      <i class="fas fa-id-badge"></i>
      <span>Clients</span>
    </a>
    <div id="collapseProfile" class="collapse " data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item " href="{{url('/clients/add')}}">Add Client</a>
        <a class="collapse-item " href="{{url('/client')}}">Client List</a>
      </div>
    </div>
  </li>
  <!-- Divider -->

  <!-- <hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-users"></i>
      <span>Clients</span></a>
  </li> -->
  <!-- Divider -->

 
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
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Projects
    </div>
    <li class="nav-item">
      <a class="nav-link" href="admin.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Assign Project</span></a>
    </li>
 


  <!-- Nav Item - Pages Collapse Menu -->
  <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo">
      <i class="fas fa-file-invoice-dollar"></i>
      <span>Billing</span>
    </a>
    <div id="collapseTwo" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="buttons.html">Time Manager</a>
        <a class="collapse-item" href="cards.html">Invoicing</a>
      </div>
    </div>
  </li> -->
  <!-- Nav Item - Utilities Collapse Menu -->
  <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Utilities:</h6>
        <a class="collapse-item" href="utilities-color.html">Colors</a>
        <a class="collapse-item" href="utilities-border.html">Borders</a>
        <a class="collapse-item" href="utilities-animation.html">Animations</a>
        <a class="collapse-item" href="utilities-other.html">Other</a>
      </div>
    </div>
  </li> -->
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"><i class="fas fa-expand-alt"></i></button>
  </div>
</ul>
<!-- End of Sidebar -->