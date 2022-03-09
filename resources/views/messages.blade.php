@extends('template')

@section('dashLocation')
  User Messages
@endsection

@section('header')
  &nbsp;
@endsection

@section('alerts')
  @include('dashboard.notifications.alerts')
@endsection

@section('messages')
  @include('dashboard.notifications.messages')
@endsection

@section('content')
  <div class="p-3">
    <div class="row gutters-sm">
      <div class="col-md-12">
        <div class="card mt-3">
          <ul class="list-group list-group-flush py-2 mx-2">
            @foreach ($messages->where('user_id', '=', session('user_id')) as $message)
            @php
              $letter = $message->is_read ? 'fa-envelope-open' : 'fa-envelope';
              $btn = $message->is_read ? 'Mark Unread' : 'Mark Read';
              if($message->id % 2 == 0){
                $border = 'border-left-info';
              }else{
                $border = 'border-left-secondary';
              }
            @endphp

            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap {{$border}}">
              <h6 class="mb-0">{{ $message->content }}</h6>
              <div>
                <span class="text-secondary"><button class="btn btn-success"><i class="fas fa-reply"></i> Reply</button></span>
                <span class="text-secondary">
                  <button class="btn btn-info"><i class="fas {{$letter}}"></i> {{$btn}}</button>
                </span>
                <span class="text-secondary"><button class="btn btn-danger"><i class="fas fa-times"></i> Delete</button></span>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection