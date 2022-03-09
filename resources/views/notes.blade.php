@extends('template')

@section('dashLocation')
  Note View
@endsection

@section('header')
<a href='{{url('/client/'.$note->client->id)}}'>{{$note->client->fullName}}</a>
@endsection

@section('alerts')
  @include('dashboard.notifications.alerts')
@endsection

@section('messages')
  @include('dashboard.notifications.messages')
@endsection

@section('content')


@if(Session::has('message'))
<div class="col-md-7 my-3 mx-auto alert {{ Session::get('alert-class', 'alert-success') }}"><i class="fas fa-exclamation fa-2xl text-grey-300"></i> {{ Session::get('message') }}</div>
@endif


<div class="row d-flex py-2 px-3">
  {{-- Left Column --}}
  <div class="col-md">
    <div class="card mb-3">
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">
            <h6 class="mb-0">Created</h6>
          </div>
          <div class="col-md text-secondary">
            {{\Carbon\Carbon::parse($note->created_at)}}
          </div>
        </div>
        <hr>      
        <div class="row">
          <div class="col-md-2">
            <h6 class="mb-0">Updated</h6>
          </div>
          <div class="col-md text-secondary">
            {{\Carbon\Carbon::parse($note->updated_at)}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <h6 class="mb-0">Content</h6>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md text-secondary">
            {!! Form::model($note, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\NotesController@update', $note->id]]) !!}
            {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'editor']) !!}  
          </div>
        </div>
        <div class="row mt-2 d-flex justify-content-end px-5">
          <div class="col-md-1 mx-2">
            {!! Form::submit('Save note', ['class' => 'btn btn-primary my-2']) !!}            
            {!! Form::close() !!}
          </div>
          <div class="col-md-1 ms-2">
            {!! Form::open([ 'method'=>'DELETE', 'action' => ['App\Http\Controllers\NotesController@destroy',  $note->id,]]) !!}
            {!! Form::submit('Delete note', ['class' => 'btn btn-danger my-2']) !!}
            {!! Form::hidden('client_id', $note->client->id) !!}
            {!! Form::close() !!}
          </div>
        </div>  
      </div>
    </div>
  </div>
</div>
@endsection