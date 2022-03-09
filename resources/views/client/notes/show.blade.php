<x-layouts.header>
  @section('scripts')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
@if (Auth::user()->is_admin)
  <x-layouts.sidebar/>
@endif
  <x-layouts.top-header/>
  <x-layouts.blank-body>
    @section('dashLocation')
       {{ $note->note_title }}
    @endsection
    @section('content')


      @if(Session::has('message'))
      <div class="col-md-7 my-3 mx-auto alert {{ Session::get('alert-class', 'alert-success') }}"><i class="fas fa-exclamation fa-2xl text-grey-300"></i> {{ Session::get('message') }}</div>
      @endif

      {{-- 
        
        Create batch functionallity to delete mass notes
        
        --}}

      <div class="row d-flex py-2 px-3">
        {{-- Left Column --}}
        <div class="col-md">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-md">
                  <div class="card shadow">
                    <div class="card-header text-center">
                      <h5 class="mb-0">Created</h5>
                    </div>
                    <div class="col-md text-secondary">
                      {{\Carbon\Carbon::parse($note->created_at)}}
                    </div>
                  </div>
                </div>
                <div class="col-md">
                  <div class="card shadow">
                    <div class="card-header text-center">
                      <h5 class="mb-0">Updated</h5>
                    </div>
                    <div class="col-md text-secondary">
                      {{\Carbon\Carbon::parse($note->updated_at)}}
                    </div>
                  </div>
                </div>                
              </div>              
              <hr>
              <div class="row">
                <div class="col-md">
                  <h6 class="mb-1">Content</h6>
                  <div class="row p-2 gap-2">
                    @foreach ($note->images as $image)
                      <div class="card shadow col-md mx-auto">
                        <div class="card-body">
                          <a href='{{ asset("/storage/".$image->img_path . $image->img_name ) }}' data-lightbox="image-1">
                            <img src="{{ asset("/storage/".$image->img_path . $image->img_name ) }}" class='card-img img-fluid' style="max-height: 150px;" >
                          </a>
                        </div>
                        
                        {{-- <img src="{{ Storage::get($image->img_path.'/'.$img->img_name') }}" > --}}
                        {{-- @dd($image->img_path . $image->img_name) --}}
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
              @if (Auth::user()->is_admin)
                <div class="row mt-2">
                  <div class="col-md text-secondary">
                    {!! Form::model($note, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\NoteController@update', $note->id], 'files' => true]) !!}
                    <div class="mb-3">
                      {!! Form::label('note_title', 'Title', ['class' => 'form-label', 'for' => 'note_title']) !!}
                      {!! Form::text('note_title', $note->note_title, ['class' =>'form-control', 'id' => 'note_title']) !!}
                    </div>
                    {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'editor']) !!}  
                  </div>
                </div>
                <div class="row mt-2 d-flex justify-content-end px-5">
                  <div class="col-md-1 mx-2">
                    {!! Form::submit('Save note', ['class' => 'btn btn-primary my-2']) !!}            
                    {!! Form::close() !!}
                  </div>
                  <div class="col-md-1 ms-2">
                    {!! Form::open([ 'method'=>'DELETE', 'action' => ['App\Http\Controllers\NoteController@destroy',  $note->id,]]) !!}
                    {!! Form::submit('Delete note', ['class' => 'btn btn-danger my-2']) !!}
                    {!! Form::hidden('client_id', $note->client->id) !!}
                    {!! Form::close() !!}
                  </div>
                </div>  
              @else
              <div class="row mt-2">
                <div class="col-md text-secondary">
                  <div class="mb-3">
                    <h4>{!! $note->note_title!!}</h4>                    
                  </div>
                  <div class="mb-3">
                    {!! $note->content!!}                   
                  </div>                  
                </div>
              </div>                
              @endif
            </div>
          </div>
        </div>
      </div>
      @endsection
  </x-layouts.blank-body>
  <x-layouts.footer/>
