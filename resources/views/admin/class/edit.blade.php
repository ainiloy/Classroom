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


                                    <form action="{{route('admin.class.update', $class->id)}}" method="post"  enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Course</label>
                                                    <select name="course_id" class="form-control" id="" >

                                                        <option value="">Select</option>

                                                        @foreach($courses as $course)

                                                        <option value="{{$course->id}}" @php if ( $class->course_id == $course->id) { echo "selected"; } @endphp>{{$course->title}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Lesson</label>
                                                <table class="table table-striped" id="productImage">
                                                    <thead>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $data = json_decode($class->lesson)
                                                        @endphp
                                                        @foreach($data as $item)
                                                            <tr>
                                                                <td><input type="text" class="form-control" name="lesson[]"  value="{{ $item }}"></td>
                                                                <td> <button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button></td>
                                                            </tr>
                                                        @endforeach
                                                        <tr>
                                                            <td> <button id="add"  type="button" class="btn btn-success add"><i class="fa fa-plus-circle"></i> </button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label for="simpleinput">Class</label>
		                                            <input type="text" name="class" value="{{$class->class}}" id="simpleinput" class="form-control" >
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
@section('script')
<script>
    $(document).on('click', '.add', function(){
                var html = '';
                html += '<tr>';
                html += '<td><input type="text" name="lesson[]" class="form-control"/></td>';
                html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
                $('#productImage').append(html);
            });
            $(document).on('click', '.remove', function(){
                $(this).closest('tr').remove();
            });

</script>
@endsection