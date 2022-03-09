<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
  <meta title="description" content="Affordable and easy website solutions for personal or small businesses.  We have the skills and talents to build what you're dreaming!  Check us out today to find out all the services Debugging Bytes can offer the Edmonton and surrounding areas.">

	<!-- CSS Information -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/c5608c8cee.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{asset('files/style.css')}}">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-JWKX9J2908"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-JWKX9J2908');
	</script> --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
</head>
<body  data-bs-spy="scroll" data-bs-target="#navmenu">
 
	<header id="home">
		<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
			<div class="container-fluid">
				<a href="/" class="navbar-brand w-50"><img src="./files/images/db-full-logo.png" class="img-fluid w-50" alt="Debugging Bytes" id='logo'></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse col-md-10" id="navmenu">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item mx-2">
							<a href="#home" class="nav-link">Home</a>
						</li>
						<li class="nav-item mx-2">
							<a href="#services" class="nav-link">Services</a>
						</li>
						<li class="nav-item mx-2">
							<a href="#aboutus" class="nav-link">About Us</a>
						</li>
						<li class="nav-item mx-2">
							<a href="#clients" class="nav-link">Clients</a>
						</li>
						<li class="nav-item mx-2">
							<a href="#contactus" class="nav-link">Contact Us</a>
						</li>
            @if(Auth::user())
            <li class="nav-item mx-2">
							<a href="/dashboard" class="nav-link btn btn-light-orange text-white"><i class="fas fa-dashboard"></i> Dashboard</a>
						</li>
            @elseif (!$server->login)
            <li class="nav-item mx-2">
							<span class="nav-link btn btn-light-orange text-white btn-sm px-3">Login Disabled</a>
						</li>
            @else
            <li class="nav-item mx-2">
							<a href="/login" class="nav-link btn btn-light-orange btn-sm text-white px-3"><i class="fas fa-sign-in"></i> Client Login</a>
						</li>
            @endif
						{{-- <li class="nav-item mx-2">
              <button class="btn btn-light-orange text-white"><i class="fas fa-phone-alt"></i> Connect Today</button>							
						</li> --}}
					</ul>
				</div>
			</div>
		</nav>
	</header>
<!--HERO IMAGE & CALL OUT-->

  <section class="text-light py-5 p-lg-0 pt-lg-5 text-center text-sm-start hero"> 
                                 
      @yield('hero')                       
         
  </section>


<main>
  @yield('content')
</main>

<!--Footer-->
<footer class="p-2 bg-dark text-white text-center position-relative">
  <div class="container">
      <div class="row d-md-flex align-items-center justify-content-between">
          <div class="col-md">
              <p class="lead">Follow us on Social Media!</p>
              <a href="https://www.facebook.com/debuggingbytes"><i class="bi bi-facebook h5 px-2 text-orange"></i></a>
              <a href="https://www.instagram.com/debuggingbytes"><i class="bi bi-instagram h5 px-2 text-orange"></i></a>
              <a href="https://twitter.com/debuggingbytes"><i class="bi bi-twitter h5 px-2 text-orange"></i></a>
          </div>
          <div class="col-md small">
              <p>Copyright &copy; <span id='date'></span><br>
              http://www.debuggingbytes.com<br>
              Content and Material cannot be reused without written consent from website owner</p>
              <a href="#" class="position-absolute bottom-0 end-0 p-2">
                  <i class="bi bi-arrow-up-circle h2"></i>
              </a>
          </div>
      </div>
  </div>
</footer> 

</body>
</html>
<script src="{{asset('dom.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>