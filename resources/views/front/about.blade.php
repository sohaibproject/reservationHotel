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
                        @auth
                        <li><a href="/dashboard">Dashboard</a></li>
                        <li>
                            
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" >
                                @csrf
                            </form>
                        
                        </li>
                        
                        
                    
                    @endauth
                    
                    
                    @guest
                    
                    <li><a href="/login">Login</a></li>
                    
                    @endguest
                        
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
    
    <section class="site-hero inner-page overlay" style="background-image:url({{url('front/img/slider-4.jpg')}})" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center text-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <h1 class="heading">About Us</h1>
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

    <div class="container section"  id="next">

      <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Hotel Founders</h2>
          </div>
        </div>

      <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="block-2">
            <div class="flipper">
              {{-- background-image:url({{url('front/img/image_7.jpg')}}) --}}
              <div class="front" style="background-image:url({{url('front/img/image_7.jpg')}});">
                <div class="box">
                  <h2>Aldin Powell</h2>
                  <p>Web Developer</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                   
                    <img src="{{  URL::asset('front/img/person_3.jpg')}}" alt="">
                  </div>
                  <div class="name align-self-center">Aldin Powell <span class="position">Web Developer</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="block-2 hover">
            <div class="flipper">
              <div class="front" style="background-image:url({{url('front/img/image_5.jpg')}});">
                
                <div class="box">
                  <h2>Aldin Powell</h2>
                  <p>Web Developer</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="{{  URL::asset('front/img/person_3.jpg')}}" alt="">
                  </div>
                  <div class="name align-self-center">Aldin Powell <span class="position">Web Developer</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image:url({{url('front/img/image_6.jpg')}});">
                <div class="box">
                  <h2>Aldin Powell</h2>
                  <p>Web Developer</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="{{  URL::asset('front/img/person_3.jpg')}}" alt="">
                  </div>
                  <div class="name align-self-center">Aldin Powell <span class="position">Web Developer</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>
      </div>
    </div>
    <!-- END .block-2 -->

    
    
    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2" data-aos="fade-up">
            
            <img src="{{  URL::asset('front/img/hero_1.jpg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Hotel History</h2>
           
            <p class="mb-4">We are wholeheartedly committed to providing perfection for our guests at every moment and in every way. Perhaps it’s something as life-changing as a wedding celebration, where our attention to detail and perfect service mean that your special day goes without a hitch. Or perhaps it’s as simple as the note left on your pillow at night, which thoughtfully lets you know the weather tomorrow so you know how to dress in the morning, we are each personally responsible for creating rich and meaningful experiences for our guests</p>
            <p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary text-white py-2 play-button popup-vimeo">Watch Video</a></p>
          </div>
          
        </div>
      </div>
    </section>

    
    
    <!-- END section -->
    <section class="section testimonial-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Testimonial</h2>
          </div>
        </div>


        
        <div class="row">
          <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                
                <img src="{{  URL::asset('front/img/person_3.jpg')}}" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Et quidem, impedit eum fugiat excepturi iste aliquid suscipit, tempore, delectus rem soluta voluptatem distinctio sed dolores, magni fugit nemo cum expedita. Totam a accusantium sunt aut autem placeat officia.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="{{  URL::asset('front/img/person_3.jpg')}}" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="{{  URL::asset('front/img/person_3.jpg')}}" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Nostrum, alias, provident magnam sit blanditiis laboriosam unde quaerat, at ipsam, ratione maiores saepe nisi modi corporis quas! Beatae quam, quod aspernatur debitis nesciunt quasi porro ea iste nobis aliquid perspiciatis nostrum culpa impedit aut, iure blanditiis itaque similique sunt!&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>


            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="{{  URL::asset('front/img/person_3.jpg')}}" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Et quidem, impedit eum fugiat excepturi iste aliquid suscipit, tempore, delectus rem soluta voluptatem distinctio sed dolores, magni fugit nemo cum expedita. Totam a accusantium sunt aut autem placeat officia.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="{{  URL::asset('front/img/person_3.jpg')}}" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="{{  URL::asset('front/img/person_3.jpg')}}" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Nostrum, alias, provident magnam sit blanditiis laboriosam unde quaerat, at ipsam, ratione maiores saepe nisi modi corporis quas! Beatae quam, quod aspernatur debitis nesciunt quasi porro ea iste nobis aliquid perspiciatis nostrum culpa impedit aut, iure blanditiis itaque similique sunt!&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

          </div>
            <!-- END slider -->
        </div>

      </div>
    </section>
    
    {{-- <section class="section">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Make Yourself Comfortable in Any of Our Fully Air-conditioned Rooms</h2>
          </div>
          <div class="col-md-6 text-right" data-aos="fade-up" data-aos-delay="200">
            <a href="reservation.html" class="btn btn-primary py-3 text-white px-5">Reserve Now</a>
          </div>
        </div>
      </div>
    </section> --}}
    <footer class="section footer-section">
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-3 mb-5">
              <ul class="list-unstyled link">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Help</a></li>
               <li><a href="#">Rooms</a></li>
              </ul>
            </div>
            <div class="col-md-3 mb-5">
              <ul class="list-unstyled link">
                <li><a href="#">Our Location</a></li>
                <li><a href="#">The Rooms &amp; Suites</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Restaurant</a></li>
              </ul>
            </div>
            <div class="col-md-3 mb-5 pr-md-5 contact-info">
              <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> boussada /msila</span></p>
              <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+213)  035265325</span></p>
              <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> contact@myhotel.com</span></p>
            </div>
            <div class="col-md-3 mb-5">
              <p>Sign up for our newsletter</p>
              <form action="#" class="footer-newsletter">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your email...">
                  <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
                </div>
              </form>
            </div>
          </div>
          <div class="row bordertop pt-5">
            <p class="col-md-6 text-left">
              
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank" >me </a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              
            </p>
              
            <p class="col-md-6 text-right social">
              <a href="#"><span class="fa fa-tripadvisor"></span></a>
              <a href="#"><span class="fa fa-facebook"></span></a>
              <a href="#"><span class="fa fa-twitter"></span></a>
            </p>
          </div>
        </div>
      </footer>
      
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