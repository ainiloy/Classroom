@extends('layouts.app2')

@section('content')

@include('student.layouts.second_style')
            <!--Topbar-->


            {{-- @include('layouts.header') --}}


            <!--Section-->
            <section>
                <div class="bannerimg">
                    <div class="header-text mb-0">
                        <div class="container">
                            <div class="text-center text-white">
                                <h1 class="text-dark">Change Password</h1>
                                <ol class="breadcrumb text-center">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}" class="text-dark">Home /</a></li>
                                    <li class="breadcrumb-item active text-dark" aria-current="page">Change Password</li>
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
	                            <h3 class="card-title">Change Password</h3>
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

	                        <form method="post" action="{{ route('student.update-password') }}" enctype="multipart/form-data">
	                            @csrf

	                            <div class="card-body">
	                                <div class="row">


	                                    <div class="col-sm-4 col-md-4">
	                                        <div class="form-group">
	                                            <label class="form-label">Current Password</label>
	                                            <input type="password" class="form-control" name="current_password">
	                                        </div>
	                                    </div>

	                                    <div class="col-sm-4 col-md-4">
	                                        <div class="form-group">
	                                            <label class="form-label">New Password</label>
	                                            <input type="password" class="form-control" name="password">
	                                        </div>
	                                    </div>

	                                    <div class="col-sm-4 col-md-4">
	                                        <div class="form-group">
	                                            <label class="form-label">Confirm Password</label>
	                                            <input type="password" class="form-control" name="password_confirmation">
	                                        </div>
	                                    </div>


	                                </div>
	                            </div>
	                            <div class="card-footer">
	                                <button type="submit" class="btn btn-primary">Updated Password</button>
	                            </div>


	                        </form>

	                    </div>
	                </div>


                </div>
            </div>
        </section><!--/User Dashboard-->





@stop
