@extends('template')

@section('dashLocation')
  System Alerts
@endsection

@section('header')
  &nbsp;
@endsection

@section('alerts')
  @include('dashboard.notifications.alerts')
@endsection

@section('messages')
  @include('dashboard.notifications.messages')
@endsection

@section('content')
  <div class="p-3">
    <div class="row gutters-sm">
      <div class="col-md-12">
        <div class="card mt-3">
          <ul class="list-group list-group-flush">
            @foreach ($alerts->where('user_id', '=', session('user_id')) as $alert)
              
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0"><i class='{{ $alert->icon_path }}'></i> {{$alert->details}}</h6>
              <div>
                <span class="text-secondary"><button class="btn btn-info"><i class="fas fa-envelope-open"></i> Mark Read</button></span>
                <span class="text-secondary"><button class="btn btn-danger"><i class="fas fa-times"></i> Delete Alert</button></span>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection