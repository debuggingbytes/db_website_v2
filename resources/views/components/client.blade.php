<div class="row py-2 px-3 mt-2">
  <div class="col-md">
    <h3>Basic Information</h3>
  </div>
</div>
<div class="row py-2 px-3 text-end">
  <div class="col-md">
    @if (!$server->twitch)
      <a href="{{route('client.edit', $client->id)}}" class="btn btn-warning">Edit Client</a>
    @else
    <a href="{{route('client.edit', $client->id)}}" data-bs-toggle="modal" data-bs-target="#warningModal" class="btn btn-warning">Edit Client</a>
    @endif
    {{-- change to form later --}}
    {!! Form::open(['route' => ['client.destroy', $client->id], 'method' => 'DELETE']) !!}
      {{-- <a href="{{route('client.destroy', $client->id)}}" class="btn btn-danger">Delete Client</a> --}}
      {!! Form::submit('Delete Client', ['class' => 'btn btn-danger mt-2']) !!}
    {!! Form::close() !!}
  </div>
</div>
<div class="row d-flex py-2 px-3">
  {{-- Left Column --}}
  <div class="col-md">
    <div class="card mb-3">
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">
            <h6 class="mb-0">Full Name</h6>
          </div>
          <div class="col-md text-secondary">
            {{ 
              $server->twitch ? $client->TwitchName : $client->fullName;  
            }}
          
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <h6 class="mb-0">Email</h6>
          </div>
          <div class="col-md text-secondary">
            {{ 
              $server->twitch ? $client->TwitchEmail : $client->email;  
            }}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <h6 class="mb-0">Phone</h6>
          </div>
          <div class="col-md text-secondary">
            {{ 
              $server->twitch ? $client->TwitchPhone : $client->phone;  
            }}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <h6 class="mb-0">Website</h6>
          </div>
          <div class="col-md text-secondary">
            {{$client->website}}
          </div>
        </div>        
      </div>
    </div>
  </div>
  {{-- Right Column --}}
  <div class="col-md">
    <div class="row">
      <div class="col-md mb-4">      
        <div class="card border-left-success shadow h-100 py-1 px-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                  Start Date</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{\Carbon\Carbon::parse($client->created_at)->diffForHumans();}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-laptop-code fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>      
      </div>
    </div>
    <div class="row">
      @php 
      $border = $client->completed ? 'border-left-success' : 'border-left-danger'; 
      $text = $client->completed ? 'text-success' : 'text-danger';
      @endphp
      <div class="col-md mb-4">      
        <div class="card {{$border}} shadow h-100 py-1 px-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold {{$text}} text-uppercase mb-1">
                  Due Date</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  @if ($client->completed)
                    <h4 class="text-info text-center">PROJECT COMPLETED</h4>
                  @elseif (!$client->due_date)
                    <h4 class="text-info text-center">Not assigned</h4>       
                  @else
                  {{\Carbon\Carbon::parse($client->due_date)->diffForHumans();}}

                  @endif
                </div>
              </div>              
              <div class="col-auto">
                <i class="fas fa-exclamation fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>      
      </div>
    </div>
  </div>
</div>
@if(Session::has('message'))
<div class="col-md-7 my-3 mx-auto alert {{ Session::get('alert-class') }}"><i class="fas fa-exclamation fa-2xl text-grey-300"></i> {{ Session::get('message') }}</div>
@endif

<div class="row py-2 px-3">
  <div class="col-md">
    <h3>Development Notes</h3>
  </div>
</div>
<div class="row py-2 px-3">
  <div class="col-md">
    <div class="card mb-3">
      <div class="card-body">
        {{-- {{$client->id}} --}}
        {{--  --}}
        {{-- {{ $client->notes }} --}}


          {{-- REMOVE ME LATER --}}

          <div class="row mb-2">         
            <div class="col-md-2 text-secondary">
              <p class="h5">Title</p>
            </div>
            <div class="col-md text-secondary">
              <p class="h5">Notes content</p>
            </div>
            <div class="col-md-2 text-secondary">
               <p class="h5">Posted</p>
            </div>
            <div class="col-md-2 text-secondary">
               <p class="h5">Updated</p>
            </div>
          </div>
          {{-- Is there any notes? --}}
          @if ($client->notes->isEmpty())
            <div class="row">
              <div class="col-md text-center">
                <h5>No current notes</h5>
              </div>
            </div>
          @else
            @foreach ($client->notes as $note)
            <x-clients.note :note="$note" />
            @endforeach
          @endif
          <div class="row">
            <div class="col-md-2 mx-auto">
              <a href='{{ route('note.create', ['id' => $client->id]) }}' class='btn btn-info btn-sm'><i class="fas fa-plus"></i> Create Note</a>
            </div>
          </div>

          {{--  REMOVE ME LATER ^^^ --}}
      </div>
    </div>
  </div>
</div>
@section('modal')
<!-- Logout Modal-->
<div class="modal fade" id="warningModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-warning text-white">
      <div class="modal-header">
        <h2 class="modal-title" id="warningModalLabel">Feature disabled</h2>
        <button class="close" type="button" data-dismiss="modal">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Due to Streaming mode enabled, modifying clients is unavailable due to privacy concerns</div>
    </div>
  </div>
</div>
@endsection