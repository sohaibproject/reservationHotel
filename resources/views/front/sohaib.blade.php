<!doctype html>
<html lang="en">
  <head>
    <title>my Hotel  Website </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{  URL::asset('front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{  URL::asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{  URL::asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{  URL::asset('front/css/aos.css')}}">
    <link rel="stylesheet" href="{{  URL::asset('front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{  URL::asset('front/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{  URL::asset('front/css/magnific-popup.css')}}">
    
    <link rel="stylesheet" href="{{  URL::asset('front/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{  URL::asset('front/fonts/fontawesome/css/font-awesome.min.css')}}">

    


    <!-- Theme Style -->
    <link rel="stylesheet" href="{{  URL::asset('front/css/style.css')}}">
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="/"><em>My Hotel</em></a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6 mx-auto text-center">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/rooms">Rooms</a></li>
                        {{-- @if ()
                            
                        @else
                            
                        @endif --}}
                        <li><a href="/login">Login</a></li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->
    
    <section class="site-hero inner-page overlay" style="background-image:url({{url('front/img/slider-1.jpg')}})" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center text-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <h1 class="heading">Thanks page</h1>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->
<section>
    <div class="jumbotron text-center">
        <h1 class="display-3">Thank You!</h1>
        <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your reservation setup.</p>
        <hr>
        <p>
          Having trouble? <a href="/">Contact us</a>
        </p>
        <p class="lead">
          <a class="btn btn-primary btn-sm" href="/" role="button">Continue to homepage</a>
        </p>
      </div>

</section>
  
    
   
   
      
      <script src="{{  URL::asset('front/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{  URL::asset('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
      <script src="{{  URL::asset('front/js/popper.min.js')}}"></script>
      <script src="{{  URL::asset('front/js/bootstrap.min.js')}}"></script>
      <script src="{{  URL::asset('front/js/owl.carousel.min.js')}}"></script>
      <script src="{{  URL::asset('front/js/jquery.stellar.min.js')}}"></script>
      <script src="{{  URL::asset('front/js/jquery.magnific-popup.min.js')}}"></script>
      
      
      <script src="{{  URL::asset('front/js/aos.js')}}"></script>
      
      <script src="{{  URL::asset('front/js/bootstrap-datepicker.js')}}"></script> 
      <script src="{{  URL::asset('front/js/jquery.timepicker.min.js')}}"></script> 
  
      
  
      <script src="{{  URL::asset('front/js/main.js')}}"></script>
  </body>
</html>