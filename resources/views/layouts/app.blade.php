<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ElecLand Store</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href='{{ asset("asset/img/favicon/favicon.ico") }}' rel="icon">
  <link href="{{ asset('asset/img/favicon/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="{{ asset('asset/img/favicon/android-chrome-192x192.png') }}" rel="icon" sizes="192x192" />
  <link href="{{ asset('asset/img/favicon/android-chrome-512x512.png') }}" rel="icon" sizes="512x512" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('index') }}">Home</a></li>
          <li class="nav-link scrollto"><a href="{{ route('store') }}">Store</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <h1 class="logo"><a href=" {{ route('index') }} ">ElecLand<span>.</span></a></h1>

       <ul class="list-group list-group-horizontal">
        <li class="dropdown"><a href="#"><span><i class="bi bi-person icon"></i></span></a>
          <ul>
            @guest

              @if (Route::has('login'))   
                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>  
              @endif 

              @if (Route::has('register')) 
                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
              @endif 
              {{-- <li><a href="{{ route('profile') }}">My Profile</a></li> --}}
            @else
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
            @endguest
            
             
          </ul>
        </li>
        {{-- <li>
          <a class="icon" href="  ">
            <i class="bi bi-cart"></i>
            <span class="badge badge-number">0</span>
          </a>
        </li> --}}
        {{-- <li>
          <a class="icon" href="{{ route('favorite') }}">
            <i class="bi bi-heart"></i>
            <span class="badge badge-number">0</span>
          </a>
        </li>  --}}
      </ul>     

    </div>
  </header><!-- End Header -->

  <main id="main">
    @yield('content')
  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-3 col-md-6 footer-contact">
          <a href="{{ route('index') }}"><h3>ElecLand<span>.</span></h3></a>
          <p>
            Riyadh,<br>
            Saudi Arabia <br><br>
            <strong>Phone:</strong> +966 555555555<br>
            <strong>Email:</strong> info@ElecLand.com<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <p>Stay up-to-date on our latest news and promotions</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('store') }}">Store</a></li>
{{--         <li><i class="bx bx-chevron-right"></i> <a href="{{ route('signin') }}">Sign in</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('signup') }}">Sign up</a></li> --}}
            {{-- <li><i class="bx bx-chevron-right"></i> <a href="{{ route('cart') }}">Cart</a></li> --}}
            {{-- <li><i class="bx bx-chevron-right"></i> <a href="{{ route('favorite') }}">Favorite</a></li> --}}
          </ul>
        </div>

        <ul class="footer-payments list-group list-group-horizontal">
          <li><iconify-icon icon="fa-brands:cc-visa"></iconify-icon></li>
          <li><iconify-icon icon="brandico:mastercard"></iconify-icon></li>
          <li><iconify-icon icon="simple-icons:americanexpress"></iconify-icon></li>
          <li><iconify-icon icon="cib:cc-paypal"></iconify-icon></li>
          <li><iconify-icon icon="cib:apple-pay"></iconify-icon></li>
          <li></li><iconify-icon icon="arcticons:mada-pay"></iconify-icon></li>
        </ul> 

      </div>
    </div>
  </div>

  <div class="copyright">
    &copy; Copyright <strong><span>ElecLand</span></strong>. All Rights Reserved
  </div>
  
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/iconify/iconify-icon.min.js') }}"></script>



<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>