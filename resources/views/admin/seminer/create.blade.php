@extends('admin.layouts.app')
@section('title')
    <title>Add Seminer</title>
@endsection
@section('content')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Add Course</h4>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

             
                    @include('admin.layouts.notify')

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
 
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">

                                    <form method="post" action="{{route('admin.seminer.store')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Teacher</label>
                                                    <select name="teacher_id" class="form-control" id="" >

                                                        <option value="">Select</option>

                                                        @foreach($teachers as $teacher)
                                                        <option value="{{$teacher->id}}">{{$teacher->user->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label for="simpleinput">Date</label>
		                                            <input type="date" name="date" id="simpleinput" class="form-control" >
		                                        </div>
                                        	</div>

                                        	<div class="col-md-6">
		                                        <div class="form-group">
		                                            <label for="simpleinput">Title</label>
		                                            <input type="text" name="title" id="simpleinput" class="form-control" >
		                                        </div>
                                        	</div>


                                        	<div class="col-md-6">
		                                        <div class="form-group">
		                                            <label for="simpleinput">Time</label>
		                                            <input type="text" name="time" id="simpleinput" class="form-control" >
		                                        </div>
                                        	</div>

                                        	<div class="col-md-6">
		                                        <div class="form-group">
		                                            <label for="simpleinput">Online / Offline</label>
		                                            <select name="online_or_offline" class="form-control" id="" >
                                                        <option value="">Select</option>
		                                            	<option value="1">Online</option>
		                                            	<option value="0">Offline</option>
		                                            </select>
		                                        </div>
                                        	</div>

                                            <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label for="simpleinput">Link</label>
		                                            <input type="text" name="link" id="simpleinput" class="form-control" >
		                                        </div>
                                        	</div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="simpleinput">Status</label>
                                                    <select name="status" class="form-control" id="" >
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      	<button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                    </form>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('admin.layouts.footer')

        </div>
        <!-- end main content-->


@stop