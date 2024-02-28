@extends('teacher.layouts.app')
@section('title')
    <title>Class Link Information</title>
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
                        <div class="col-12 mb-3">

                               <div class="row">
                                <div class="col-md-4">
                                    <h4 class="mb-0 font-size-18">Add Class Link Information</h4>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('teacher.serach.for.class') }}"  class="btn btn-primary">Search For Class</a>
                                 </div>
                                 <div class="col-md-4">
                                    <a href="{{ route('teacher.search.for.attendance') }}" class="btn btn-success">Search For Attendance</a>
                                 </div>
                               </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    @include('teacher.layouts.notify')

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

                                    <form method="post" action="{{route('teacher.class_link.store')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <label for="simpleinput">Class Link Id</label>
                                                    <input type="text" placeholder="Class Link Id" class="form-control" readonly>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <label for="simpleinput">Course <span class="text-danger">*</span></label>
                                                    <select name="course_id" class="form-control" id="" onchange="getBatch(this)" required>

                                                        <option value="">Select</option>

                                                        @foreach($courses as $item)
                                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                            </div>


                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <label for="simpleinput">Batch <span class="text-danger">*</span></label>
                                                    <select name="batch_id" class="form-control batch_id" id="" required>

                                                        <option value="">Select</option>
                                                        @foreach($batches as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach


                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="simpleinput">Class Lesson (Click to load..) <span class="text-danger">*</span></label>
                                                    <select name="class_lesson_id" class="form-control" id="" required>

                                                        <option value="">Select</option>
                                                        @foreach($class_lessons as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach


                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="simpleinput">Vanue (Click to load..) <span class="text-danger">*</span></label>
                                                    <select name="vanue_id" class="form-control" id="" required>

                                                        <option value="">Select</option>
                                                        @foreach($vanues as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach


                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-12">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Class Link <span class="text-danger">*</span></label>
		                                            <input type="text" name="class_link" id="simpleinput" placeholder="Class Link" class="form-control" required>
		                                        </div>

                                        	</div>
                                            <div class="col-md-12">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Join Link <span class="text-danger">*</span></label>
		                                            <input type="text" name="join_link" id="simpleinput" placeholder="Join Link" class="form-control" required>
		                                        </div>

                                        	</div>
                                            <div class="col-md-12">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Host Id <span class="text-danger">*</span></label>
		                                            <input type="text" name="host_id" id="simpleinput" placeholder="Host Id" class="form-control" required>
		                                        </div>

                                        	</div>
                                            <div class="col-md-12">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Meeting Id <span class="text-danger">*</span></label>
		                                            <input type="text" name="meeting_id" id="simpleinput" placeholder="Meeting Id" class="form-control" required>
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Meeting Password<span class="text-danger">*</span></label>
		                                            <input type="text" name="meeting_password" id="simpleinput" placeholder="Meeting Password" class="form-control" required>
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Meeting User<span class="text-danger">*</span></label>
		                                            <input type="text" name="meeting_user" id="simpleinput" placeholder="Meeting User" class="form-control" required>
		                                        </div>

                                        	</div>
                                            <div class="col-md-3">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Start Date</label>
		                                            <input type="date" value="{{ date('Y-m-d')}}" name="start_date" id="simpleinput"  class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-3">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Start Time</label>
		                                            <input type="time" name="start_time" id="simpleinput"  class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-3">

		                                        <div class="form-group">
		                                            <label for="simpleinput">End Date</label>
		                                            <input type="date" value="{{ date('Y-m-d')}}" name="end_date" id="simpleinput"  class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-3">

		                                        <div class="form-group">
		                                            <label for="simpleinput">End Time</label>
		                                            <input type="time" name="end_time" id="simpleinput"  class="form-control">
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

            @include('teacher.layouts.footer')

        </div>
        <!-- end main content-->


@stop
