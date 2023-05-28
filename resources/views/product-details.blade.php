@extends('layouts.app')
@section('content')

    <section class="py-5 detail" data-aos="fade-up">
      <div class="container">
        <div class="section-title">
          <h3><span>{{ $product->name }}</span></h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="bi bi-house-door"></i></a></li>
              <li class="breadcrumb-item"><a href="{{ route('store') }}">Store</a></li>
              <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>
          </nav>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6">
            <!-- PRODUCT SLIDER-->
            <div class="row m-sm-0">
              <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0 px-xl-2">
                <div class="swiper product-slider-thumbs">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="{{ asset("assets/img/products/{$product->img}.png") }}" alt="..."></div>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="{{ asset("assets/img/products/{$product->img2}.png") }}" alt="..."></div>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="{{ asset("assets/img/products/{$product->img3}.png") }}" alt="..."></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-10 order-1 order-sm-2">
                <div class="swiper product-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide h-auto"><a class="glightbox product-view" href="{{ asset("assets/img/products/{$product->img}.png") }}" data-gallery="gallery2" data-glightbox="Product item 1"><img class="img-fluid" src="{{ asset("assets/img/products/{$product->img}.png") }}" alt="..."></a></div>
                    <div class="swiper-slide h-auto"><a class="glightbox product-view" href="{{ asset("assets/img/products/{$product->img2}.png") }}" data-gallery="gallery2" data-glightbox="Product item 2"><img class="img-fluid" src="{{ asset("assets/img/products/{$product->img2}.png") }}" alt="..."></a></div>
                    <div class="swiper-slide h-auto"><a class="glightbox product-view" href="{{ asset("assets/img/products/{$product->img3}.png") }}" data-gallery="gallery2" data-glightbox="Product item 3"><img class="img-fluid" src="{{ asset("assets/img/products/{$product->img3}.png") }}" alt="..."></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- PRODUCT DETAILS -->
          <div class="col-lg-6">
            <h1>{{ $product->name }}</h1>
            <p class="text-muted lead">{{ $product->price }}RS</p>
            <p class="text-muted lead">{{ $product->color }}</p>
            <p class="text-sm mb-4">{{ $product->description }}</p>
            <div class="row align-items-stretch mb-4">
              {{-- <div class="col-sm-5 pr-sm-0">
                <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                  <div class="quantity">
                    <button class="dec-btn p-0"><i class="bi bi-caret-left"></i></button>
                    <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                    <button class="inc-btn p-0"><i class="bi bi-caret-right"></i></button>
                  </div>
                </div>
              </div> --}}
              <div class="col-sm-3 pl-sm-0"><a class="btn btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="{{ route('cart', ['id' => $product->id]) }}">Add to cart</a></div>
            </div>
            {{-- <strong><a class="text-dark p-0 mb-10 d-inline-block" href="#!"><i class="bi bi-heart me-2"></i>Add Favorite</a></strong><br><br> --}}            
            <div class="row">
              <div class="col-6">
                <strong class="text-uppercase text-dark">SKU: </strong>
                <span class="ms-2 text-muted">{{ $product->id }}</span>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <strong class="text-uppercase text-dark">Category: </strong>
                <span class="ms-2 text-muted">{{ $product->category }}</span>
              </div>
            </div>
          </div>
        </div> 

        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
          <li class="nav-item"><a class="nav-link text-uppercase active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
          <li class="nav-item"><a class="nav-link text-uppercase" id="info-tab" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Information</a></li>
        </ul>
        <div class="tab-content mb-5" id="myTabContent">
          <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            <div class="p-4 p-lg-5 bg-white">
              <h6 class="text-uppercase">Product description </h6>
              <p class="text-muted text-sm mb-0">{{ $product->description }}</p>
            </div>
          </div>
          <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
            <div class="p-4 p-lg-5 bg-white">
              <div class="row">
                <div class="col-6">
                  <strong class="text-uppercase text-dark">Brand:</strong>
                  <span class="ms-2 text-muted">{{ $product->brand }}</span>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <strong class="text-uppercase text-dark">Category:</strong>
                  <span class="ms-2 text-muted">{{ $product->category }}</span>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <strong class="text-uppercase text-dark">SKU:</strong>
                  <span class="ms-2 text-muted">{{ $product->id }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </div>
    </section>

@endsection