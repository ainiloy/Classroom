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
                                <h1 class="text-dark">Account details</h1>
                                <ol class="breadcrumb text-center">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}" class="text-dark">Home /</a></li>
                                    <li class="breadcrumb-item active text-dark" aria-current="page">Account details</li>
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
								<h3 class="card-title">My Active Courses</h3>
							</div>
							<div class="card-body">
								<div class="ads-tabs">

									<div class="tab-content">
										<div class="tab-pane active table-responsive userprof-tab" id="tab1">
											<table class="table table-bordered table-hover mb-0 text-nowrap">
												<thead>
													<tr>
														<th>Invoice</th>
														<th>Course</th>
														<th>Category</th>
														<th>Fees</th>
														<th>Course Status</th>
													</tr>
												</thead>
												<tbody>

													@foreach($purchases as $item)
													<?php
														$course = DB::table('courses')->where('id', $item->item_id)->first();

														$category = DB::table('categories')->where('id', $course->category_id)->first();
													?>
													<tr>
														<td>#{{ $item->order_id }}</td>
														<td>
															<div class="media mt-0 mb-0">
																<div class="card-aside-img">
																	<a href="{{ asset($course->image) }}" target="_blank"></a>

																	@if($course->image)
																		<img src="{{ asset($course->image) }}" alt="img">
																	@endif

																</div>
																<div class="media-body">
																	<div class="card-item-desc ms-4 p-0 mt-2">
																		<a href="javascript:void(0);" class="text-dark"><h4 class="font-weight-semibold">{{$course->title ?? ''}}</h4></a>
																		<a href="javascript:void(0);"><i class="fa fa-clock-o me-1"></i>
																			{{ Carbon\Carbon::parse($course->created_at)->format('d M Y' )}}
																		</a>
																	</div>
																</div>
															</div>
														</td>
														<td>{{$category->name ?? ''}}</td>
														<td class="font-weight-semibold fs-16">{{$course->price ?? ''}}/-</td>
														<td>
															@if($item->status == 1)
															<a href="javascript:void(0);" class="badge badge-success">Approved</a>
															@else
															<a href="javascript:void(0);" class="badge badge-warning">Pending</a>
															@endif
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
