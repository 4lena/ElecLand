@extends('layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Welcome to <span>ElecLand.</span></h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Your one-stop-shop for all your electronics needs!</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href=" {{ route('store') }} " class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Go to Store</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src='{{ asset("assets/img/hero-img.png") }}' class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="bg-light">
      <div class="about container px-5" data-aos="fade-up">
          <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
              <div class="col-12 col-lg-5">
                  <h1 class="display-4 lh-1 mb-4">Discover the Latest Tech Trends</h1>
                  <p class="lead fw-normal text-muted mb-5 mb-lg-0">At Elecland, we believe that technology should be accessible to everyone, which is why we offer a wide range of products at competitive prices. Whether you're looking for a new smartphone, a laptop, or a headphones, we've got you covered.</p>
              </div>
              <div class="col-sm-8 col-md-6">
                  <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src='{{ asset("https://source.unsplash.com/u8Jn2rzYIps/900x900") }}' alt="..." /></div>
              </div>
          </div>
      </div>
    </section><!-- End ABout -->

    <!-- ======= Top Products Section ======= -->
    <section id="topproducts" class="topproducts section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Top <span>Products</span></h3>
        </div>

        <div class="container">
          <div class="row">

            @foreach ($products as $item)
                  
            <!-- PRODUCTS-->
            <div class="col-lg-4">
              <div class="item">
                <div class="thumb">
                  <div class="hover-content">
                    <ul>
                      <li><a class="glightbox product-view" href="assets/img/products/{{$item->img}}.png" data-gallery="gallery2" data-glightbox="Product item 3"><i class="bi bi-eye"></i></a></li>
                      {{-- <li><a href="single-product.html"><i class="bi bi-heart-fill"></i></a></li> --}}
                      <li><a href="{{ route('cart', ['id' => $item->id]) }}"><i class="bi bi-cart-fill"></i></a></li>
                    </ul>
                  </div>
                  <a href=" {{ route('product-details', ['id' => $item->id]) }} "><img src="assets/img/products/{{$item->img}}.png" alt=""></a>
                </div>
                <div class="down-content">
                  <h4>{{$item->name}}</h4>
                  <span>{{$item->price}}RS</span>
                  <span>{{$item->color}}</span>
                </div>
              </div>
            </div>

            @endforeach

          </div>
        </div>
    </div>

    </section><!-- End Top Products  -->

    <!-- ======= Categories Section ======= -->
    <section id="categories" class="categories section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Shop <span>By</span></h3>
        </div>
     
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-sm-4 col-12">
              <a href=" {{ route('store') }} "><h1 id="category-title">Computers</h1></a>
              <img src='{{ asset("assets/img/category.jpeg") }}'>
            </div>
            <div class="col-sm-4 col-12">
              <img src='{{ asset("assets/img/category2.avif") }}'>
              <a href=" {{ route('store') }} "><h1 id="category-title">Headphones</h1></a>
            </div>
            <div class="col-sm-4 col-12 order-first order-md-last">
              <a href=" {{ route('store') }} " style="margin-right: 70%;"><h1 id="category-title">Phones</h1></a>
              <img src='{{ asset("assets/img/category3.jpeg") }}'>
            </div>
          </div>
        </div>
      

      </div>
    </section><!-- End Categories  -->

    <!-- ======= features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <i class="bi bi-shield-lock icon"></i>
              <h3>100% Secure Payment</h3>
              <p>Shop with confidence knowing that your financial information is secure.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <i class="bi bi-truck icon"></i>              
              <h4>Free Delivery</h4>
              <p>Shop now and take advantage of our free delivery service.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-box-seam icon"></i>              
              <h4>Free Return</h4>
              <p>Change your mind? don't worry we offer a free return.</p>
            </div>
          </div>

    </section><!-- End features  -->
@endsection

