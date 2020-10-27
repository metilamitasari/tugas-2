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
          <li><a href="{{ url('/Specials')}}">Specials</a></li>
      
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
<!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Tersedia <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All Menu</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Jus apel</a><span>Rp.15.000</span>
            </div>
           
              
            
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Sate </a><span>Rp.15.000</span>
            </div>
            <div class="menu-ingredients">
              sate ayam,sapi
            </div>
          </div>


          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#"> es teh</a><span>Rp.10.000</span>
            </div>
            <div class="menu-ingredients">
              tersedia rasa coklat,keju, dan lainnya.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Sop buntut</a><span>Rp.25.000</span>
            </div>
            <div class="menu-ingredients">
              sop buntut sapi
            </div>
          </div>

          
           
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Es jeruk</a><span>Rp.15.000</span>
            </div>
            <div class="menu-ingredients">
              coklat,keju, dan masih banyak lagi
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">salad buah</a><span>Rp.20.0000</span>
            </div>
            <div class="menu-ingredients">
              apel, mangga, pir, dan masih banyak lagi sesuai pesanan.
            </div>
          </div>
          

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">fruitd salad</a><span>Rp.27.000</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->
    
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