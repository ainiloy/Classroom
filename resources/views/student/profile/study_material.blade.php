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
                                <h1 class="text-dark">Study Material</h1>
                                <ol class="breadcrumb text-center">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}" class="text-dark">Home</a></li>
                                    <li class="breadcrumb-item active text-dark" aria-current="page">Study Material</li>
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
								<h3 class="card-title">Search Study Material</h3>
							</div>
							<div class="card-body">
								<div class="ads-tabs">

									<div class="tab-content">
										<div class="tab-pane active table-responsive userprof-tab" id="tab1">

									        <form method="post" action="{{ route('student.update-profile') }}" enctype="multipart/form-data">
									            @csrf

									            <div class="card-body">
									                <div class="row">



									                    <div class="col-sm-6 col-md-6">
									                        <div class="form-group">
									                            <label class="form-label">Course</label>
									                            <select class="form-control" name="course_id" onchange="getBatch(this.value)" required>

								                                    <option value="">--Select--</option>

								                                    @foreach($purchases as $item)

																		<?php
																			$course = DB::table('courses')->where('id', $item->item_id)->first();
																			$category = DB::table('categories')->where('id', $course->category_id)->first();
																		?>

								                                    <option value="{{$course->id}}">{{$course->title}}</option>
								                                    @endforeach


									                            </select>
									                        </div>
									                    </div>


									                    <div class="col-sm-6 col-md-6">
									                        <div class="form-group">
									                            <label class="form-label">Batch</label>
									                            <select class="form-control batch_id" name="batch_id" onchange="getStudyMaterial(this.value)" required>

								                                    <option value="">--Select--</option>


									                            </select>
									                        </div>
									                    </div>





									                </div>
									            </div>


									        </form>

									        <div class="searching" style="display: none; text-align: center;">
									        	<p>Loading...</p>
									        </div>

									        <div class="study_material_list">

									        </div>

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
