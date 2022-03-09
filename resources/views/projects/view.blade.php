@extends('template')
@section('dashLocation')
  View Project
@endsection
@section('header')
  Project #{{$project->id}} - {{$project->title}} details
@endsection
@section('alerts')
  @include('dashboard.notifications.alerts')
@endsection

@section('content')
<div class='row d-flex activity-feed pl-5 pr-5 pt-3'>
  <div class="col-md-2">
    <div class="row">
      <div class="col-md">
        <h5></h5>
      </div>
    </div>
    <div class="row">
      <div class="col-md">Assigned</div>
    </div>
    <div class="row">
      <div class="col-md">Due</div>
    </div>
  </div>
  <div class="col-md">
    <div class="row">
      <div class="col-md">
        &nbsp;
      </div>
    </div>
    <div class="row">
      <div class="col-md">{{\Carbon\Carbon::parse($project->sent_time)->diffForHumans();}}</div>
    </div>
    <div class="row">
      <div class="col-md">{{\Carbon\Carbon::parse($project->due_date)->diffForHumans();}}</div>
    </div>
  </div>
</div>
<div class='row d-flex activity-feed pl-5 pr-5 pt-1'>
  <div class="col-md">
    <h5>Description</h5>
  </div>
</div>
<div class='row d-flex activity-feed pl-5 pr-5'>
  <div class="col-md">
    {{$project->details}}
  </div>
</div>
<div class='row d-flex activity-feed pl-5 pr-5 pt-1'>
  <div class="col-md">
    <button onClick='completeTask({{$project->id}}, {{$project->user_id}}, "{{$project->title}}")' class='btn btn-success' title="Complete Task" name="complete" value="PROJECT_ID"><i class="fas fa-check"></i></button>
    
      <button class='btn btn-warning' title="Edit Task" name="edit" value="PROJECT_ID"><i class="fas fa-edit"></i></button>
      <button class='btn btn-danger' title="Delete Task" name='del' value="PROJECT_ID"><i class="fas fa-times"></i></button>
    
  </div>
</div>
<div class="row">
  <div id='message' class="col-md text-center">
  </div>
</div>
@endsection