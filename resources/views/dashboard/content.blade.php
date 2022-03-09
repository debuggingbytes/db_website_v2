<!-- Begin Page Content -->
<div class="container-fluid">  
  <!-- Page Heading --> 
  <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Statistics</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                Total Projects: {{$totalProject}}<br>
                Total Tickets: 0               
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-chart-bar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <a href='profile.php?s=tickets' class='text-decoration-none'>
        <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                  Open Tickets</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-bug fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <a href='/profile' class='text-decoration-none'>
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                  Open Projects</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$projects->where('completed', '=', '0')->count()}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- Invoice Card -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Invoices Due</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-receipt fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Invoice Card  -->

  </div>
  <!-- Work flow -->
   @yield('workflow')

  {{-- Activity Feed --}}

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Activity List</h6>
    </div>
    <div class="card-body">
      <div class='row d-flex activity-feed'>
        <div class='col-md-2'>
          <strong>Username</strong>
        </div>
        <div class="col-md-2">
          <strong> Action</strong>
        </div>
        <div class="col-md text-center">
          <strong> Details</strong>
        </div>
        <div class="col-md-2 text-right">
          <strong> Date</strong>
        </div>
      </div>

      @yield('actions')
      
      <div class='row d-flex activity-feed'>
        <div class='col-md-2'>
          <strong>Username</strong>
        </div>
        <div class="col-md-2">
          <strong> Action</strong>
        </div>
        <div class="col-md text-center">
          <strong> Details</strong>
        </div>
        <div class="col-md-2 text-right">
          <strong> Date </strong>
        </div>
      </div>
    



    </div>
  </div>

  {{-- CLIENTS --}}

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Latest Clients</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Website Type</th>
              <th>Received</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Website Type</th>
              <th>Received</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($clients as $client)
           
              <tr>
                <td>{{$client->id}}</td>
                <!-- Add link to client page  -->
                <td><a href='{{url('/client/'. $client->id)}}'> {{-- {{$client->fullName}}  --}}</a></td>
                <td>{{--{{$client->email}} --}}</td>
                <td>{{--{{$client->phone}} --}}</td>
                <td>{{$client->website}}</td>
                <td>{{\Carbon\Carbon::parse($client->created_at)->diffForHumans()}}</td>
  
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

      {{-- EOP --}}


</div>
<!-- End of Main Content -->