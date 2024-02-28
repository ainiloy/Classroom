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
                                <h1 class="text-dark">All Result</h1>
                                <ol class="breadcrumb text-center">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}" class="text-dark">Home</a></li>
                                    <li class="breadcrumb-item active text-dark" aria-current="page">All Result</li>
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
								<h3 class="card-title">All Result</h3>
							</div>
							<div class="card-body">
								<div class="ads-tabs">

							        <div class="row">

							        	@foreach($results as $item)
							        	<?php

							        		$course = App\Models\Course::findOrFail($item->course_id);
											$lesion = App\Models\Lesion::findOrFail($item->lesion_id);

							        	?>
							        	<div class="col-md-4 col-sm-6 col-6" style="margin: 10px;">
							        		<div class="result">

												<div class="card">
												  <div class="card-body">
												    <p class="" style="font-weight: bold;">Date: {{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</p>


												    <p class="" style="font-weight: bold;">Course: {{ $course->title }}</p>
												    <p class="" style="font-weight: bold;">Lesion: {{ $lesion->name }}</p>

												    <p class="" style="font-weight: bold;">Correct: {{ $item->correct }}</p>
												    <p class="" style="font-weight: bold;">Wrong: {{ $item->wrong }}</p>
												    <p class="" style="font-weight: bold;">Mark: {{ $item->mark }}</p>




												  </div>
												</div>

							        		</div>
							        	</div>

							        	@endforeach

							        </div>

								</div>
							</div>
						</div>
					</div>


                </div>
            </div>
        </section><!--/User Dashboard-->





@stop
