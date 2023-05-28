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
  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
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

    <section id="profile" class="profile">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3>My <span>Profile</span></h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house-door"></i></a></li>
              <li class="breadcrumb-item active">My Profile</li>
            </ol>
          </nav>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Personal Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Edit Personal Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Change Password</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Orders</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Personal Information</h3>
                    <p><i class="bi bi-person"></i> Full Name:</p>
                    <p><i class="bi bi-envelope"></i> Email:</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Edit Personal Information</h3>
                    <div class="row justify-content-center">
                      <div class="col-md-10">
                        <form class="mb-5 form" method="post" id="form" name="form">
            
                          <div class="col-md-12 form-group">
                            <input type="text" class="form-control name" name="name" id="name" placeholder="Full Name" pattern="[a-zA-Z]+ [a-zA-Z]+" title="Please enter your first and last name, only letters" required>
                            <i class="bi bi-person icon"></i>
                          </div>
            
                          <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter a valid email" required>
                            <i class="bi bi-envelope icon"></i>
                          </div>
                
                          <div class="row">
                            <div class="col-12 text-center">
                              <input type="submit" value="Save" class="btn btn-primary rounded-0 py-2 px-4">
                            </div>
                          </div>
        
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Change Password</h3>
                    <div class="row justify-content-center">
                      <div class="col-md-10">
                        <form class="mb-5 form" method="post" id="form" name="form">

                          <div class="col-md-12 form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Current Password" required>
                            <i class="bi bi-lock icon"></i>
                            <i class="bx bx-hide show-hide"></i>
                          </div>
            
                          <div class="col-md-12 form-group">
                            <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Please enter at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
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
                              <input type="submit" value="Change" class="btn btn-primary rounded-0 py-2 px-4">
                            </div>
                          </div>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Orders</h3>
                    <table id="example" class="table table-hover  table-border" style="width:100%">
                      <thead>
                          <tr>
                              <th>Order date</th>
                              <th>Order Number</th>
                              <th>Products</th>
                              <th>price</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                          </tr>
                          <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                          </tr>
                          <tr>
                              <td>Ashton Cox</td>
                              <td>Junior Technical Author</td>
                              <td>San Francisco</td>
                              <td>66</td>
                          </tr>
                          <tr>
                              <td>Cedric Kelly</td>
                              <td>Senior Javascript Developer</td>
                              <td>Edinburgh</td>
                              <td>22</td>
                          </tr>
                          <tr>
                              <td>Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                          </tr>
                          <tr>
                              <td>Brielle Williamson</td>
                              <td>Integration Specialist</td>
                              <td>New York</td>
                              <td>61</td>
                          </tr>
                          <tr>
                              <td>Herrod Chandler</td>
                              <td>Sales Assistant</td>
                              <td>San Francisco</td>
                              <td>59</td>
                          </tr>
                          <tr>
                              <td>Rhona Davidson</td>
                              <td>Integration Specialist</td>
                              <td>Tokyo</td>
                              <td>55</td>
                          </tr>
                          <tr>
                              <td>Colleen Hurst</td>
                              <td>Javascript Developer</td>
                              <td>San Francisco</td>
                              <td>39</td>
                          </tr>
                          <tr>
                              <td>Sonya Frost</td>
                              <td>Software Engineer</td>
                              <td>Edinburgh</td>
                              <td>23</td>
                          </tr>
                          <tr>
                              <td>Jena Gaines</td>
                              <td>Office Manager</td>
                              <td>London</td>
                              <td>30</td>
                          </tr>
                      </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>
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
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>

    $('#error').hide();

    $('#newPassword, #cPassword').on('input', function() {

      var password = $('#newPassword').val();
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
      var password = $('#newPassword').val();
      var confirmPassword = $('#cPassword').val();

      if(!(password === confirmPassword)){
        e.preventDefault();
      }
    });

    $(document).ready(function () {
      $('#example').DataTable();
    });

  </script>

</body>

</html>