@if(count($errors) > 0)
<div class="alert alert-danger m-2 p-2">
  <h4>Errors detected</h4>
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="card shadow p-2" style="min-height: 300px;">
  {!! Form::open(['route' => 'send_mail', 'action' => 'post']) !!}
  <div class="row">
    <div class="col">
      {!! Form::text('full_name', old('full_name'), ['class' => 'form-control', 'placeholder'=>'Full Name']) !!}
    </div>
    <div class="col">
      {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Your Email']) !!}
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      {!! Form::textarea('content', old('content'), ['class'=>'form-control','placeholder'=>'Your Message']) !!}
    </div>
  </div>
  <div class="row mt-2">
    <div class="col text-start">
      <button name='submit' type='submit' class='btn btn-light-orange text-white'><i class="fas fa-paper-plane"></i> Send</button>
    </div>
  </div>
  {!! Form::close() !!}
</div>
