<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ElecLand Store</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon/favicon.ico" rel="icon">
  <link href="assets/img/favicon/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="assets/img/favicon/android-chrome-192x192.png" rel="icon" sizes="192x192" />
  <link href="assets/img/favicon/android-chrome-512x512.png" rel="icon" sizes="512x512" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>Store</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Computers</a></li>
              <li><a href="#">Phones</a></li>
              <li><a href="#">Headphones</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <h1 class="logo"><a href="index.html">ElecLand<span>.</span></a></h1>

      <ul class="list-group list-group-horizontal">
        <li>
          <a class="icon" href="#">
            <i class="bi bi-person"></i>
          </a>
        </li>
        <li>
          <a class="icon" href="#">
            <i class="bi bi-cart"></i>
            <span class="badge badge-number">0</span>
          </a>
        </li>
        <li>
          <a class="icon" href="#">
            <i class="bi bi-heart"></i>
            <span class="badge badge-number">0</span>
          </a>
        </li>
      </ul>        

    </div>
  </header><!-- End Header -->

  <main id="main">

    <section>
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3>Join <span>Us</span></h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house-door"></i></a></li>
              <li class="breadcrumb-item active">Sign up</li>
            </ol>
          </nav>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <form class="mb-5 form" method="post" id="form" name="form">

              <div class="col-md-12 form-group">
                <input type="text" class="form-control name" name="name" id="name" placeholder="Full Name" pattern="[a-zA-Z]+ [a-zA-Z]+" title="Please enter your first and last name, only letters" required>
                <i class="bi bi-person icon"></i>
              </div>

              <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter a valid email" required>
                <i class="bi bi-envelope icon"></i>
              </div>

              <div class="col-md-12 form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Please enter at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <i class="bi bi-lock icon"></i>
                <i class="bx bx-hide show-hide"></i>
              </div>

              <div class="col-md-12 form-group">
                <input type="password" class="form-control" name="cPassword" id="cPassword" placeholder="Confirm Password" required>
                <i class="bx bx-hide show-hide"></i>
                <i class="bi bi-lock icon"></i>
              </div>
              <p id="error"><i class="bi bi-exclamation-circle"></i> Password mismatch</p>

              <div class="row">
                <div class="col-12 text-center">
                  <input type="submit" value="Sign Up" class="btn btn-primary rounded-0 py-2 px-4">
                </div>
              </div>

              <div class="row links">
                <span>Already a member? <a href="signin.html">Signin Now</a></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="index.html"><h3>ElecLand<span>.</span></h3></a>
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
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="store.html">Store</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="signin.html">Sign in</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="signup.html">Sign up</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="cart.html">Cart</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="favorite.html">Favorite</a></li>
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
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>

    $('#error').hide();

    $('#password, #cPassword').on('input', function() {

      var password = $('#password').val();
      var confirmPassword = $('#cPassword').val();
      var pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

      if(pattern.test(password)){
        if (password === confirmPassword) {
          $('#error').hide();
        } else {
          $('#error').show();
        }
      }
    });

    $("form").submit(function(e){
      var password = $('#password').val();
      var confirmPassword = $('#cPassword').val();

      if(!(password === confirmPassword)){
        e.preventDefault();
      }
    });

  </script>

</body>

</html>