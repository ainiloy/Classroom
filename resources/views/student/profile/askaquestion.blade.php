@extends('layouts.app2')

@section('content')


        <!--Section-->
        @include('student.layouts.second_style')            <!--Topbar-->


            {{-- @include('layouts.header') --}}


            <!--Section-->
            <section>
                <div class="bannerimg">
                    <div class="header-text mb-0">
                        <div class="container">
                            <div class="text-center text-white">
                                <h1 class="text-dark">Ask a question</h1>
                                <ol class="breadcrumb text-center">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}" class="text-dark">Home /</a></li>
                                    <li class="breadcrumb-item active text-dark" aria-current="page">Ask a question</li>
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
					            <h3 class="card-title">Ask a question</h3>
					        </div>

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

					        <form method="post" action="{{ route('student.save_question') }}" enctype="multipart/form-data">
					            @csrf

					            <div class="card-body">
					                <div class="row">


					                    <div class="col-sm-6 col-md-6">
					                        <div class="form-group">
					                            <label class="form-label">Question ID</label>
					                            <input type="text" class="form-control" name="question_id" required>
					                        </div>
					                    </div>


					                    <div class="col-sm-6 col-md-6">
					                        <div class="form-group">
					                            <label class="form-label">Course</label>
					                            <select class="form-control" name="course_id" onchange="getBatch(this.value)" required>

				                                    <option value="">--Select--</option>

				                                    @foreach($purchases as $item)

														<?php
															$course = DB::table('courses')->where('id', $item->item_id)->first();
														?>

				                                    <option value="{{$course->id}}">{{$course->title}}</option>
				                                    @endforeach


					                            </select>
					                        </div>
					                    </div>




					                    <div class="col-sm-12 col-md-12">
					                        <div class="form-group">
					                            <label class="form-label">Question Title</label>
					                            <input type="text" class="form-control" name="question_title" required>
					                        </div>
					                    </div>



					                    <div class="col-sm-12 col-md-12">
					                        <div class="form-group">
					                            <label class="form-label">Question Description</label>
					                            <textarea name="question_description" class="form-control summernote" cols="30" rows="10" required></textarea>
					                        </div>
					                    </div>


					                </div>
					            </div>
					            <div class="card-footer">
					                <button type="submit" class="btn btn-primary">Save Question</button>



					            </div>


					        </form>

					    </div>
					</div>



                </div>
            </div>
        </section><!--/User Dashboard-->





@stop
