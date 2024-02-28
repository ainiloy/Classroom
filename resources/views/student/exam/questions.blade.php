@extends('layouts.app2')

@section('content')
   <style>
    [type="radio"]:checked+label:after, [type="radio"]:not(:checked)+label:after {

    background: green!important;
}
   </style>

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
                                <h1 class="text-dark">  Course: {{$course->title}}  </h1>
                                <h1 class="text-dark"> Batch: {{$lesion->name}}  </h1>
                                <!-- <ol class="breadcrumb text-center">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active text-white" aria-current="page">Course: {{$course->title}}</li>
                                    <li class="breadcrumb-item active text-white" aria-current="page">Batch{{$lesion->name}}</li>
                                </ol> -->

							<!-- date format MM/DD/YYYY hh:mm:ss -->



                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/Section-->
        </div><!--/Section-->

        @if(count($questions) > 0)

		<?php

			date_default_timezone_set("Asia/Dhaka");

			$date = Carbon\Carbon::now()->format('m/d/Y');





		?>

        <div class="container " style=" ">

        	<!-- 12/28/2022 00:50:00" -->

			<div class="counter jquery-countdown" data-date="12/29/2023 12:00:00"  data-no-date="true" style="font-size: 17px; display: flex;justify-content: center;background: white;">


				<div class="counter__item" style="padding: 10px;text-align: center">
					<div class="counter__item--number" style="font-size: 50px;">00</div>
					<div class="counter__item--text" style="font-weight: bold;">Hour</div>
				</div>


				<div class="counter__item" style="padding: 10px;text-align: center">
					<div class="counter__item--number" style="font-weight: bold;">00</div>
					<div class="counter__item--text" style="font-weight: bold;">Minute</div>
				</div>



				<div class="counter__item" style="padding: 10px;text-align: center">
					<div class="counter__item--number" style="font-weight: bold;">00</div>
					<div class="counter__item--text" style="font-weight: bold;">Second</div>
				</div>

			</div>

        </div>
        @endif


        <!--User Dashboard-->
        <section class="sptb">
            <div class="container">
                <div class="row">


                    @include('layouts.dashboard_sidebar')


					<div class="col-xl-9 col-lg-12 col-md-12">
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Questions</h3>
							</div>
							<div class="card-body">
								<div class="ads-tabs">

									<div class="tab-content">
										<div class="tab-pane active table-responsive userprof-tab" id="tab1">

									        <form method="post" action="{{ route('student.submit_answer') }}" enctype="multipart/form-data">
									            @csrf

									            <div class="card-body">
									                <div class="row">

									                	@if(count($questions) > 0)

									                	@foreach($questions as $key => $item)
									                    <div class="col-sm-12 col-md-12">
									                        <div class="form-group">

																<p>
																	<strong>
																		Question {{$key + 1}} : {!!  $item->question !!}
																	</strong>
																</p>

																<input type="hidden" name="question_id[]" value="{{$item->id}}">
																<input type="hidden" name="course_id" value="{{$course->id}}">
																<input type="hidden" name="lesion_id" value="{{$lesion->id}}">

																<input type="radio" id="{!!  $item->option_one !!}" name="option[{{ $item->id }}]" value="option_one">
																<label for="{!!  $item->option_one !!}">{!!  $item->option_one !!}</label><br>

																<input type="radio" id="{!!  $item->option_two !!}" name="option[{{ $item->id }}]" value="option_two">
																<label for="{!!  $item->option_two !!}">{!!  $item->option_two !!}</label><br>

																<input type="radio" id="{!!  $item->option_three !!}" name="option[{{ $item->id }}]" value="option_three">
																<label for="{!!  $item->option_three !!}">{!!  $item->option_three !!}</label><br>

																<input type="radio" id="{!!  $item->option_four !!}" name="option[{{ $item->id }}]" value="option_four">
																<label for="{!!  $item->option_four !!}">{!!  $item->option_four !!}</label><br>



									                        </div>
									                    </div>
									                    @endforeach
									                    @else

									                    <div class="col-sm-12 col-md-12">
									                        <div class="form-group">

																<p>
																	<strong>
																		No Qustion Found !
																	</strong>
																</p>





									                        </div>
									                    </div>


									                    @endif





									                </div>
									            </div>
									            @if(count($questions) > 0)
									            <div class="card-footer">
									                <button type="submit" class="btn btn-primary">Submit Answer</button>
									            </div>
									            @endif

									        </form>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>


                </div>
            </div>
        </section><!--/User Dashboard-->





@stop
