@extends('layouts.app')

@section('content')



        <!--Section-->
        <div class="banner-1 cover-image  bg-background2" data-image-src="{{asset('frontend')}}/assets/images/banners/banner1.jpg">




        @include('layouts.header')




            <!--Section-->
            <section>
                <div class="bannerimg">
                    <div class="header-text mb-0">
                        <div class="container">
                            <div class="text-center text-white">
                                <h1 class="">Contact us</h1>
                                <ol class="breadcrumb text-center">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active text-white" aria-current="page">Contact us</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/Section-->
            <br>
            <br>
            <br>


        </div><!--/Section-->



		<!--Contact-->
		<div class="sptb">
			<div class="container">
				<div class="row">
				    <div class="col-lg-3 col-xl-3  col-md-12">
					    
					</div>
				    <div class="col-lg-6 col-xl-6 col-md-12">
						<div class="card mb-0">
							<div class="card-body">

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
								
								<form action="{{ route('submit-message') }}" method="post">
									@csrf
									
									<div class="form-group">
										<input type="text" class="form-control" id="name1" name="name" placeholder="Your Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email Coursedress">
									</div>
									<div class="form-group">
										<textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
									</div>
									<div class="text-start">
										<button class="btn btn-primary" type="submit">Send Message</button>
									</div>

								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-xl-3  col-md-12">
					    
					</div>
				</div>
			</div>
		</div>
		<!--/Contact-->




@endsection
@section('script')


@endsection