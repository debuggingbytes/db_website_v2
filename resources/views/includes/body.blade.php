<div class="container-fluid" style="min-height: 80vh;">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Dashboard: @yield('dashLocation')</h1>
 
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class='row d-flex'>
        <div class='col-md m-0 font-weight-bold text-primary'>
          <strong>@yield('header')</strong>
        </div>
      </div>
    </div>
    <!-- Main Profile Section -->
    @yield('content')
  </div>
  <a href="{{ URL::previous() }}" class="btn btn-warning mb-3"> <i class="fas fa-arrow-left"></i> Go Back</a>
</div>