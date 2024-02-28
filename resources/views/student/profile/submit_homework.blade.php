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
                                <h1 class="text-dark">Submit Home work</h1>
                                <ol class="breadcrumb text-center">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}" class="text-dark">Home</a></li>
                                    <li class="breadcrumb-item active text-dark" aria-current="page">Submit Home work</li>
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



					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title"> Home work - Course: {{ $course->title }} -  Batch: {{ $batch->name }}</h3>
							</div>
							<div class="card-body">
								<div class="ads-tabs">

									<div class="tab-content">
										<div class="tab-pane active table-responsive userprof-tab" id="tab1">


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

									        <form method="post" action="{{ route('student.student-submit-homework', $home_work->id) }}" enctype="multipart/form-data">
									            @csrf

									            <div class="card-body">
									                <div class="row">



									                    <div class="col-sm-12 col-md-12">
									                        <div class="form-group">
									                            <label class="form-label">Write here</label>
									                            <textarea name="homework_answer" class="form-control summernote" id="" cols="30" rows="10"></textarea>

									                        </div>
									                    </div>


									                    <div class="col-sm-12 col-md-12">
									                        <div class="form-group">
									                            <label class="form-label">File ( You can select multiple files )</label>
									                            <input type="file" name="homework_answer_file[]" class="form-control" multiple>
									                        </div>
									                    </div>





									                </div>
									            </div>

					                            <div class="card-footer">
					                                <button type="submit" class="btn btn-primary">Submit</button>
					                            </div>
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
