<x-layouts.header/>
<x-layouts.sidebar/>
<x-layouts.top-header/>
<x-layouts.blank-body>

  @section('dashLocation')Server Management @endsection
  @section('content')
    <div class="row">
      <div class="col-md">
        <div class="card shadow p-2 mt-2" style="min-height: 50vh;">
          <div class="row">
            <div class="col-md p-2 mt-3">
              @if (Session::has('message'))
                <div class="col-md-6 mx-auto alert alert-success text-center">
                  {{Session::get('message')}}
                </div>
                
              @endif
              <div class="row px-2 d-flex align-items-center justify-content-evenly mx-auto">
                <div class="col-md-2">
                  <p class="content">
                    {!! Form::open(['route' => ['server.update', $server->id], 'method' => 'PATCH']) !!}
                    @if ($server->clients)
                      {!! Form::hidden('clients', '0') !!}
                      {!! Form::submit('Turn Off Portfolio', ['class' => 'btn btn-danger']) !!}
                    @else
                    {!! Form::submit('Turn On Portfolio', ['class' => 'btn btn-success']) !!}  
                    {!! Form::hidden('clients', true) !!}
    
                    @endif
                    {!! Form::close() !!}
                  </p>
                </div>                 
                <div class="col-md-2">
                  <p class="content">
                    {!! Form::open(['route' => ['server.update', $server->id], 'method' => 'PATCH']) !!}
                    @if ($server->services)
                      {!! Form::hidden('services', '0') !!}
                      {!! Form::submit('Turn Off Services', ['class' => 'btn btn-danger']) !!}
                    @else
                    {!! Form::submit('Turn On Services', ['class' => 'btn btn-success']) !!}  
                    {!! Form::hidden('services', true) !!}
    
                    @endif
                    {!! Form::close() !!}
                  </p>
                </div>       
                <div class="col-md-2">
                  <p class="content">
                    {!! Form::open(['route' => ['server.update', $server->id], 'method' => 'PATCH']) !!}
                    @if ($server->login)
                      {!! Form::hidden('login', '0') !!}
                      {!! Form::submit('Turn Off Login', ['class' => 'btn btn-danger']) !!}
                    @else
                    {!! Form::submit('Turn On Login', ['class' => 'btn btn-success']) !!}  
                    {!! Form::hidden('login', true) !!}
    
                    @endif
                    {!! Form::close() !!}
                  </p>
                </div>
                <div class="col-md-2">
                  <p class="content">
                    {!! Form::open(['route' => ['server.update', $server->id], 'method' => 'PATCH']) !!}
                    @if ($server->twitch)
                      {!! Form::hidden('twitch', '0') !!}
                      {!! Form::submit('Turn Off Twitch Mode', ['class' => 'btn btn-danger']) !!}
                    @else
                    {!! Form::submit('Turn On Twitch Mode', ['class' => 'btn btn-success']) !!}  
                    {!! Form::hidden('twitch', true) !!}
    
                    @endif
                    {!! Form::close() !!}
                  </p>
                </div>
              </div>
              <div class="row">
                @if ($server->twitch)
                <div class="col-md d-flex justifiy-content-center align-items-center">
                  <img src="{{asset('files/images/Twitch-Logo.png')}}" alt="Twitch privacy mode" class='img-fluid'>
                </div>                  
                @endif
                <div class="col-md p-1 mt-3">
                  @php
                    $profolio = $server->clients ? 'success' : 'danger';
                    $services = $server->services ? 'success' : 'danger';
                    $login = $server->login ? 'success' : 'danger';
                  @endphp     
                  <x-card cardName='Portfolio Status' cardText="JustinCodR is a really coool dude" cardColour='{{$profolio}}' cardIcon="fas fa-server"></x-card>
                  <x-card cardName='Services Status' cardText="" cardColour='{{$services}}' cardIcon="fas fa-server"></x-card>
                  <x-card cardName='Login Server' cardText="" cardColour='{{$login}}' cardIcon="fas fa-server"></x-card>           
    
                </div>
              </div>           
          </div>
        </div>
      </div>
    </div>
  @endsection
</x-layouts.blank-body>
<x-layouts.footer/>