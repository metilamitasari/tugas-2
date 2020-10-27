<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fifteen Celsius</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url ('public')}}/assets/img/favicon.png" rel="icon">
  <link href="{{ url ('public')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url ('public')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ url ('public')}}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{ url ('public')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ url ('public')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ url ('public')}}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{ url ('public')}}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url ('public')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v2.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
      <i class="icofont-phone"></i> +6281528949597
      <i class="icofont-clock-time icofont-rotate-180"></i> senin-sabtu: 11:00 AM - 23:00 PM
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="home"><span>Fifteen celsius</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="home">Home</a></li>
          <li><a href="{{ url('/About')}}">About</a></li>
          <li><a href="{{ url('/Menu')}}">Menu</a></li>
          <li><a href="{{ url('/Spesial')}}">Specials</a></li>
          <li><a href="{{ url('/Contact')}}">Contact</a></li>

          <li class="book-a-table text-center"><a href="{{ url('/login')}}">Login</a></li>
           <li class="book-a-table text-center"><a href="{{ url('/Checkout')}}">Checkout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          
<!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Menu <span>Special</span></h2>
          <p>Menu yang paling banyak diminati dan tentu menjadi favorite para pelanggan cafe fifteen celsius dengan menu yang berbeda dari cafe-cafe yang lainnya.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">crispy chicken rice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">peanuts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Mie Ayam Sop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">shrimp chips</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">fruitd salad</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>crispy chicken rice</h3>
                    <p class="font-italic">ini adalah menu yang paling sederhana tetapi paling banyak diminati </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ url ('public')}}/assets/img/specials-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>peanuts</h3>
                    <p class="font-italic">makanan ringan yang paling disukai</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ url ('public')}}/assets/img/specials-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>mie ayam sop</h3>
                    <p class="font-italic">mie ayam yang terbilang ciri khas dari cafe kami</p>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ url ('public')}}/assets/img/specials-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>shrimp chips</h3>
                    <p class="font-italic">makanan penutup yang paling disukai </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ url ('public')}}/assets/img/specials-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>fruitd salad</h3>
                    <p class="font-italic">makanan yang digemari..</p>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ url ('public')}}/assets/img/specials-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </br>
    </section><!-- End Specials Section -->

    <!-- Vendor JS Files -->
  <script src="{{ url ('public')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{ url ('public')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ url ('public')}}/assets/js/main.js"></script>

</body>

</html>