@extends('layouts.app')

@section('content')


		<!--Section-->
		<div class="cover-image bg-background3" data-image-src="{{asset('frontend')}}/assets/images/banners/banner2.jpg">
			<!--Topbar-->


			@include('layouts.header')
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
			<!--Section-->
			<section>
				<div class="bannerimg">
					<div class="header-text mb-0">
						<div class="container">
							<div class="text-center text-white">
								<h1 class="">Login</h1>
								<ol class="breadcrumb text-center">
									<li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
									<li class="breadcrumb-item active text-white" aria-current="page">Login</li>
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
						<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
							<div class="wrapper wrapper2">

						        @if ($errors->any())
						            <div class="alert alert-danger">
						                <ul>
						                    @foreach ($errors->all() as $error)
						                        <li>{{ $error }}</li>
						                    @endforeach
						                </ul>
						            </div>
						        @endif

						        @include('student.layouts.notify')
								
								<form action="{{ route('user-login') }}" method="post" id="login" class="card-body" tabindex="500">

									 @csrf

									 
									<h3>Login</h3>
									<div class="mail">
										<input type="number" name="user_id">
										<label>User ID</label>
									</div>
									<div class="passwd">
										<input type="password" name="password">
										<label>Password</label>
									</div>
									<div class="submit">
										<button type="submit" class="btn btn-primary btn-block">Login</button>
									</div>
									<p class="mb-2"><a href="#" >Forgot Password</a></p>
									<p class="text-dark mb-0">Don't have account?<a href="{{route('register')}}" class="text-primary ms-1">Sign UP</a></p>
								</form>
								<hr class="divider">
								<div class="card-body">
									<div class="text-center">
										<div class="btn-group">
											<a href="https://www.facebook.com/" class="btn btn-icon me-2 brround">
												<span class="fa fa-facebook"></span>
											</a>
										</div>
										<div class="btn-group">
											<a href="https://www.google.com/gmail/" class="btn  me-2 btn-icon brround">
												<span class="fa fa-google"></span>
											</a>
										</div>
										<div class="btn-group">
											<a href="https://twitter.com/" class="btn  btn-icon brround">
												<span class="fa fa-twitter"></span>
											</a>
										</div>
									</div>
								</div>
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




@stop