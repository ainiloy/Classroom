@extends('layouts.app2')

@section('content')


        <!--Section-->
        @include('student.layouts.second_style')
            <!--Topbar-->


            {{-- @include('layouts.header') --}}


            <!--Section-->
            <section>
                <div class="bannerimg">
                    <div class="header-text mb-0">
                        <div class="container">
                            <div class="text-center text-white">
                                <h1 class="text-dark">{{$data->question_title}}</h1>
                                <ol class="breadcrumb text-center">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}" class="text-dark">Home</a></li>
                                    <li class="breadcrumb-item active text-dark" aria-current="page">{{$data->question_title}}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/Section-->
        </div><!--/Section-->




        <!--User Dashboard-->
        <section class="sptb">
            <div class="container">
                <div class="row">


                    @include('layouts.dashboard_sidebar')


					<div class="col-xl-9 col-lg-12 col-md-12">
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Your Question: {{$data->question_title}}</h3>
							</div>
							<div class="card-body">
								<div class="ads-tabs">


									<p><b>Question Desciption: </b></p>
									{!! $data->question_description !!}


									<br>


									<p><b>Answer:</b> </p>
									{!! $data->question_answer !!}

								</div>
							</div>
						</div>
					</div>


                </div>
            </div>
        </section><!--/User Dashboard-->





@stop
