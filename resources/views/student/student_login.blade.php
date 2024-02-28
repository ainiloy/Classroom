@extends('student.layouts.app2')
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

	<section id="banner" class="home_banner">
		<div class="container py-5 h-100">

			<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col col-xl-10">
				<div class="card" style="border-radius: 1rem;">
				<div class="row g-0">
					<div class="col-md-6 col-lg-5 d-none d-md-block">
					<img src="https://static.vecteezy.com/system/resources/previews/005/879/539/original/cloud-computing-modern-flat-concept-for-web-banner-design-man-enters-password-and-login-to-access-cloud-storage-for-uploading-and-processing-files-illustration-with-isolated-people-scene-free-vector.jpg"
						alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;padding-top:125px" />
					</div>
					<div class="col-md-6 col-lg-7 d-flex align-items-center">
					<div class="card-body p-4 p-lg-5 text-black">

							<div class="d-flex align-items-center mb-3 pb-1">
								<span class="h1 fw-bold mb-0"><img src="{{asset('front/assets/images/')}}/logo.png" style="max-height: 52px" alt="Logo"></span>
							</div>
							<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
							<form action="{{ route('user-login') }}" method="post" id="login" class="card-body" tabindex="500">
								@csrf
								<div class="form-outline mb-4">
									<input type="text" id="user_id" name="user_id" class="form-control form-control-lg" />
									<label class="form-label" for="form2Example17">Email address</label>
								</div>
								<div class="form-outline mb-4">
									<input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
									<label class="form-label" for="form2Example27">Password</label>
								</div>
								<div class="pt-1 mb-4">
									<button type="submit" class="btn btn-dark btn-lg btn-block" type="button">Login</button>
								</div>
							</form>
							<a class="small text-muted" href="#!">Forgot password?</a>
							<p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
								style="color: #393f81;">Register here</a></p>
							<a href="#!" class="small text-muted">Terms of use.</a>
							<a href="#!" class="small text-muted">Privacy policy</a>

					</div>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
	</section>
</main>
