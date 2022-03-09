
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>
      <!-- Topbar Search -->
      <!--
        ToDo:  SEARCH BAR TO BE ADDED AT A LATER DATE


      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form> -->
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <!--
            ADD SEARCH BAR FUNCTION LATER 
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          --->

          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown">
            <i class="fas fa-bell fa-fw"></i>            
            <!-- Counter - Alerts -->
              {{-- @if ($alerts->where('user_id', '=', session('user_id'))->count() > 0)                              
              <span class="badge badge-danger badge-counter"><div id='alertsCount'>{{$alerts->where('user_id', '=', session('user_id'))->count()}}</div></span>              
              @endif             --}}
          </a>
          <!-- Dropdown - Alerts -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
              Alerts Center
            </h6>
                {{-- Foreach Loop --}}
                @yield('alerts')
                {{-- end foreach --}}
              {{-- @if ($alerts->where('user_id', '=', session('user_id'))->count() == 0)
                <div class="text-center text-muted p-3">No new alerts</div>
              @endif --}}
            <a class="dropdown-item text-center small text-gray-500" href="/profile/alerts">Show All Alerts</a>
          </div>
          
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
          
          {{-- START --}}
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown">
          <i class="fas fa-envelope fa-fw"></i>
          <!-- Counter - Messages -->
          {{-- @if ($messages->where('user_id', '=', session('user_id'))->count() > 0)
          
          <span class="badge badge-danger badge-counter"><div id="messageCount">{{$messages->where('user_id', '=', session('user_id'))->count()}}</div></span>
            
          @endif         --}}
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">
            Message Center
          </h6>
            @yield('messages')
            {{-- @if ($messages->where('user_id', '=', session('user_id'))->count() == 0)
              <div class="text-center text-muted p-3">No new messages</div>
            @endif --}}
          <a class="dropdown-item text-center small text-gray-500" href="/profile/messages">Read More Messages</a>
        </div>          
          {{-- END --}}
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{session('username')}}</span>
            <img class="img-profile rounded-circle" src="{{asset('files/images/undraw_profile.svg')}}">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{route('dashboard')}}">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            {{-- <a class="dropdown-item" href="/profile">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <a class="dropdown-item" href="/profile/activity">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Activity Log
            </a> --}}
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
          
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->