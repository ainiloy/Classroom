@extends('admin.layouts.app')
@section('title')
    <title>Add Course</title>
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

                                    <form method="post" action="{{route('admin.course.store')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">



                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Category</label>
                                                    <select name="category_id" class="form-control" id="" >

                                                        <option value="">Select</option>

                                                        @foreach($categories as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                
                                            </div>

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
		                                            <label for="simpleinput">Title</label>
		                                            <input type="text" name="title" id="simpleinput" class="form-control" >
		                                        </div>

                                        	</div>


                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Slug <span style="color: red;">( Must in english )</span></label>
                                                    <input type="text" name="slug" id="simpleinput" class="form-control" required>
                                                </div>

                                            </div>


                                        	<div class="col-md-6">
		                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Online / Offline</label>
		                                            <select name="offline_or_online" class="form-control" id="" >

                                                        <option value="">Select</option>

		                                            	<option value="1">Online</option>
		                                            	<option value="0">Offline</option>
		                                            </select>
		                                        </div>
                                        		
                                        	</div>


                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Professional / Student</label>
                                                    <select name="student_or_pro" class="form-control" id="" >
                                                        <option value="">Select</option>
                                                        <option value="1">Professional</option>
                                                        <option value="0">Student</option>
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Admission Start</label>
                                                    <input type="date" name="admission_starting_date" id="simpleinput" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Admission End</label>
                                                    <input type="date" name="admission_ending_date" id="simpleinput" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Class Start</label>
                                                    <input type="date" name="class_start" id="simpleinput" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Class Time</label>
                                                    <input type="text" name="time" id="simpleinput" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="simpleinput">Course Duration</label>
                                                    <input type="number" name="course_duration" id="simpleinput" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Day</label>
                                                    <input type="number" name="day" id="simpleinput" class="form-control" required>
                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Price</label>
                                                    <input type="number" name="price" id="simpleinput" class="form-control" >
                                                </div>

                                            </div>


                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Total enrolled</label>
                                                    <input type="number" name="total_enrolled" id="simpleinput" class="form-control" >
                                                </div>

                                            </div>




                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Total lectures</label>
                                                    <input type="number" name="lectures" id="simpleinput" class="form-control" >
                                                </div>

                                            </div>



                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Total quizzes</label>
                                                    <input type="number" name="quizzes" id="simpleinput" class="form-control" >
                                                </div>

                                            </div>



                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Skill level</label>
                                                    <input type="text" name="skill_level" id="simpleinput" class="form-control" >
                                                </div>

                                            </div>



                                            <div class="col-md-4">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Assessments</label>
                                                    <select name="assessments" class="form-control" id="" >
                                                        <option value="">Select</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
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

                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <div class="card-body">
                                        
                                                        <input type="file" name="image" class="dropify" data-max-file-size="1M" data-default-file=""   />
                                        
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col -->


                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Description</label>
                                                 

                                                    <textarea name="description" class="form-control summernote" cols="30" rows="10"></textarea>


                                                </div>

                                            </div>


                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Long Description</label>
                                                 

                                                    <textarea name="description_long" class="form-control summernote" cols="30" rows="10"></textarea>


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