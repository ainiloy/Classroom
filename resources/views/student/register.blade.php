@extends('student.layouts.app2')

@section('content')
<main>
 <style>

  element.style {
  }
  .single-page .wrapper label {
      position: absolute;
      top: -7px;
      font-size: 12px;
      white-space: nowrap;
      background: #fff;
      text-align: left;
      left: 15px;
      padding: 0 5px;
      color: #2e384d;
      pointer-events: none;
  }
  label {
      display: inline-block;
      margin-bottom: 0.5rem;
  }
  *, ::after, ::before {
      box-sizing: border-box;
  }
 </style>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section id="banner" class="home_banner">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center " style="margin-top: 80px;">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
          <div class="row g-0 p-3" >
            <div class="col-md-12 col-lg-12">
            <div class="card-body  text-black d-flex justify-content-center align-items-center h-100">

              <form action="{{ route('verify-otp') }}" method="post" id="login" class="card-body" tabindex="500">
                  @csrf
                  <div class="" style="display: flex; align-items:center; justify-content:center; height:100%; width:100%;">
                    <div class="row">
                      <div class="col-md-3 col-8 mt-2">
                        <div class="mail">
                          <input type="text" name="phone" minlength="11" maxlength="11" onkeypress="return /[0-9]/i.test(event.key)" class="phone px-2" style="height:38px;">
                          <label>Number</label>
                          <span class="send_otp_messahe" style="color: red"></span>
                        </div>
                      </div>
                      <div class="col-md-3 col-4 mt-2">
                        <div class="submit">
                            <button type="button" class="btn btn-info btn-block text-white w-100 pl-4" onclick="sendOTP()" style="height: 38px;">Send OTP</button>
                        </div>
                      </div>
                      <div class="col-md-3 col-8 mt-2">
                        <div class="passwd">
                          <input type="text" name="otp" class="px-2" required minlength="4" maxlength="4" onkeypress="return /[0-9]/i.test(event.key)" style="height:38px;">
                          <label>OTP</label>
                        </div>
                      </div>
                      <div class="col-md-3 col-4 mt-2">
                      <div class="submit">
                        <button type="submit" class="btn btn-primary btn-block w-100" style="height: 38px;">Verify Now</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

            </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
    </section>
</main>
@stop
