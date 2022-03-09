<x-layouts.header>
  @section('scripts')
  <script>
    tinymce.init({
        selector: 'textarea',
        
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime table paste"
        ],
        toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent  ",

    });
  </script>
  @endsection
</x-layouts.header>
<x-layouts.sidebar/>
<x-layouts.top-header/>
<x-layouts.blank-body>

  @section('dashLocation')
  Creating Note for {{$client->fullName}}
  {{-- @dd($client); --}}
  @endsection

  @section('content')

  @php
    $file = [];
  @endphp

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
    @if (Session::has('message') )
      <div class="alert alert-success col-md-7 mt-3 mx-auto">
        {{Session::get('message')}}
      </div>
    @endif
    @if (Session::has('tacos') )
      <div class="alert alert-success col-md-7 mt-3 mx-auto">
        <h1 class='text-center' style="font-size: 20rem;">{{Session::get('tacos')}}</h1>
      </div>
    @endif
  <div class="row py-2 px-3">
    
    <div class="col-md">
      
      {!! Form::open(['action' => 'App\Http\Controllers\NoteController@store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
      <div class="form-group">
        <div class="mb-3">
          <div class="row">

            <div class="col-md">
              {!! Form::label('note_title', null, ['class' => 'form-label', 'for' => 'note_title']) !!}
              {!! Form::text('note_title', null, ['class' =>'form-control', 'id' => 'note_title']) !!}
            </div>
            <div class="col-md">
              {!! Form::label('Upload Image', null, ['class' => 'form-label', 'for' => 'note_title']) !!}
              <input type="file" name="file[]" class="form-control" multiple>
            </div>
          </div>
        </div>
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
 
</x-layouts.blank-body>
<x-layouts.footer/>