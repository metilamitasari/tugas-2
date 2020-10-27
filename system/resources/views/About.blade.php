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
 <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/testimonials/about.jpg");'>
            <img src="assets/img/testimonials/about.jpg" class="testimonial-img" alt="">
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3> Profil <strong>Fifteen Celsius</strong></h3>
              <p>
                Fifteen Celcius Skylounge karena konon katanya suhu disini bisa mencapai 15°C, lokasinya yang berada di ketinggian 800-1000.
              </p>
              <p class="font-italic">
                Fifteen Celcius Sky Lounge Batu ini merupakan tempat ngumpul atau tempat nongkrong favorit bagi warga Malang dan Batu. Tak sedikit pula wisatawan dari luar yang berkunjung ke fifteen celsius ini.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Sarana yang disediakan istimewah.</li>
                <li><i class="bx bx-check-double"></i> pelayanan dijamin membuat pelanggan nayaman.</li>
                <li><i class="bx bx-check-double"></i>Setiap menu bisa dipesan sesuai yang diinginkan.</li>
              </ul>
              <p>
                jika pelayanan atau pemesanan tidak sesuai dengan yang diinginkan akan kami kembalikan uang.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->
    
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