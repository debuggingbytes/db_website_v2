<x-layouts.header/>
<x-layouts.sidebar/>
<x-layouts.top-header/>
  <x-layouts.blank-body>
    @section('dashLocation')
      Create new service
    @endsection

    @section('content')
      <div class="row ">
        <div class="col-md-6 mx-auto">
          <div style='min-height: 50vh;' class="card shadow h-100 p-2">
            @if ($errors->any())
              <div class="alert alert-danger p-2 col-md-8 mt-3 mx-auto">
                  <span class="text-center h4">Error</span>
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
            @elseif (session('message'))
              <div class="col-md-8 mt-3 mx-auto alert alert-success">
                <div class="text-center">
                  <h2>Successfully added service</h2>
                </div>
              </div>
            @endif
            {!! Form::open(['route' => 'service.store']) !!}
            <div class="row">
              <div class="col-md">
                <div class="form-group mb-3">
                  {!! Form::label('title', 'Service Title', ['class' => 'form-label']) !!}
                  {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
                </div>
              </div>
              <div class="col-md">
                <div class="form-group mb-3">
                  {!! Form::label('link', 'Website URL', ['class' => 'form-label']) !!}
                  {!! Form::text('link', null, ['class' => 'form-control', 'id' => 'link']) !!}
                </div>
              </div>
            </div>
            <div class="form-group mb-3">
              {!! Form::label('content', 'Service Content', ['class' => 'form-label']) !!}
              {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'content']) !!}
            </div>
            <div class="row">
              <div class="col-md">
                <div class="form-group mb-3">
                  {!! Form::label('icon', 'FA Icon', ['class' => 'form-label']) !!}
                  {!! Form::text('icon', null, ['class' => 'form-control', 'id' => 'icon']) !!}
                </div>
              </div>
              <div class="col-md form-switch d-flex justify-content-center align-items-center">
                <div>
                  {!! Form::checkbox('is_available', '1', true, ['class' => 'form-check-input', 'id' => 'is_available']) !!}
                  {!! Form::label('is_available', 'Service Active', ['class' => 'form-check-label']) !!}
                
                </div>                
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                {!! Form::submit('Add Service', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection

  </x-layouts.blank-body>
<x-layouts.footer/>