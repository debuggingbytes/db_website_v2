<div class="card shadow p-1 m-0 col-md border-left-orange">
  <img src="{{asset("/storage/".$img)}}" class='card-img-top' alt='{{$name}}'>
  <div class="card-body">    
    <h5>{{$name}}: </h5>
    <p class="card-text">
      {{$text}}
    </p>
  </div>
  <div class="card-footer text-center">
    <a href="{{$url}}" target="_blank" class='btn btn-light-orange'>Vist Now</a>
  </div>
</div>