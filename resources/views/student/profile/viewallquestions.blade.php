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
                                <h1 class="text-dark">All Questions</h1>
                                <ol class="breadcrumb text-center">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}"class="text-dark">Home</a></li>
                                    <li class="breadcrumb-item active text-dark" aria-current="page">All Questions</li>
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
								<h3 class="card-title">My Questions</h3>
							</div>
							<div class="card-body">
								<div class="ads-tabs">

									<div class="tab-content">
										<div class="tab-pane active table-responsive userprof-tab" id="tab1">
											<table class="table table-bordered table-hover mb-0 text-nowrap">
												<thead>
													<tr>
														<th>Question ID</th>
														<th>Course</th>
														<th>Date</th>
														<th>Title</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>

													@foreach($questions as $item)
													<?php
														$course = DB::table('courses')->where('id', $item->course_id)->first();
													?>
													<tr>
														<td>#{{ $item->question_id }}</td>
														<td>{{ $course->title }}</td>
														<td> {{ Carbon\Carbon::parse($item->date)->format('d/m/Y') }} </td>
														<td> {{ $item->question_title }} </td>

		                                            	<td>
			                                                @if($item->status == 1)
			                                                    <span class="btn  btn-success btn-sm">Answered</span>
			                                                @else
			                                                    <span class="btn btn-danger btn-sm">Not Answer Yet</span>
			                                                @endif
			                                            </td>

			                                            <td>

															<a href="{{ route('student.view-answer', $item->id) }}" target="_blank" class="btn btn-info btn-sm">
			                                                    <i class="fa fa-eye"></i>
			                                                </a>

															<a href="{{ route('student.delete-question', $item->id) }}" class="btn btn-danger btn-sm">
			                                                    <i class="fa fa-trash"></i>
			                                                </a>

			                                            </td>

													</tr>
													@endforeach

												</tbody>
											</table>
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
