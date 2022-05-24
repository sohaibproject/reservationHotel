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
  <title>Detail place {{$place->name}}</title>
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
        <h2 class="title">Detail place {{$place->name}}</h2>
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
 {{-- <section class="w3l-grids1">
            <div class="hny-three-grids py-5">
              <div class="container py-lg-5">
           <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Los Angeles" width="1100" height="500">
              </div>
              <div class="carousel-item">
                <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Chicago" width="1100" height="500">
              </div>
              <div class="carousel-item">
                <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="New York" width="1100" height="500">
              </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
          </div>
         
          </section> --}}
          <section class="w3l-content-6 py-5 " id="aboutus">
            <div class="container py-lg-5">
             
                    
                    <h3 class="hny-title mb-md-5 mb-4">{{$place->name}} </h3>
                
              <div class="row">
                <div class="col-lg-6 content-6-left pr-lg-5 subject-card-header p-4">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach($photos as $key => $photo)
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <img src="{{URL::asset('images/places/'.$photo->file_name)}}" class="img-fluid" alt="" style="max-height:400px;min-height: 400px ">
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>   
                </div>
                <div class="col-lg-6 content-6-right mt-lg-0 mt-4">
                    <p>{{$place->discription}}</p>
                       </div>
                       {{-- <div class="mb-5" id="app">

                        <comment-list></comment-list>
                       </div> --}}
                       <div class="container">
                        {{-- <a class="like m-2">
                            <i class="fa fa-thumbs-o-up"></i>  Like
                            
                        </a>
                        <a class="dislike m-2">
                            <i class="fa fa-thumbs-o-down"></i> Dislike 
                          
                        </a>
                        <a class="dislike m-2">
                            <i class="fa fa-comments" aria-hidden="true"></i> Comment 
                          
                        </a> --}}
                        @comments(['model' => $place])
                    </div>
                </div>
                </div>
         
            </section>
        
 {{-- here iam --}}


         <!-- //content-6-->
         <section class="w3l-grids1">
           <div class="hny-three-grids py-5">
             <div class="container py-lg-5">
                <h3 class="hny-title mb-md-5 mb-4">related places in {{$place->willaya->name}} </h3>
               <div class="row">
                   @if ($places)
                     @foreach ($places as $places)
                    
                   {{-- $places[0]->photos[0]->file_name --}}
                  @if ($places->id != $place->id)
                      
                
                 <div class="col-md-4 col-sm-6 mt-0 grids5-info">
                   <a href="{{route('details.places',$places->id)}}"><img src="{{URL::asset('images/places/'.$places->photos[0]->file_name)}}" style="max-height:200px;min-height: 200px " class="img-fluid" alt=""></a>
                   <h5> {{$place->willaya->name}}</h5>
                   <h4><a href="{{route('details.places',$place->id)}}">{{$places->name}}</a></h4>
                   <p>{{substr($places->discription,0,60)}}...</p>
                 </div>
                 @endif
                 @endforeach  
                 @endif
               </div>
               {{-- {{ $places->links() }} --}}
             </div>
           </div>
         </section>
           <!-- stats -->
           <section class="w3l-grids1">
            <div class="hny-three-grids py-5">
              <div class="container py-lg-5">
                 <h3 class="hny-title mb-md-5 mb-4">some  hotels in {{$place->willaya->name}} </h3>
                <div class="row">
                    @if ($hotels)
                      @foreach ($hotels as $hotel)
                         
                    {{-- $place[0]->photos[0]->file_name --}}
                   
                  <div class="col-md-4 col-sm-6 mt-0 grids5-info">
                    <a href="{{route('details.hotels',$hotel->id)}}"><img src="{{URL::asset('images/hotels/'.$hotel->photo)}}" style="max-height:200px;min-height: 200px " class="img-fluid" alt=""></a>
                    <h5> {{$place->willaya->name}}</h5>
                    <h4><a href="{{route('details.hotels',$hotel->id)}}">{{$hotel->name}}</a></h4>
                    @for($i = 0; $i < 5; $i++)
                    @if($i < $hotel->rating)
                      <label for="star-5" class="star">
                      <i class="fa fa-star"span class="star star--gold"></span></i>
                      </label>
                    @else
                    @endif
                  @endfor
                    <p>{{$hotel->adress}}</p>
                    <p>{{$hotel->phone_1}}</p>
                    <p>{{$hotel->phone_2}}</p>
                  </div>
            
                  @endforeach  
                  @endif
                </div>
                {{ $hotels->links() }}
              </div>
            </div>
          </section>
           <!-- //stats -->
           <!-- team -->
           @if ($drivers)
           <section class="w3l-team" id="team">
             <div class="team-block py-5">
               <div class="container py-lg-5">
                 <div class="title-content text-center mb-lg-3 mb-4">
                   <h6 class="sub-title">Our drivers</h6>
                   <h3 class="hny-title">Meet our driver</h3>
                 </div>
                
                     
               
                    
               
                 <div class="row">
                    @foreach ($drivers as $driver)
                   <div class="col-lg-3 col-6 mt-lg-5 mt-4">
                     <div class="box16">
                       <a href="#url"><img src="{{URL::asset('images/drivers/'.$driver->photo)}}" style="max-height:250px;min-height: 250px " alt="" class="img-fluid" /></a>
                       <div class="box-content">
                         <h3 class="title"><a href="#url">{{$driver->name}}</a></h3>
                         <span class="post">Description</span>
                         <ul class="social">
                           <li>
                             <a href="{{route('information.driver',$driver->id)}}" class="">
                            <span style="color: green">Contact </span>
                             </a>
                           </li>
                           </ul>
                       </div>
                     </div>
                   </div>
                   @endforeach
                 </div> 
                 
               </div>
             </div>
           </section>
           @endif
  
 
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