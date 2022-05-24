<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Information Driver </title>
  <link rel="shortcut icon" href="{{URL::asset('assets/images/logo_site.png')}}" type="image/x-icon">
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap"
    rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  {{-- <link rel="stylesheet" href="{{URL::asset('css/app.css')}}"> --}}
  <!-- Template CSS -->
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="{{route('site')}}">
            Visite Algeria
          </a></h1>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('site')}}">Home <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#contactus">Contact</a>
            </li>

          </ul>
        </div>
       
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">details driver {{$driver->name}}</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="{{route('site')}}">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> details </li>
        </ul>
      
     
        <form action="{{route('get.recherche')}}" method="get" class="booking-form m-2">
         
          <div class="row book-form">
            <div class="form-input col-md-4 mt-md-0 mt-3">

             
              <select name="selecter" class="selectpicker">
                <option value="willaya">willaya</option>
                <option value="place">place</option>
                <option value="hotel">hotel</option>
                <option value="tour">tour</option>
               
              </select>

            </div>
            
          
            <div class="form-input col-md-4 mt-md-0 mt-3">

              <input type="search" name="query" id="searche">

            </div>

            <div class="bottom-btn col-md-4 mt-md-0 mt-3">
              <button class="btn btn-style btn-secondary"><span class="fa fa-search mr-3"
                  aria-hidden="true"></span> Search</button>
            </div>
          </div>
        </form>
    </div>
      
      
    </div>
  
  </section>
  <div class="container-fluid ">
    <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
          <br>
          <br>
          
        </div>
        <div class="container">
            <div class="main-body">
            
                  <!-- Breadcrumb -->
                  <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                     
                      <li class="breadcrumb-item active" aria-current="page">driver Profile</li>
                    </ol>
                  </nav>
                  <!-- /Breadcrumb -->
            
                  <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{asset('images/drivers/'.$driver->photo)}}" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                              <h4>{{$driver->name}}</h4>
                              <p class="text-secondary mb-1">Driver</p>
                              
                            </div>
                          </div>
                        </div>
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
                              {{$driver->name}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$driver->email}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$driver->phone}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">willaya</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$driver->willaya->name}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">status</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$driver->status}}
                            </div>
                          </div>
                          <hr>
                          {{-- <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">change status</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
    
                                <form method="POST" action="{{ route('change.status',$driver->id)}} " enctype="multipart/form-data">
                                    @csrf
                                <select class="form-control" name="status" id="status">
                                    <option value="published" @if($driver->status == "published")selected @endif >published</option>
                                    <option value="unpublished"  @if($driver->status == "unpublished")selected @endif>unpublished</option>
                                  </select>
                                  <button type="submit" class="btn btn-primary">save</button>
                                </form>
                            </div>
                          </div> --}}
                          <hr>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
            </div>
            <section class="w3l-contact" id="contactus">
                <div class="contact-infubd py-5">
                  <div class="container py-lg-3">
                    <div class="cusrtomer-layout py-5">
                      <div class="container py-lg-4 py-md-3 pb-lg-0">
                        <div class="heading text-center mx-auto">
                          
                          <h3 class="hny-title mb-md-5 mb-4">Contact Us </h3>
                        </div>
                      
                      </div>
                     
                    </div>
                    <div class="contact-grids row">
                      <div class="col-lg-6 contact-left">
                        <div class="partners">
                          <div class="cont-details">
                            <h5>Get in touch</h5>
                            <p class="mt-3 mb-4">Hi there, We are available 24/7 by fax, e-mail or by phone. Drop us line so we can talk
                              futher about that.</p>
                          </div>
                          <div class="hours">
                            <h6 class="mt-4">Email:</h6>
                            <p> <a href="contact@VisiteAlgeria.com">
                              contact@VisiteAlgeria.com</a></p>
                            <h6 class="mt-4">Visit Us:</h6>
                            <p> msila/bousaada/street:17 June bousaada </p>
                            <h6 class="mt-4">phone:</h6>
                            <p class="margin-top"><a href="tel:+44-255-366-88">+213-676964248</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 mt-lg-0 mt-5 contact-right">
                        <form action="{{route('send.contact')}}" method="post" class="signin-form">
                          @csrf
                          <div class="input-grids">
                            <div class="form-group">
                              <input type="text" name="name" id="w3lName" placeholder="Your Name*" class="contact-input" />
                            </div>
                            <div class="form-group">
                              <input type="email" name="email" id="w3lSender" placeholder="Your Email*" class="contact-input" required="" />
                            </div>
                            <div class="form-group">
                              <input type="text" name="subject" id="w3lSubect" placeholder="Subject*" class="contact-input" />
                            </div>
                          </div>
                          <div class="form-group">
                            <textarea name="discription" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
                          </div>
                          <div class="text-right">
                            <button class="btn btn-style btn-primary" onclick="return confirm('thank you for sending')">Send Message</button>
                          </div>
                        </form>
                      </div>
              
                    </div>
                  
                  </div>
              </section>
              <!-- //team -->
            
              <!--/w3l-footer-29-main-->
              <footer  >
                <!-- footer -->
                @include('front.includs.footer')
            
                <!-- //footer -->
              </footer>
              <!-- Template JavaScript -->
              <script src="assets/js/jquery-3.3.1.min.js"></script>
              <script src="assets/js/theme-change.js"></script>
              <!-- stats number counter-->
              <script src="assets/js/jquery.waypoints.min.js"></script>
              <script src="assets/js/jquery.countup.js"></script>
              <script>
                $('.counter').countUp();
              </script>
              <!-- //stats number counter -->
              <!--/MENU-JS-->
              <script>
                $(window).on("scroll", function () {
                  var scroll = $(window).scrollTop();
            
                  if (scroll >= 80) {
                    $("#site-header").addClass("nav-fixed");
                  } else {
                    $("#site-header").removeClass("nav-fixed");
                  }
                });
            
                //Main navigation Active Class Add Remove
                $(".navbar-toggler").on("click", function () {
                  $("header").toggleClass("active");
                });
                $(document).on("ready", function () {
                  if ($(window).width() > 991) {
                    $("header").removeClass("active");
                  }
                  $(window).on("resize", function () {
                    if ($(window).width() > 991) {
                      $("header").removeClass("active");
                    }
                  });
                });
              </script>
              <!--//MENU-JS-->
            
              <script src="assets/js/bootstrap.min.js"></script>
            </body>

            </html>
            