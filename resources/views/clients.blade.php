<x-layouts.header />
<x-layouts.sidebar/>
<x-layouts.top-header/>
<x-layouts.blank-body>

  @section('dashLocation')
  Client List
  @endsection
  
  @section('header')
  List of all clients
  @endsection
  @section('content')
  <div class="row mx-5">
    <div class="container-fluid">
      <div class="row my-2 p-3">
        <div class="col-md" ><a href='{{route('client.create')}}' class='btn btn-info'><i class="fas fa-plus"></i> Add Client</a></div>
        </div>
        <div class="card my-3 p-3">
          <div class="card-body px-2">
            <div class="row border-bottom border-1 mb-3 pb-3">
              <div class="col-md-1 border-right border-1">
                <strong>Client ID</strong>
              </div>
              <div class="col-md-7">
                <strong>Clients Name</strong>
              </div>
              <div class="col-md">
                <strong>Status</strong>
              </div>
              <div class="col-md">
                <strong>Due Date</strong>
              </div>
            </div>
            @if (count($clients) < 1)
            <h4 class='text-center text-info p-2'>All projects have been completed.</h4>
            @endif
            @foreach ($clients as $client)
            @php
              $completed = $client->completed ? "<span class='text-success'>Completed</span>" : "<span class='text-danger'>Incomplete</span>";
              @endphp
            <div class="row border-bottom border-1 mb-2 pb-2">
              <div class="col-md-1 border-right border-1">
                <a href="{{route('client.show', $client->id)}}" class='btn btn-info btn-sm'><i class="fas fa-search"></i></a>
              </div>
              <div class="col-md-7">
                <span class='text-grey-300'>{{$server->twitch ? $client->TwitchName : $client->fullName }}</span>
              </div>
              <div class="col-md">
                <span class='text-grey-300'>{!! $completed !!}</span>
              </div>
              <div class="col-md ms-auto">
                Due Date: {{Carbon\Carbon::parse($client->due_date)->diffForHumans()}}
              </div>
            </div>
            
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
    
    @endsection
  </x-layouts.blank-body>
  <x-layouts.footer/>