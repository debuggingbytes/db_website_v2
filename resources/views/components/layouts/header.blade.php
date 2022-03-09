<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard [DebuggingBytes]</title>
  <!-- Custom fonts for this template-->
  <script src="https://kit.fontawesome.com/c5608c8cee.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('files/admin.css')}}" rel="stylesheet">
  <link href="{{asset('files/styles.css')}}" rel="stylesheet">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  
  {{-- WYSISWYG EDITOR --}}
  <script src="https://cdn.tiny.cloud/1/9a2et9y4gqiibqvtwqr4ymd0c5zzf6r69mysvt4y9ua93num/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  @yield('scripts')
</head>

<body id="page-top">
  @if (!$server->login || !$server->clients || $server->services)
    <div class="row gap-2 m-1 position-absolute top" style="z-index: 100; right: 0;">
      @if (!$server->login)
        <div class="col-md bg-danger text-center text-white card">
          <h2>Login DISABLED</h2>
        </div>
      @endif
      @if (!$server->clients)
        <div class="col-md bg-danger text-center text-white card">
          <h2>Portfolio DISABLED</h2>
        </div>
      @endif
      @if (!$server->services)
        <div class="col-md bg-danger text-center text-white card">
          <h2>Services DISABLED</h2>
        </div>
      @endif
    </div>
  @endif
  @if ($server->twitch)
  <div class="text-center text-white m-0 p-2 bg-warning w-100 card">
    <h3>NOTICE: Streaming mode enabled</h3>
  </div>
  @endif
  <!-- Page Wrapper -->
  <div id="wrapper">
    