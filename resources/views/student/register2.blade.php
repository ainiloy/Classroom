@extends('layouts.app')
@section('content')
<div class="d-flex justify-center align-items-center h-100">
    <!--Section-->
    <div class="cover-image bg-background3" data-image-src="{{asset('frontend')}}/assets/images/banners/banner2.jpg">
      <!--Topbar-->
      @include('layouts.header')
      <!--Section-->
      <section>
        <div class="bannerimg">
          <div class="header-text mb-0">
            <div class="container">
              <div class="text-center text-white">
                <h1 class="">Register</h1>
                <ol class="breadcrumb text-center">
                  <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                  <li class="breadcrumb-item active text-white" aria-current="page">Register</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section><!--/Section-->
    </div><!--/Section-->
    <!--Login-Section-->
    <section class="sptb">
      <div class="container customerpage">
        <div class="row">
          <div class="single-page" >
            <div class="col-lg-12 col-xl-12 col-md-12 d-block mx-auto">
              <div class="wrapper wrapper2">
                <form action="{{ route('verify-otp') }}" method="post" id="login" class="card-body" tabindex="500">
                   @csrf
                  <h3>Register</h3>
                  <div class="row">
                    <div class="col-md-3 col-8 mt-2">
                      <div class="mail">
                        <input type="text" name="phone" minlength="11" maxlength="11" onkeypress="return /[0-9]/i.test(event.key)" class="phone">
                        <label>Number</label>
                        <span class="send_otp_messahe" style="color: red"></span>
                      </div>
                    </div>
                    <div class="col-md-3 col-4 mt-2">
                      <div class="submit">
                          <button type="button" class="btn btn-info btn-block form-control" onclick="sendOTP()">Send OTP</button>
                      </div>
                    </div>
                    <div class="col-md-3 col-8 mt-2">
                      <div class="passwd">
                        <input type="text" name="otp" required minlength="4" maxlength="4" onkeypress="return /[0-9]/i.test(event.key)">
                        <label>OTP</label>
                      </div>
                    </div>
                    <div class="col-md-3 col-4 mt-2">
                      <div class="submit">
                        <button type="submit" class="btn btn-primary btn-block form-control">Verify</button>
                      </div>
                    </div>
                  </div>
                  <p class="text-dark mb-0">Don't have account?<a href="{{route('student-login')}}" class="text-primary ms-1">Login In</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!--/Login-Section-->
    <!-- Onlinesletter-->
    <section class="sptb bg-white border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-xl-6 col-md-12">
            <div class="sub-newsletter">
              <h3 class="mb-2"><i class="fa fa-paper-plane-o me-2"></i> Subscribe To Our Onlinesletter</h3>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
            </div>
          </div>
          <div class="col-lg-5 col-xl-6 col-md-12">
            <div class="input-group sub-input mt-1">
              <input type="text" class="form-control input-lg " placeholder="Enter your Email">
              <button type="button" class="btn btn-primary btn-lg br-tr-3  br-br-3">
                Subscribe
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/Onlinesletter-->
</div>
@stop