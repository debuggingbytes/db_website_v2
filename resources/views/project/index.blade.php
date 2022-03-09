@extends('template')
@section('dashLocation')
  Assign Projects
@endsection
{{-- 
      Form method needs to be setup for AssignProject Controller to allow data to be submitted.

  
  --}}

@section('alerts')
  @include('dashboard.notifications.alerts')
@endsection

@section('messages')
  @include('dashboard.notifications.messages')
@endsection

@section('content')

  <div class="col-md p-4">
    @if(Session::has('message'))
    <div class="col-md-7 my-3 mx-auto alert {{ Session::get('alert-class', 'alert-success') }}"><i class="fas fa-exclamation fa-2xl text-grey-300"></i> {{ Session::get('message') }}</div>
    @endif
    <x-forms.form></x-forms.form>
      <div class="mb-3">
        {{-- Create dropdown list with every user in database
            Create Component for dropdown list / select
          --}}
        
        <x-forms.label for='assigned_to' text='Assigned to' options="class='form-label'" />
        <x-forms.input name="user_id" value="" options="class='form-control' id='project_name' placeholder='Project Name...'" />
      </div>
      <div class="mb-3">
        <x-forms.label for='project_name' text='Project Name' options="class='form-label'" />
        <x-forms.input name="title" value="" options="class='form-control' id='project_name' placeholder='Project Name...'" />
      </div>
      <div class="mb-3">
        <x-forms.label for='sent_time' text='Sent At' options="class='form-label'" />
        <x-forms.date name='sent_time' value='' options="class='form-control' id='assignDate'" /> 
      </div>
      <div class="mb-3">
        <x-forms.label for='due_date' text='Due Date' options="class='form-label'" />
        <x-forms.date name='due_date' value='' options="class='form-control' id='due_date'" /> 
      </div>
      <div class="mb-3">
        <x-forms.label for='description' text='Project Description' options='class="form-label"' />
        <x-forms.textarea name='details' value='' options='class="form-control" id="description"' />
      </div>
      <div class="mb-3">      
        <x-forms.button text='Submit' options='type="submit" class="btn btn-primary" id="submit"' />
      </div>  
      <input type='hidden' value='{{session('user_id')}}'  name='from_id'>

    </div>
    
@endsection