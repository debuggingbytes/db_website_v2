<x-layouts.header />
<x-layouts.sidebar />
<x-layouts.top-header />
<x-layouts.blank-body>
  @section('dashLocation')
    <em>Add new client</em>
  @endsection
  @section('content')
  @if(Session::has('message'))
    <div class="col-md-7 my-3 mx-auto alert {{ Session::get('alert-class', 'alert-success') }}"><i class="fas fa-exclamation fa-2xl text-grey-300"></i> {{ Session::get('message') }}</div>
  @endif
    <div class="row my-2">
      <div class="col-md">
        
        <div class="card p-4">
          <h3 class='mb-4'>Please insert new client information</h3>
            {{ Form::open(['route' => 'client.store']) }}
            <div class="row">
              <div class="col-md mt-2 mt-md-0">
                <div class="card">
                  <div class="card-header">
                    Basic Information
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      {!! Form::label('floatingFullName', 'Client Name') !!}
                      {!! Form::text('fullName', '', ["class='form-control' id='floatingFullName' placeholder='Full Name' "]) !!}
                    </div>
                    <div class="mb-3">
                      {!! Form::label('email', 'Client Email') !!}
                      {!! Form::email('email', '', ["class='form-control' id='email' placeholder='name@email.com' "]) !!}
                    </div>
        
                    <div class="mb-3">
                      {!! Form::label('phone', 'Client Phone') !!}
                      {!! Form::tel('phone', '', ["class='form-control' id='phone' placeholder='(123) 456-7890' "]) !!}
                    </div>
                    <div class="mb-3">
                      {!! Form::label('created_at', 'Start Date') !!}
                      {!! Form::date('created_at', '', ["class='form-control' id='created_at' placeholder='Full Name' "]) !!}
                    </div>
                    <div class="mb-3">
                      {!! Form::label('due_date', 'Deadline Date') !!}
                      {!! Form::date('due_date', '', ["class='form-control' id='due_date' placeholder='Full Name' "]) !!}
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md mt-2 mt-md-0">
                <div class="card">
                  <div class="card-header">
                    Website Information
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      {!! Form::label('website', 'Website URL') !!}
                      {!! Form::text('website', '', ["class='form-control' id='website' placeholder='http:// ......' "]) !!}
                    </div>
                    <div class="mb-3">
                      {!! Form::label('responsive', 'Responsive Design') !!}
                      {!! Form::select('responsive', ['selected' => 'Option Selected', 'no_select' => 'Not Selected'], null, ['class' => 'form-select', 'id' => 'responsive']) !!}
                    </div>
                    <div class="mb-3">
                      {!! Form::label('domain', 'Domain Registration') !!}
                      {!! Form::select('domain', ['selected' => 'Purchase Required', 'no_select' => 'No Purchase Required'], null, ['class' => 'form-select', 'id' => 'responsive']) !!}
                    </div>
                    <div class="mb-3">
                      {!! Form::label('tech_support', 'Technical Support') !!}
                      {!! Form::select('tech_support', ['selected' => '1 Year', 'no_select' => 'Not Selected'], null, ['class' => 'form-select', 'id' => 'responsive']) !!}
                    </div>
                    <div class="mb-3">
                      {!! Form::label('cost', 'Website Cost') !!}
                      {!! Form::text('cost', '', ["class='form-control' id='cost' placeholder='$0.00' "]) !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>          
            
            {!! Form::submit('Submit', ["class='btn btn-primary p-2 mt-2'"]) !!}
            
            {{ Form::close() }}
          </div>
        </div>        
      </div>
    </div>
  @endsection
</x-layouts.blank-body>
<x-layouts.footer />