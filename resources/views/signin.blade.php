@extends('layouts.app')
@section('content')

    <section>
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3>Welcome <span>Back</span></h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house-door"></i></a></li>
              <li class="breadcrumb-item active">Sign in</li>
            </ol>
          </nav>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <form class="mb-5" method="post" id="form" name="form">

              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                  <i class="bi bi-envelope icon"></i>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <i class="bi bi-lock icon"></i>
                    <i class="bx bx-hide show-hide"></i>
                </div>
              </div>

              <div class="row links">
                <a href="signup.html">Forget Password?</a>
              </div>


              <div class="row">
                <div class="col-12 text-center">
                  <input type="submit" value="Sign Up" class="btn btn-primary rounded-0 py-2 px-4">
                </div>
              </div>

              <div class="row links">
                <span>Not a member? <a href="signup.html">Signup Now</a></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

@endsection