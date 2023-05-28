@extends('layouts.app')
@section('content')

    <section id="topproducts" class="topproducts section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>Favorite</span></h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house-door"></i></a></li>
              <li class="breadcrumb-item active">Favorite</li>
            </ol>
          </nav>
        </div>

        <div class="container">
          <div class="row">

            <div class="col-lg-4">
              <div class="item">
                <div class="thumb">
                  <div class="hover-content">
                    <ul>
                      <li><a class="glightbox product-view" href="assets/img/products/product.png" data-gallery="gallery2" data-glightbox="Product item 3"><i class="bi bi-eye"></i></a></li>
                      <li><a href="single-product.html"><i class="bi bi-heart-fill"></i></a></li>
                      <li><a href="single-product.html"><i class="bi bi-cart-fill"></i></a></li>
                    </ul>
                  </div>
                  <a href="product-details.html"><img src="assets/img/products/product.png" alt=""></a>
                </div>
                <div class="down-content">
                  <h4>Nura Nuraphone</h4>
                  <span>1,200RS</span>
                  <span>Blue</span>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="item">
                <div class="thumb">
                  <div class="hover-content">
                    <ul>
                      <li><a class="glightbox product-view" href="assets/img/products/product3.png" data-gallery="gallery2" data-glightbox="Product item 3"><i class="bi bi-eye"></i></a></li>
                      <li><a href="single-product.html"><i class="bi bi-heart-fill"></i></a></li>
                      <li><a href="single-product.html"><i class="bi bi-cart-fill"></i></a></li>
                    </ul>
                  </div>
                  <a href="product-details.html"><img src="assets/img/products/product3.png" alt=""></a>
                </div>
                <div class="down-content">
                  <h4>Apple iPhone 12</h4>
                  <span>2,600RS</span>
                  <span>Purple</span>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="item">
                <div class="thumb">
                  <div class="hover-content">
                    <ul>
                      <li><a class="glightbox product-view" href="assets/img/products/product5.png" data-gallery="gallery2" data-glightbox="Product item 3"><i class="bi bi-eye"></i></a></li>
                      <li><a href="single-product.html"><i class="bi bi-heart-fill"></i></a></li>
                      <li><a href="single-product.html"><i class="bi bi-cart-fill"></i></a></li>
                    </ul>
                  </div>
                  <a href="product-details.html"><img src="assets/img/products/product5.png" alt=""></a>
                </div>
                <div class="down-content">
                  <h4>Asus ProArt</h4>
                  <span>10,000RS</span>
                  <span>Black</span>
                </div>
              </div>
            </div>

          </div>
        </div>
    </div>

    </section>

@endsection