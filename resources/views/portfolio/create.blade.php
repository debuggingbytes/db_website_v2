@extends('layouts.dashboard_template')
@section('content')
<div class="row mt-2">
  <div class="col-md p-2">

    <div class="card shadow" style="min-height: 50vh;">
      @if(Session::has('message'))
      <div class="row p-3 mt-2">
        <div class="col-md-6 mx-auto alert alert-success">
          {{Session::get('message')}}
        </div>
      </div>
      @endif
      <div class="row">
        <div class="col-md-6 mx-auto mt-3 p-3">
          {!! Form::open(['route' => 'portfolio.store', 'class' => 'form-group', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
          <div class="mb-3">
            {!! Form::label('portfolio_name', "Portfolio Name", ['class' => 'form-label']) !!}
            {!! Form::text('portfolio_name', null, ['class' => 'form-control']) !!}
          </div>
          <div class="mb-3">
            {!! Form::label('portfolio_url', "Portfolio URL", ['class' => 'form-label']) !!}
            {!! Form::text('portfolio_url', null, ['class' => 'form-control']) !!}
          </div>
          <div class="mb-3">
            {!! Form::label('portfolio_img', "Portfolio Image", ['class' => 'form-label']) !!}
            {!! Form::file('portfolio_img', ['class' => 'form-control']) !!}
          </div>
          <div class="mb-3">
            {!! Form::label('portfolio_text', "Portfolio Text", ['class' => 'form-label']) !!}
            {!! Form::textarea('portfolio_text', null, ['class' => 'form-control']) !!}
          </div>
          <div class="mb-3 text-end">
            {!! Form::submit('Submit', ['class' => 'btn btn-info ']) !!}
          </div>
      
          {!! Form::close() !!}
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection