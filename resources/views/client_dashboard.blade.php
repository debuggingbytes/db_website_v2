<x-layouts.header/>
<x-layouts.top-header/>
<x-layouts.blank-body>
  @section('dashLocation')
    Your Website
  @endsection
  @section('content')
  <div class="container-fluid">
    <div class="row my-2 p-3">
      <div class="col-md">
        <div class="card">
          <div class="card-body">
            <h3 class="card-text text-center mt-2 mb-5">Welcome to your dashboard, here you can find the information regarding your website including development notes.</h3>
            <x-client-view />
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row my-2 p-3">
      <div class="col-md">
        <div class="card">
          <div class="card-body">
            <h3 class="card-text text-center mt-2 mb-5">Your development notes.</h3>
            <x-client-note-view />
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
</x-layouts.blank-body>
<x-layouts.footer/>