<!-- Begin Page Content -->
<div class="container-fluid">  
  <!-- Page Heading --> 
  <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
  <div class="row">
    <div class="col-lg-3 rounded-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 p-3">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Statistics</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                Total Projects: {{count($clients)}}<br>
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
    <div class="col-lg-3 rounded-3 col-md-6 mb-4">
      <a href='#' class='text-decoration-none'>
        <div class="card border-left-danger shadow h-100 p-3">
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
    {{-- <x-card  cardName='Open Projects' cardText="{{count($clients->where('completed', '=', 0))}}" cardColour='info'/> --}}
    <div class="col-lg-3 rounded-3 col-md-6 mb-4">
      <a href='#' class='text-decoration-none'>
        <div class="card border-left-info shadow h-100 p-3">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                  Open Projects</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($clients->where('completed', '=', 0))}}</div>
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
    <div class="col-lg-3 rounded-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 p-3">
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
  {{-- Server information at a glance --}}
   
   
  <div class="card my-3">
    <div class="card-header">
      <strong>Server Information</strong>
    </div>
    <div class="row p-2 my-2">
      {{-- <x-card cardName="Server Stats" cardText="This is !!!!a test" cardColour='danger'/>
      <x-card cardName="Server Stats" cardText="This is !!!!a test" cardColour='danger'/> --}}

    </div>
  </div>


  {{-- End Server Information --}}
  

  {{-- CLIENTS --}}

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-dark">Clients</h6>
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
                <td><a href='{{route('client.show', $client->id)}}' class='text-decoration-none'> {{$server->twitch ? $client->TwitchName : $client->fullName }} </a></td>
                <td>{{$server->twitch ? $client->TwitchEmail : $client->email}}</td>
                <td>{{$server->twitch ? $client->TwitchPhone : $client->phone}}</td>
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