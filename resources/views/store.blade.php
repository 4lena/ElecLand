@extends('layouts.app')
@section('content')

    <section class="store" data-aos="fade-up">
      <div class="container">
        <div class="section-title">
          <h3><span>Store</span></h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="bi bi-house-door"></i></a></li>
              <li class="breadcrumb-item active">Store</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <!-- SHOP SIDEBAR-->
          <div class="col-lg-3 order-1">
            <h5 class="text-uppercase mb-4">Categories</h5>
            <ul id="store-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-computer">Computers</li>
              <li data-filter=".filter-headphone">Headphones</li>
              <li data-filter=".filter-phone">phone</li>
            </ul>
          </div>
          <!-- SHOP LISTING-->
          <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0 store-container">
            <div class="row">
              @foreach ($products as $item)
                  
              <!-- PRODUCTS-->
              <div class="col-lg-4 item filter-{{$item->category}} wow fadeInUp" data-wow-delay="0.2s">
                <div class="product">
                  <div class="thumb">
                    <div class="hover-content">
                      <ul>
                        <li><a class="glightbox product-view" href="assets/img/products/{{$item->img}}.png" data-gallery="gallery2" data-glightbox="Product item 3"><i class="bi bi-eye"></i></a></li>
                        {{-- <li><a href="single-product.html"><i class="bi bi-heart-fill"></i></a></li> --}}
                        <li><a href="{{ route('cart', ['id' => $item->id]) }}"><i class="bi bi-cart-fill"></i></a></li>
                      </ul>
                    </div>
                    <a href="{{ route('product-details', ['id' => $item->id]) }}"><img src="assets/img/products/{{$item->img}}.png" alt=""></a>
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
            <!-- PAGINATION-->

          </div>
        </div>
      </div>
    </section>

@endsection