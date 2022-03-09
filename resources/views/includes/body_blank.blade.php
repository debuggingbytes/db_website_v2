<div class="container-fluid" style="min-height: 80vh;">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Dashboard: @yield('dashLocation')</h1>
    <!-- Main Profile Section -->
    @yield('content')
  <a href="{{ URL::previous() }}" class="btn btn-warning mb-3"> <i class="fas fa-arrow-left"></i> Go Back</a>
</div>