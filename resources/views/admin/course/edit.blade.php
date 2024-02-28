@extends('admin.layouts.app')
@section('title')
    <title>Edit Course</title>
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
                                <h4 class="mb-0 font-size-18">Edit Course</h4>

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


                                    <form action="{{route('admin.course.update', $data->id)}}" method="post"  enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf

                                        <div class="row">



                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Category</label>
                                                    <select name="category_id" class="form-control" id="" >

                                                        <option value="">Select</option>

                                                        @foreach($categories as $item)

                                                        <option value="{{$item->id}}" @php if ( $data->category_id == $item->id) { echo "selected"; } @endphp>{{$item->name}}</option>
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
                                                        <option value="{{$teacher->id}}"  @php if ( $data->teacher_id == $teacher->id) { echo "selected"; } @endphp>{{$teacher->user->name}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                            </div>

                                        

                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Title</label>
                                                    <input type="text" name="title" value="{{ $data->title }}"  id="simpleinput" class="form-control" >
                                                </div>

                                            </div>


                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Slug <span style="color: red;">( Must in english )</span></label>
                                                    <input type="text" name="slug"  value="{{ $data->slug }}" id="simpleinput" class="form-control" required>
                                                </div>

                                            </div>


                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Title (En)</label>
                                                    <input type="text" name="title_en" value="{{ $data->title_en }}"  id="simpleinput" class="form-control">
                                                </div>

                                            </div>



                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Online / Offline</label>
                                                    <select name="offline_or_online" class="form-control" id="" >

                                                        <option value="">Select</option>

                                                        <option value="1" @php if ( $data->offline_or_online == 1) { echo "selected"; } @endphp >Online</option>
                                                        <option value="0" @php if ( $data->offline_or_online == 0) { echo "selected"; } @endphp>Offline</option>
                                                    </select>
                                                </div>
                                                
                                            </div>


                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Professional / Student</label>
                                                    <select name="student_or_pro" class="form-control" id="" >
                                                        <option value="">Select</option>
                                                        <option value="1" @php if ( $data->student_or_pro == 1) { echo "selected"; } @endphp>Professional</option>
                                                        <option value="0" @php if ( $data->student_or_pro == 0) { echo "selected"; } @endphp>Student</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Admission Start</label>
                                                    <input type="date" name="admission_starting_date" id="simpleinput" value="{{ optional($data->admission_starting_date ?? null)->format('Y-m-d') }}" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Admission End</label>
                                                    <input type="date" name="admission_ending_date" id="simpleinput" value="{{ optional($data->admission_ending_date ?? null)->format('Y-m-d') }}" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Class Start</label>
                                                    <input type="date" name="class_start" id="simpleinput" value="{{optional($data->class_start ?? null)->format('Y-m-d') }}" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Class Time</label>
                                                    <input type="text" name="time" id="simpleinput"  value="{{ $data->time }}" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Course Duration</label>
                                                    <input type="number" name="course_duration" id="simpleinput" value="{{$data->course_duration ?? ''}}" class="form-control" required>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Day</label>
                                                    <input type="number" name="day" id="simpleinput" value="{{$data->day ?? ''}}" class="form-control" required >
                                                </div>

                                            </div>

                                            <div class="col-md-3">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Price</label>
                                                    <input type="number" name="price" value="{{ $data->price }}" id="simpleinput" class="form-control" >
                                                </div>

                                            </div>


                                            <div class="col-md-3">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Total enrolled</label>
                                                    <input type="number" name="total_enrolled" value="{{ $data->total_enrolled }}" id="simpleinput" class="form-control" >
                                                </div>

                                            </div>




                                            <div class="col-md-3">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Total lectures</label>
                                                    <input type="number" name="lectures" value="{{ $data->lectures }}" id="simpleinput" class="form-control" >
                                                </div>

                                            </div>



                                            <div class="col-md-3">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Total quizzes</label>
                                                    <input type="number" name="quizzes" value="{{ $data->quizzes }}" id="simpleinput" class="form-control" >
                                                </div>

                                            </div>



                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Skill level</label>
                                                    <input type="text" name="skill_level" value="{{ $data->skill_level }}" id="simpleinput" class="form-control" >
                                                </div>

                                            </div>



                                            <div class="col-md-4">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Assessments</label>
                                                    <select name="assessments" class="form-control" id="" >
                                                        <option value="">Select</option>
                                                        <option value="Yes" @php if ( $data->assessments == "Yes") { echo "selected"; } @endphp>Yes</option>
                                                        <option value="No" @php if ( $data->assessments == "No") { echo "selected"; } @endphp>No</option>
                                                    </select>
                                                </div>
                                                
                                            </div>


                                            



                                            <div class="col-md-4">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Status</label>
                                                    <select name="status" class="form-control" id="">
                                                        <option value="1" @php if ( $data->status == 1) { echo "selected"; } @endphp>Active</option>
                                                        <option value="0" @php if ( $data->status == 0) { echo "selected"; } @endphp>Inactive</option>
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <div class="card-body">
                                        
                                                        <input type="file" name="image" class="dropify" data-max-file-size="1M" data-default-file="{{ asset($data->image) }}"   />
                                        
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col -->
                                        
                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Description</label>
                                                 

                                                    <textarea name="description" class="form-control summernote" cols="30" rows="10">{!! $data->description !!}</textarea>


                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Long Description</label>
                                                 

                                                    <textarea name="description_long" class="form-control summernote" cols="30" rows="10">{!! $data->description_long !!}</textarea>


                                                </div>

                                            </div>


                                        </div>


                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                       
                                        
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