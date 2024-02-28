@extends('layouts.app2')
@section('content')
<main>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <section class="sptb">
    <div class="container customerpage">
      <div class="row">
        <div class="single-page" >
          <div class="col-lg-12 col-xl-12 col-md-12 d-block mx-auto">
            <div class="card">
              <div class="wrapper wrapper2 mt-5" style="padding-top: 50px">


                @include('layouts.notification')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
  
                <form method="POST" action="{{ route('submit-registration') }}" id="login" class="card-body" tabindex="500">
                  @csrf
  
  
                  <div class="row">
                    <div class="col-md-6 col-12 mt-2 mb-4">
  
                      <div class="mail">
                        <input type="number" name="phone" class="phone form-control"  value="{{ $user->phone }}" readonly>
                        <label>Number</label>
  
                        <span class="send_otp_messahe" style="color: red"></span>
  
                      </div>
  
                    </div>
                    {{-- <div class="col-md-3 col-4 mt-2 mb-4">
  
                      <div class="submit">
                          <button type="button" class="btn btn-info btn-block" disabled>Send OTP</button>
                      </div>
  
  
                    </div> --}}
  
                    <div class="col-md-6 col-12 mt-2 mb-4">
  
                      <div class="passwd">
                        <input type="number" name="otp" class="form-control"  value="{{ $user->otp }}" readonly="">
                        <label>OTP</label>
  
                        <span class="" style="color: green">Verified successfully</span>
  
                      </div>
  
                    </div>
  
  
                    {{-- <div class="col-md-3 col-4 mt-2 mb-4">
  
  
                      <div class="submit">
                        <button type="button" class="btn btn-primary btn-block" disabled="">Verified</button>
                      </div>
  
                    </div> --}}
  
  
                    <div class="col-md-12 mb-3">
                      <hr>
                    </div>
  
  
  
                    <div class="col-md-6 col-12 mt-2 mb-4">
  
                      <div class="mail">
  
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        <label>Name<span style="color: red">*</span></label>
  
                      </div>
  
                    </div>
  
  
                    <div class="col-md-6 col-12 mt-2 mb-4">
  
                      <div class="mail">
  
                        <input type="text" name="contact_person" class="form-control" value="{{ old('contact_person') }}" required>
                        <label>Contact Person<span style="color: red">*</span></label>
  
                      </div>
  
                    </div>
  
  
                    <div class="col-md-6 col-12 mt-2 mb-4">
  
                      <div class="form-label-group">
                        <input type="email" class="form-control " id="registrationnameModal" placeholder="Email Address" value="{{ old('email') }}"  name="email" required>
                        <label for="registrationnameModal">Email Address <span style="color: red">*</span></label>
                      </div>
  
  
                    </div>
  
  
                    <div class="col-md-6 col-12 mt-2 mb-4">
  
  
                      <div class="form-label-group">
                        <input type="number" class="form-control " id="registrationnameModal" placeholder="NID" value="{{ old('nid') }}" name="nid" required>
                        <label for="registrationnameModal">NID <span style="color: red">*</span></label>
                      </div>
  
                    </div>
  
  
  
  
                    <div class="col-md-12 col-12 mt-2 mb-4">
  
                      <div class="mail">
  
                        <textarea type="text" name="address" class="form-control"  required>{{ old('address') }}</textarea>
                        <label>Address<span style="color: red">*</span></label>
  
                      </div>
  
                    </div>
  
  
                    <div class="col-md-12 col-12 mt-5 mb-4">
  
                      <div class="mail">
  
                        <label><strong>Date of birth </strong></label>
  
                      </div>
  
                    </div>
  
  
                    <div class="col-md-4 col-4 mt-2 mb-4">
  
                      <div class="form-group">
  
                        <label class="form-label">Day <span style="color: red">*</span></label>
  
  
                        <select name="day" id="select-countries" class="form-control custom-select ">
                          <option value="">Day</option>
  
                          <?php
                            $now = date('Y');
                            for ($x = 1; $x <= 31; $x++) {
                              echo '<option value='.$x.'>'.$x.'</option>';
                            }
                          ?>
                        </select>
                      </div>
  
  
                    </div>
  
  
  
                    <div class="col-md-4 col-4 mt-2 mb-4">
  
                      <div class="form-group">
  
                        <label class="form-label">Month <span style="color: red">*</span></label>
  
  
                        <select name="month" id="select-countries" class="form-control custom-select ">
                          <option value="">Month</option>
                          <option value="January">January</option>
                          <option value="February">February</option>
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>
                          <option value="September">September</option>
                          <option value="October">October</option>
                          <option value="Nvember ">Nvember </option>
                          <option value="December">December</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 col-4 mt-2 mb-4">
                      <div class="form-group">
                        <label class="form-label">Year <span style="color: red">*</span></label>
                        <select name="year" id="select-countries" class="form-control custom-select ">
                          <option value="">Year</option>
                            <?php
                              $now = date('Y');
                              for ($x = 1960; $x <= $now; $x++) {
                                echo '<option value='.$x.'>'.$x.'</option>';
                              }
                            ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 col-12 mt-2 mb-4">
                      <div class="form-label-group">
                        <input type="text" maxlength="11" minlength="11" class="form-control" id="registrationnameModal" value="{{ old('father_name') }}" name="father_name" required>
                        <label for="registrationnameModal">Father's Name <span style="color: red">*</span></label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12 mt-2 mb-4">
                      <div class="mail">
                        <input type="text" name="father_contact_number" class="form-control" value="{{ old('father_contact_number') }}">
                        <label>Father's Contact Number <span style="color: red">*</span></label>
                      </div>
                    </div>
                    <div class="col-md-6 col-12 mt-2 mb-4">
                      <div class="mail">
  
                        <input type="text" name="gurdian_name" class="form-control" value="{{ old('gurdian_name') }}">
                        <label>Gurdian Name</label>
  
                      </div>
  
                    </div>
  
  
  
  
                    <div class="col-md-6 col-12 mt-2 mb-4">
  
                      <div class="mail">
  
                        <input type="text" name="gurdian_contact_number" class="form-control" value="{{ old('gurdian_contact_number') }}">
                        <label>Gurdian Contact Number</label>
  
                      </div>
  
                    </div>
  
                    <div class="col-md-6 col-12 mt-2 mb-4">
  
                      <div class="form-group">
  
                        <label class="form-label">District <span style="color: red">*</span></label>
  
  
                        <select name="district_id" id="select-countries" class="form-control custom-select " required>
                          <option value="">Select District</option>
  
                          @foreach($districts as $item)
  
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
  
                          @endforeach
                        </select>
                      </div>
  
  
                    </div>
  
                    <div class="col-md-6 col-12 mt-2 mb-4">
  
                      <div class="form-group">
  
                        <label class="form-label">Country <span style="color: red">*</span></label>
  
  
                        <select name="country" id="select-countries" class="form-control custom-select " required>
  
                          <option value="Bangladesh"> Bangladesh </option>
  
                        </select>
                      </div>
  
  
                    </div>
  
                    <div class="col-md-6 col-12 mt-2 mb-4">
  
                      <div class="form-group">
  
                        <label>Password<span style="color: red">*</span></label>
                        <input type="password" class="form-control" name="password" required>
  
                      </div>
                    </div>
                    <div class="col-md-6 col-12 mt-2 mb-4">
                      <div class="form-group">
                        <label>Confirm Password <span style="color: red">*</span></label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                      </div>
                    </div>
                    <div class="col-md-6 col-12 mt-2 mb-4">
                      <?php
                        $a = rand(1,9);
                        $b = rand(1,99);
                      ?>
                      <div class="form-group">
                        <label> <span style="color: red"> What is the result of <span id="a">{{$a}}</span> + <span id="b">{{ $b }}</span> = ? *</span></label>
                        <input type="text" placeholder="Answer" class="form-control" name="answer"  required>
                          <input type="hidden" name="a" value="{{ $a }}">
                          <input type="hidden" name="b" value="{{ $b }}">
                      </div>
                    </div>
                  <?php
                    $a = rand(1,9);
                    $b = rand(1,9);
                  ?>
                  </div>
                  <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6">
                      <!-- Submit -->
                      <button type="submit" class="btn btn-block btn-primary mt-3 lift">
                        Register
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@stop