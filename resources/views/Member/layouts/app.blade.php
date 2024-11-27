<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('ttile')
    </title>
 <!-- meta character set -->
 <meta charset="utf-8">
 <!-- Always force latest IE rendering engine or request Chrome Frame -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <title>Meals-On-Wheels</title>		
 <!-- Meta Description -->
 <meta name="description" content="Blue One Page Creative Template">
 <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
 <meta name="author" content="Muhammad Morshed">
 
 <!-- Mobile Specific Meta -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <!-- CSS
 ================================================== -->
 
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
 
 <!-- Fontawesome Icon font -->

 <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
 <!-- bootstrap.min -->
 <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css')}}">
 <!-- bootstrap.min -->
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
 <!-- bootstrap.min -->
 <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
 <!-- bootstrap.min -->
 <link rel="stylesheet" href="{{ asset('css/slit-slider.css')}}">
 <!-- bootstrap.min -->
 <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
 <!-- Main Stylesheet -->
 <link rel="stylesheet" href="{{ asset('css/main.css')}}">



    
{{-- --------------------------------------------------------------------------------New CSS --}}
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/css2/bootstrap.css')}}" />
        <!-- font awesome style -->
        <link href="{{ asset('css/css2/font-awesome.min.css')}}" rel="stylesheet" />
        
        <!-- Custom styles for this template -->
        <link href="{{ asset('css/css2/style.css')}}" rel="stylesheet" />
        <!-- responsive style -->
        <link href="{{ asset('css/css2/responsive.css')}}" rel="stylesheet" />
        
    



 <!-- Modernizer Script for old Browsers -->
 <script src="js/modernizr-2.6.2.min.js"></script>
  </head>

  <body style="background-image: url(../img/productBackgroung.jpg); ">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <div id="preloader">
        <div class="loder-box">
          <div class="battery"></div>
        </div>
  </div> --}}

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

<header class="site-navbar" role="banner">

    <div class="container">
      <div class="row align-items-center">
      
      <div class="col-11 col-xl-2">
        <h1 class="mb-0 site-logo"><a style="color: aliceblue" href="#" class="text-white mb-0">Meals-On-Wheels</a></h1>
      </div>
      <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">
  
        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
          <li class=""><a href="#"><span>Home</span></a></li>
          <li class="has-children">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user() -> name }}
            </a>
          <ul class="dropdown arrow-top">
            <li>  <a href="#">Update </a></li>
            <li> <a href="{{ route('main') }}">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"> Logout </button>
                </form>
            </a></li>
          
          </ul>
          </li>
          
        </ul>
        </nav>
      </div>
  
  
      <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
  
      </div>
  
      </div>
    </div>
 
</header> 


<!-- Content -->
<section class="py-4">
    <div class="container">
        @yield('content')
    </div>
</section>
<!-- End Content -->

<!-- FOOTER -->

  <!-- info section -->

  <br><br><br>
          <section class="info_section layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-3 info-col">
                  <div class="info_detail">
                    <h4 style="color: white">
                      About Us
                    </h4>
                    <p>
                      Vitae aut explicabo fugit facere alias distinctio, exem commodi mollitia minusem dignissimos atque asperiores incidunt vel voluptate iste
                    </p>
                    <div class="info_social">
                      <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                      <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                      <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </a>
                      <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 info-col">
                  <div class="info_contact">
                    <h4 style="color: white">
                      Address
                    </h4>
                    <div class="contact_link_box">
                      <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span style="color: white">
                          Location
                        </span>
                      </a>
                      <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                          Call +01 1234567890
                        </span>
                      </a>
                      <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                          demo@gmail.com
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 info-col">
                  <div class="info_contact">
                    <h4 style="color: white">
                      Newsletter
                    </h4>
                    <form action="#">
                      <input type="text" placeholder="Enter email" />
                      <button type="submit">
                        Subscribe
                      </button>
                    </form>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 info-col">
                  <div class="map_container">
                    <div class="map">
                      <div id="googleMap"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
          <!-- end info section -->
        
          <!-- footer section -->
          <footer class="footer_section">
            <div class="container">
              <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
              </p>
            </div>
          </footer>
          <!-- footer section -->


  <!-- jQery -->
  <script src="js/js2/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/js2/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/js2/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->


    
    <!-- Essential jQuery Plugins
    ================================================== -->
    <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
    <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
    <!-- Google Map API -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
    <!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
        <script src="js/main.js"></script>
      </body>
    </html>
       
                  