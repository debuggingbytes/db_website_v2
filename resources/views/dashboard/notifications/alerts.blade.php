 <div id='alerts'>
  @foreach ($alerts as $alert)  
    <a class="dropdown-item d-flex align-items-center" href="{{ url('/alerts/'. $alert->id); }}">
      <div class="mr-3">
        <div class="icon-circle bg-primary">
          <i class="{{$alert->icon_path}}"></i>
        </div>
      </div>
      <div>
        <div class="small {{$alert->is_read ? "text-gray-500" :"font-weight-bold"; }}">{{\Carbon\Carbon::parse($alert->created_at)->diffForHumans()}}</div>
        <span class="small {{$alert->is_read ? "text-gray-500" :"font-weight-bold"; }}">{{$alert->details}}</span>
      </div>
    </a>
    @endforeach
</div>