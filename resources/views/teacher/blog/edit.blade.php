@extends('admin.layouts.app')
@section('title')
    <title>Edit Blog</title>
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
                            <h4 class="mb-0 font-size-18">Edit Blog</h4>

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

                                <form method="post" action="{{ route('teacher.blog.update',$data->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="simpleinput">Title</label>
                                                <input type="text" name="title" id="simpleinput" class="form-control"
                                                    value="{{ $data->title }}" required>
                                            </div>

                                        </div>



                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="simpleinput">Blog Category</label>
                                                <select name="blog_category_id" class="form-control" id="" required>
                                                    <option value=""></option>
                                                    @foreach ($blog_categories as $item)
                                                        <option value="{{ $item->id }}" {{ $item->id == $data->blog_category_id ?'selected':'' }}>{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="simpleinput">Image</label><br>
                                                @if(!empty($data->image))

                                                <img src="{{ asset($data->image) }}" style="width:200px;height:200px;object-fit:cover" alt="">
                                                @endif
                                                <input type="file" name="image" id="simpleinput" class="form-control">
                                            </div>

                                        </div>


                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="simpleinput">Description</label>
                                                <textarea name="description" class="form-control summernote">{!! $data->description !!}</textarea>

                                            </div>

                                        </div>



                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Status</label>
                                                <select name="status" class="form-control" id="">
                                                    <option value="1" {{ $data->status == 1 ?'selected':'' }}>Active</option>
                                                    <option value="0" {{ $data->status == 0 ?'selected':'' }}>Inactive</option>
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
