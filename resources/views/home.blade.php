@extends('layouts.template')

@section('title')
🍁 DebuggingBytes 🍁 - Web Design, Web Development, Web Hosting &amp; SEO
@endsection
@section('hero')
  <div class="container">
   
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-9 p-2 text-center">
          <h1 class='text-dark '>Your <span class="text-orange">website</span> could be 1 click away</h1>
          <p class="h3 stroke">
            Creating a website should be an enjoyable experience.  Let us take on the work, because you have other things in life to enjoy.
          </p>
          <a href="#contactus" class="btn btn-light-orange text-white">Connect Now 
            <i class="fa-solid  fa-angles-down fa-fade"></i>
                       
          </a>
        </div>   
      </div>
    
  </div>
@endsection

@section('content')
{{-- Landing Information --}}
<section id='services' class="container-fluid p-5 mb-5">
  {{-- Intro text --}}
  <div class="row">
    <div class="col-md text-center">
      <h2>We help small businesses <i class='text-orange'>grow</i> by building them incredible websites.</h2>
      <h4>DebuggingBytes has flexible options to help you achieve your goals.</h4>
      <p class="lead">
        We are proud to offer local entrepreneurs and small business the ability to have scalable growth for their website.
      </p>
    </div>
  </div>
  {{-- START ROW --}}
  {{-- @dd($services) --}}
  @if ($server->services)
    <div class="row my-5">
      @foreach ($services as $service)
        <x-service :service="$service" />
      @endforeach
    </div> 
  @endif

  {{-- END ROW --}}
  <div class="row mt-5 d-flex justify-content-center align-items-center">
    <div class="col-md">
      <p class='lead'>DebuggingBytes provides a variety of web development services for Edmonton and surrounding areas. We take pride in communicating with our clients when making our websites . We also offer responsive web design, so no matter the device, your website will look stunning. Responsive websites are key to making your personal or business websites attractive to your audience and will also help keep them engaged. Part of our web development packages can also include basic SEO & SEM optimization to make sure you get more hits on search engines . SEO & SEM are key factors when it comes to getting attention on the world wide web. With proper structure, keywords and layout, SEO will have your website noticed faster by search engines like Google, Bing and Yahoo.</p>
        <p class='lead'>
        We have two options available for Websites. Option number one - your website can be customized, giving you more options, or you can choose option number two - template based websites for a no hassle launch. Our template based systems come with a responsive design already built in! Our websites can also include programming languages such as PHP, MySQL(Databases), Javascript, aJax & jQuery based on the package you choose. We can also provide a quote for PHP & MySQL scripts after we discuss what features you would like on the website.
        </p>
        <p class="lead"> 
        DebuggingBytes would love to help you design your professional website today. Contact us today to make your vision a reality!</p>
    </div>
  </div>
</section>
{{-- About Us Start --}}
<section id='about' class="p-md-5 mt-5 pt-5 bg-dark">
  <div class="container-fluid">
      <div class="row d-md-flex align-items-center justify-content-between text-light" id="aboutus">
          <div class="col-md ">
              <h1 class="mb-3 "><span class="text-orange">About</span></h1>
              <p class="lead">DebuggingBytes is a small local Web development company in the Edmonton, Alberta area. The company was founded in 2013, but has over 20 years of HTML &amp; other web based languages experience, Mostly self taught, but now pursuing school to create a full time career.  During this time we've helped create websites for personal use and small businesses in the Edmonton area.</p>
              <p class="lead">What started as just a hobby has now turned into a successful small business with reach across Canada.  Each website we develop is a very close one-to-one process with our clients to ensure you get the results you are looking for. I would love to connect with you and have the chance to read your story when I create your About Us page!</p>
              <button class="btn btn-light-orange text-white"><i class="fas fa-phone-alt"></i> Connect Today</button>
          </div>
          <div class="col-md text-center">
              <img src="./files/aboutus.png" alt="About DebuggingBytes - Edmonton Web Design" class="img-fluid w-50">
          </div>
      </div>
  </div>
</section>
<section id="clients" class="p-md-5 pt-5">
  <div class="container">
    <div class="row d-md-flex align-items-center justify-content-between mb-5">
        <div class="col-md">
          <h3 class="mb-5 text-center">Clients</h3>
          <p class="lead text-center">Our client list is constantly being updated with happy web site owners!</p>
        </div>
    </div>     
    <div class="row gap-3">
      @if($server->clients)
        @foreach ($portfolio as $client)        
        <x-portfolio :name="$client->portfolio_name" :img="$client->portfolio_img" :url="$client->portfolio_url" :text="$client->portfolio_text" />
        @endforeach
      @else
        <h1 class='text-center'>Portfolio is currently down for maintenance</h1>
      @endif
    </div>
  </div>
</section>
<section id="contactus" class="contact-hero p-md-5 py-5">
  <div class="container-fluid">
    <div class="row d-flex">
      <div class="col-md-5">
        <div class="card p-2 h-100" style="min-height: 300px;"  >
          <div class="card-body">
            <h1>Tell us about your project<hr></h1>
            <p>You've made it this far in to the website we would love to hear from you! Please feel free to use the contact form on the website to get a hold of us. We will do our best to return inquiries within 2 Business days!</p>
          </div>
        </div>
      </div>
      <div class="col-md">
        @if (Session::has('message'))
          <div class="alert alert-success">
            <h3>Thank you!</h3>
            <p class="content">Your message has been received, we will be in touch soon!</p>
          </div>
        @else
         <x-forms.contact/>          
        @endif
      </div>
    </div>
  </div>
</section>
@stop




