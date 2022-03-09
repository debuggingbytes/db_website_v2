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
@if(Session::has('message'))
    <div class="col-md-7 my-3 mx-auto alert {{ Session::get('alert-class', 'alert-success') }}"><i class="fas fa-exclamation fa-2xl text-grey-300"></i> {{ Session::get('message') }}</div>
  @endif
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
  <div class="col-md-1">
     <form method='POST' class="form-group" action={{route('project.update', $project->id)}}>
      @csrf @method('PATCH')
      <button class='btn btn-success' title="Complete Task" name="completed" value='1'><i class="fas fa-check"></i></button>
    </form>
  </div>
  <div class="col-md-1">
    <form method='POST' class="form-group" action={{route('project.edit', $project->id)}}>
      <button class='btn btn-warning' title="Edit Task" name="edit" value="PROJECT_ID"><i class="fas fa-edit"></i></button>
    </form>
  </div>
  <div class="col-md-1">
    <form method='POST' class="form-group" action={{route('project.destroy', $project->id)}}>
      @csrf @method('delete')
      <button class='btn btn-danger' title="Delete Task" name='del' value="PROJECT_ID"><i class="fas fa-times"></i></button>
    </form>
  </div>
</div>
<div class="row">
  <div id='message' class="col-md text-center">
  </div>
</div>
@endsection