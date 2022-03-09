@extends('template')

@section('dashLocation')
  Profile
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
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <h4>{{$profile->name}}</h4>
                <button class="btn btn-primary">Change Image</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card mt-3">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Project Name</h6>
              <span class="text-secondary">Due Date</span>
            </li>
            @foreach ($projects as $project)
              
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0"><a href="{{url('/project/' . $project->id)}}">{{$project->title}}</a></h6>
              <span class="text-secondary">{{\Carbon\Carbon::parse($project->due_date)->diffForHumans()}}</span>
            </li>

            @endforeach

          </ul>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{$profile->name}}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{$profile->email}}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Member Since</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{\Carbon\Carbon::parse($profile->created_at)->diffForHumans()}}
              </div>
            </div>
            
          </div>
        </div>

        <div class="row gutters-sm">
          <div class="col-sm-6 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Last 5 Alerts</i></h6>
                
                <ul class="list-group list-group-flush">
                  @if ($alerts->where('user_id', '=', session('user_id'))->count() <= 0)
                    <li class='list-group-item text-center'>No alerts</li>
                  @else
                    @foreach ($alerts as $alert)                 
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap"><small><i class='{{$alert->icon_path}}'></i> {{$alert->details}}</small></li>
                    @endforeach 
                  @endif    
                </ul>           
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Last 5 Messages</i></h6>
                <small>Web Design</small>
                <div class="progress mb-3" style="height: 5px">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small>Website Markup</small>
                <div class="progress mb-3" style="height: 5px">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small>One Page</small>
                <div class="progress mb-3" style="height: 5px">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small>Mobile Template</small>
                <div class="progress mb-3" style="height: 5px">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small>Backend API</small>
                <div class="progress mb-3" style="height: 5px">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
      </div>




@endsection