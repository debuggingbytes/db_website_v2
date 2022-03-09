<div class="p-3">
  <div class="row gutters-sm">
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center text-center">
            <img src="https://randomuser.me/api/portraits/men/{{ rand(1,90) }}.jpg" alt="Admin" class="rounded-circle" width="150">
            <div class="mt-3">
              <h4>{{$client->fullName}}</h4>
              {{-- <button class="btn btn-primary">Change Image</button> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="card mt-3">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="mb-0">Project Name</h6>
            <span class="text-secondary">{{$client->website}}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="mb-0">Client Since</h6>
            <span class="text-secondary"> {{\Carbon\Carbon::parse($client->created_at)->diffForHumans()}}</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Full Name</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$client->fullName}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Email</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$client->email}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Phone</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{$client->phone}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Cost</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              ${{$client->cost}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Responsive Design</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              @if($client->responsive == "selected")
              Responsive design selected, website will be mobile friendly
              @else
              Responsive design not selected, website will NOT be mobile friendly
              @endif
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Technical Support</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              @if($client->tech_support == "selected")
                Your website will have 1 year of tech support for updates and minor changes after launch.
              @else
                You did not select tech support, changes will be made at a hourly rate after launch.
              @endif
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Change Password</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <div class="row">

                @if(session()->has('error'))
                    <span class="alert alert-danger p-2">
                        <strong>{{ session()->get('error') }}</strong>
                    </span>
                @endif
                @if(session()->has('success'))
                    <span class="alert alert-success p-2">
                        <strong>{{ session()->get('success') }}</strong>
                    </span>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger p-2">
                   <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
                @endif

                {{-- {!! Form::model(route('user-password.update', Auth::user()->id)) !!} --}}
                <form action="{{route('change.password', Auth::user()->id)}}" method="POST">
                  @csrf
                  @method('POST')
                <div class="col-md">
                  {!! Form::password('current_password', ['class' => 'form-control mb-2', 'id' => 'current_password', 'placeholder' => 'Current Password']) !!}
                  
                </div>
                <div class="col-md">
                  {!! Form::password('password', ['class' => 'form-control mb-2', 'id' => 'password', 'placeholder' => 'New Password']) !!}
                </div>
                <div class="col-md">
                  {!! Form::password('password_confirmation', ['class' => 'form-control mb-2', 'id' => 'password_confirmation', 'placeholder' => 'Confirm Password']) !!}
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 mx-auto p-2 m-2">
                  {!! Form::submit('Change Password', ['class' => 'btn btn-info text-dark']) !!}

                </div>
                {!! Form::close() !!}
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
