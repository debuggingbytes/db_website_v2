@extends('index')
@section('workflow')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class='row d-flex'>
      <div class='col-md-8'>
        <strong>Project Details</strong>
      </div>
      <div class="col-md">
        <strong> Submitted Date</strong>
      </div>
      <div class="col-md text-center">
        <strong> Due In</strong>
      </div>
    </div>
  </div>
  <div class="card-body">
    {{-- Projects foreach --}}
    
    @foreach($projects as $project)
    <div class='row d-flex activity-feed border-left-info'>
      <div class='col-md-8 text-justify text-wrap text-break'>
        <a href='/project/{{$project->id}}'><i class="fas fa-project-diagram mx-1"></i>
        <strong>{{substr($project->title,0,140)}}</strong></a> : <small>{{substr($project->details,0,120)}}</small> 
      </div>
      <div class="col-md">
        {{\Carbon\Carbon::parse($project->sent_time)->diffForHumans();}}
      </div>
      <div class="col-md text-center">
        {{\Carbon\Carbon::parse($project->due_date)->diffForHumans();}}
      </div>
    </div>
    @endforeach
    {{-- end projects foreach --}}
  </div>
</div>
@endsection

@section('actions')
  @foreach ($activity as $action )
    
  <div class='row d-flex activity-feed'>
    <div class='col-md-2 spacer'>
      {{Auth::user()->name}}
    </div>
    <div class="col-md-2 spacer">
      {{$action->action}}
    </div>
    <div class="col-md text-center spacer">
      {{$action->details}}
    </div>
    <div class="col-md-2 spacer text-right">
      {{\Carbon\Carbon::parse($action->created_at)->diffForHumans();}}
    </div>
  </div>
  @endforeach
@endsection

@section('alerts')
  @include('dashboard.notifications.alerts')  
@endsection

@section('messages')
  @include('dashboard.notifications.messages')
@endsection