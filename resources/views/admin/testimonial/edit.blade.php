@extends('admin.layouts.app')
@section('title')
    <title>Edit Testimonial</title>
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
                                <h4 class="mb-0 font-size-18">Edit Testimonial</h4>

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


                                    <form method="post" action="{{route('admin.testimonial.update', $testimonial->id)}}" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="simpleinput">Teacher</label>
                                                    <select name="student_id" class="form-control" id="" >

                                                        <option value="">Select</option>

                                                        @foreach($students as $student)
                                                        <option value="{{$student->id}}"  @php if ( $testimonial->student_id == $student->id) { echo "selected"; } @endphp>{{$student->name}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Title</label>
                                                    <input type="text" name="title" id="simpleinput" value="{{ $testimonial->title }}" class="form-control" >
                                                </div>
                                            </div>

                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <div class="card-body">
                                        
                                                        <input type="file" name="image" class="dropify" data-max-file-size="1M" data-default-file="{{ asset($testimonial->image) }}"   />
                                        
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Long Description</label>
                                                    <textarea name="description" class="form-control summernote" cols="30" rows="3">{!! $testimonial->description !!}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Status</label>
                                                    <select name="status" class="form-control" id="">
                                                        <option value="1" @php if ( $testimonial->status == 1) { echo "selected"; } @endphp>Active</option>
                                                        <option value="0" @php if ( $testimonial->status == 0) { echo "selected"; } @endphp>Inactive</option>
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