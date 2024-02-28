@extends('teacher.layouts.app')
@section('title')
    <title>Edit Notice</title>
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
                                <h4 class="mb-0 font-size-18">Edit Notice</h4>

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

                                    <form action="{{route('teacher.notice.update', $data->id)}}" method="post"  enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf

                                        <div class="row">



                                            <div class="col-md-4">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Course</label>
                                                    <select name="course_id" class="form-control" id="" onchange="getBatch(this)">

                                                        <option value="">Select</option>

                                                        @foreach($courses as $item)
                                                        <option value="{{$item->id}}" @php if ( $data->course_id == $item->id) { echo "selected"; } @endphp>{{$item->title}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                
                                            </div>


                                            <div class="col-md-4">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Batch</label>
                                                    <select name="batch_id" class="form-control batch_id" id="" >

                                                        <option value="">Select</option>

                                                        @foreach($batches as $item)
                                                        <option value="{{$item->id}}" @php if ( $data->batch_id == $item->id) { echo "selected"; } @endphp>{{$item->name}}</option>
                                                        @endforeach

                                                       

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

                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Title</label>
                                                    <input type="text" name="title" id="simpleinput" class="form-control" value="{{ $data->title }}">
                                                </div>

                                            </div>




                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <label for="simpleinput">File</label>

                                                        <input type="file" name="file" class="dropify" data-max-file-size="1M"  data-default-file="{{ asset($data->file) }}"   />


                                                        <br>

                                                        <p style="font-weight: 900;">Current File: <a href="{{ asset($data->file) }}" target="_blank">{{ asset($data->file) }}</a></p>
                                        
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col -->
                                           

                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Description</label>
                                                 

                                                    <textarea name="description" class="form-control summernote" cols="30" rows="10">{!! $data->description !!}</textarea>


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