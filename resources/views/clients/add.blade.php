@extends('template')

@section('dashLocation')
  Add new client
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md">
        {!! Form::open(['class' => 'p-2 m-2']) !!}
        <div class="form-group">
          <x-forms.label for='client_name' text='Client Name' options='class="form-label"' />
          <x-forms.input name='client_name' value='' options='class="form-control" id="client_name"'/>
        </div>
        <div class="form-group">
          <x-forms.label for='start_date' text='Start Date' options='class="form-label"' />
          <x-forms.date name='start_date' value='' options='class="form-control" id="start_date"'/>
        </div>
        <div class="form-group">
          <x-forms.label for='due_date' text='Due Date' options='class="form-label"' />
          <x-forms.date name='due_date' value='' options='class="form-control" id="due_date"'/>
        </div>
        <div class="form-group">
          <x-forms.button text='Add Client' options="class='btn btn-info'"/>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection