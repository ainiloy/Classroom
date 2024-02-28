@extends('admin.layouts.app')
@section('title')
    <title>Edit Class Lesson</title>
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
                                <h4 class="mb-0 font-size-18">Edit Class Lesson</h4>

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


                                    <form action="{{route('admin.class_lesson.update', $data->id)}}" method="post"  enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf

                                        <div class="row">





                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="simpleinput">Name</label>
                                                    <input type="text" name="name" value="{{ $data->name }}"  id="simpleinput" class="form-control" >
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
