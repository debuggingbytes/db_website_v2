<div class="container-fluid" style="min-height: 90vh;">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Dashboard: @yield('dashLocation')</h1>
    <!-- Main Profile Section -->
    @yield('content')
    <div class="row">
      <div class="col-md-1 ms-auto p-2">
        <a href="{{ url()->previous() }}" class="btn btn-warning mb-3"> <i class="fas fa-arrow-left"></i> Go Back</a>

      </div>
    </div>
</div>