@extends('layouts.dashboard_template')
@section('dashLocation')
Portfolio
@endsection
@section('content')
<div class="row">
  <div class="col-md mx-auto">
    <div class="card shadow">
      <div class="row">        
        <div class="col-md">
          <img src="{{ asset('files/images/portfolio.jpg') }}" alt="Portfolio brah" class="img-fluid p-1"/>
        </div>
        <div class="col-md pe-3 pt-1">
          <ul class='list-group'>
            @if($server->clients)
              @foreach ($portfolio as $client)    
              <li class='list-group-item'> <a href="{{ route('portfolio.edit', $client->id) }}">{{$client->portfolio_name}}</a></li>
              @endforeach              
            @endif
          </ul>
          <a href='{{route('portfolio.create')}}' class='btn btn-info mt-3'><i class="fa-solid fa-folder-plus"></i> Add Portfolio</a>                     
        </div>
      </div>
    </div>
  </div>
</div>
@endsection