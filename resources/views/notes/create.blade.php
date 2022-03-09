@extends('template')

@section('dashLocation')
  Note View
@endsection

@section('header')
<a href='{{url('/client/'.$client->id)}}'>{{$client->fullName}}</a>
@endsection

@section('alerts')
  @include('dashboard.notifications.alerts')
@endsection

@section('messages')
  @include('dashboard.notifications.messages')
@endsection

@section('content')

@if (count($errors) > 0)
  <div class="alert alert-danger col-md-7 mt-3 mx-auto">
    <h3 class='text-center'>Errors Detected</h3>
    <div class="row d-flex">
      <div class="col-md-1">
        <i class="fas fa-exclamation fa-2x"></i>
      </div>
      <div class="col-md">
        <ul>
          @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    </div>
    
  </div>
@endif

<div class="row py-2 px-3">
  <div class="col-md">

    {!! Form::open(['action' => 'App\Http\Controllers\NotesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {!! Form::label('content', 'Note content:', ['class' => 'form-label'] ) !!}
      {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'editor']) !!}   
      
      {{-- Submit Button --}}
      {!! Form::submit('Create Note', ['class' => 'btn btn-primary my-2']) !!}
      {!! Form::hidden('client_id', $client->id) !!}
    </div>
    {!! Form::close() !!}
  </div>
</div>

@endsection