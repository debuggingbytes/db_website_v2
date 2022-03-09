<x-layouts.header />
<x-layouts.sidebar/>
<x-layouts.top-header/>
<x-layouts.blank-body>

@section('dashLocation')
  Viewing Client
@endsection

@section('header')
  &nbsp;
@endsection



@section('content')
  <div class="row mx-5">
    <div class="container-fluid">
      <div class="card my-3 p-3">
        <div class="card-body px-2">
          <x-client :id="$id" />
    
        </div>
      </div>
    </div>
  </div>

@endsection
</x-layouts.blank-body>
<x-layouts.footer/>