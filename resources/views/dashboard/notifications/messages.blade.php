<div id="messages">
  @foreach ($messages->where('user_id', '=', session('user_id')) as $message)
    
  <a class="dropdown-item d-flex align-items-center" href="{{url('/messages/'. $message->id )}}">
    <div class="dropdown-list-image mr-3">
      <img class="rounded-circle" src="{{asset('/files/images/undraw_profile_1.svg')}}" alt="...">
      <div class="status-indicator bg-success"></div>
    </div>
    <div class="font-weight-bold">
      <div class="text-truncate ">{{$message->content}}</div>
      <div class="">{{$message->from}} - {{\Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</div>
    </div>
  </a>

  @endforeach
</div>