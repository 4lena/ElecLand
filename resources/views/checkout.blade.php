@extends('layouts.app')
@section('content')

    <section class="checkout" data-aos="fade-up">
      <div class="container">
        <div class="section-title">
          <h3><span>Checkout</span></h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="bi bi-house-door"></i></a></li>
              <li class="breadcrumb-item"><a href="{{route('store')}}">Store</a></li>
              <li class="breadcrumb-item"><a href="{{ route('cart', ['id' => $product->id]) }}">Cart</a></li>
              <li class="breadcrumb-item active">Checkout</li>
            </ol>
          </nav>
        </div>
        <!-- BILLING ADDRESS-->
        <h2 class="h5 text-uppercase mb-4">Billing details</h2>
          <div class="row">
            <div class="col-lg-8">
              <form action="{{route('invoice')}}" method="POST">
                <div class="row gy-3">

                  @csrf
                  <input type="hidden" name="productName" id="productName" value="{{$product->name}}">
                  <input type="hidden" name="price" id="price" value="{{$product->price}}">

                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="phone">Full Name</label>
                    <input type="text" class="form-control name" name="name" id="name" placeholder="Full Name" pattern="[a-zA-Z]+ [a-zA-Z]+" title="Please enter your first and last name, only letters" required>
                  </div>

                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="phone">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter a valid email" required>
                  </div>

                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="phone">Phone Number </label>
                    <input class="form-control form-control-lg" type="tel" name=phone id="phone" placeholder="05XXXXXXXX" pattern="05\d{8}" title="Please enter a valid phone number, start with 05." required>
                  </div>

                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="address">Address line</label>
                    <input class="form-control form-control-lg" type="text" id="address" name="address" placeholder="House number, street name" pattern="\d+,[a-zA-Z\s]+" title="Please enter your house number followed by semi column and your street name." required>
                  </div>

                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="county">Country</label>
                    <input class="form-control form-control-lg" type="text" id="country" name="country" placeholder="Country" pattern="[a-zA-Z\s]+" title="Please enter your country name, only letters." required>
                  </div>

                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="city">City</label>
                    <input class="form-control form-control-lg" type="text" id="city" name="city" placeholder="City" pattern="[a-zA-Z\s]+" title="Please enter your city name, only letters." required>
                  </div>

                  <h2 class="h5 text-uppercase mb-4">Payment details</h2>

                  <label class="form-label text-sm text-uppercase" for="creditCard">Credit Card Number</label>
                  <div class="col-lg-12 form-group">
                    <i class="bi bi-credit-card icon"></i>
                    <input class="form-control form-control-lg" type="number" id="creditCard" name="creditCard" placeholder="XXXX XXXX XXXX XXXX" pattern="^[0-9]{16}$" title="Please enter a valid credit card number" required>
                  </div>

                  <div class="row mt-3 mb-3">

                    <div class="col-md-6">
                      <label class="form-label text-sm text-uppercase" for="expiryDate">Expiry Date</label>
                      <div class="input form-group">
                        <i class="bi bi-calendar icon"></i>
                        <input type="text" class="form-control" placeholder="MM/YY" id="expiryDate" name="expiryDate" pattern="(0[1-9]|1[0-2])\/\d{2}" required>
                      </div> 
                    </div>


                    <div class="col-md-6">
                      <label class="form-label text-sm text-uppercase" for="cvv">CVV</label>
                      <div class="input form-group">
                        <i class="bi bi-lock icon"></i>
                        <input type="password" class="form-control" placeholder="000" id="cvv" name="cvv" pattern="\d{3}" required>
                      </div> 
                    </div>
                    
                  </div>

                  <div class="col-lg-12 form-group">
                    <button class="btn btn-dark" type="submit">Place order</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- ORDER SUMMARY-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Your order</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">{{$product->name}}</strong><span class="text-muted small">{{$product->price}}RS</span></li>
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small fw-bold">Total</strong><span>{{$product->price}}RS</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

@endsection