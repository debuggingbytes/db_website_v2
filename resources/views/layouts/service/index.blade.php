<x-layouts.header/>
  <x-layouts.sidebar />
  <x-layouts.top-header/>
  <x-layouts.blank-body>
    @section('dashLocation')
      <em>Services</em>
    @endsection

    @section('content')
    <div class="row">
      <div class="col-md p-2 mb-2">
        <div class="card p-2 shadow">
           <div class="row gap-2 px-2">
             {{-- Left Column --}}
             <div class="col-md">
                {{--  Create layout --}}
                <img src="{{asset('files/images/server-rack.jpg')}}" class='img-fluid img-thumbnail mb-2 p-2' alt="">
                <div class="row d-flex justify-content-center align-items-center border-left border-success border-3 mb-2 p-2">
                  <div class="col-md">
                    <h4><i class="fas fa-server fa-fw me-2"></i>Services Status</h4>
                  </div>
                  <div class="col-md text-secondary">
                    @if($server->services)
                      <span class="text-white btn btn-success btn-sm"><strong>ACTIVE</strong></span>
                    @else
                    <span class="text-white btn btn-danger btn-sm"><strong>INACTIVE</strong></span>

                    @endif                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-md px-2 mt-2">
                      <a href="{{route('service.create')}}" class="w-100 btn btn-success"><i class="fas fa-plus"></i> Add New</a>
                  </div>
                </div>                
                @if (Session::has('message'))
                <div class="row mt-5 p-2">
                  <div class="alert alert-success col-md-6 mx-auto">
                    <p class="content">{{Session::get('message')}}</p>
                  </div>
                </div>
                @endif                            
             </div>
             {{-- Right Column --}}            
             <div class="col-md">              
                <h3>Current Services</h3>
                @if (empty($services))
                  <div class="alert alert-warning"><div class="text-center h6">No services found</div></div>
                @else
                  @foreach ($services as $service)
                    <a href="{{url("/dashboard/service/$service->id/edit")}}" class='text-decoration-none'>
                      <x-service :service="$service" />
                    </a>
                  @endforeach
                @endif
                
             </div>
           </div>
        </div>
      </div>
    </div>
    @endsection
  </x-layouts.blank-body>
<x-layouts.footer/>
