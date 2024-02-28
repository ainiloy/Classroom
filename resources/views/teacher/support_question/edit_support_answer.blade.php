@extends('teacher.layouts.app')
@section('title')
    <title>Edit Support Question</title>
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
                                <h4 class="mb-0 font-size-18">Edit Support Question</h4>

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


                                    <form action="{{route('teacher.update-support-answer', $data->id)}}" method="post"  enctype="multipart/form-data">
                             
                                    @csrf

                                        <div class="row">


					                    <div class="col-sm-6 col-md-6">
					                        <div class="form-group">
					                            <label class="form-label">Question ID</label>
					                            <input type="text" class="form-control" name="question_id" value="{{ $data->question_id }}" readonly="">
					                        </div>
					                    </div>



                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Course</label>
                                                    <select name="course_id" class="form-control" id="" required>

                                                        <option value="">Select</option>

                                                        @foreach($courses as $item)

                                                        <option value="{{$item->id}}" @php if ( $data->course_id == $item->id) { echo "selected"; } @endphp>{{$item->title}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                
                                            </div>


						                    <div class="col-sm-12 col-md-12">
						                        <div class="form-group">
						                            <label class="form-label">Question Title</label>
						                            <input type="text" class="form-control" name="question_title" value="{{ $data->question_title }}"  required>
						                        </div>
						                    </div>



						                    <div class="col-sm-12 col-md-12">
						                        <div class="form-group">
						                            <label class="form-label">Question Description</label>
						                            <textarea name="question_description" class="form-control summernote" cols="30" rows="10" required>{!! $data->question_description !!}</textarea>
						                        </div>
						                    </div>



						                    <div class="col-sm-12 col-md-12">
						                        <div class="form-group">
						                            <label class="form-label">Question Answer</label>
						                            <textarea name="question_answer" class="form-control summernote" cols="30" rows="10" required>{!! $data->question_answer !!}</textarea>
						                        </div>
						                    </div>



                                            <div class="col-md-4">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Status</label>
                                                    <select name="status" class="form-control" id="">
                                                        <option value="1" @php if ( $data->status == 1) { echo "selected"; } @endphp>Done</option>
                                                        <option value="0" @php if ( $data->status == 0) { echo "selected"; } @endphp>Not Answer yet</option>
                                                    </select>
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

            @include('teacher.layouts.footer')

        </div>
        <!-- end main content-->


@stop