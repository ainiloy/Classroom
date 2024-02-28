@extends('admin.layouts.app')
@section('title')
    <title>Add Service Package</title>
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
                                <h4 class="mb-0 font-size-18">Add Service Package</h4>

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

                                    <form method="post" action="{{route('admin.service_package.store')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Service</label>
                                                    <select name="service_id" class="form-control" id="" required>
                                                         <option value="">--Select--</option>
                                                         @foreach ($services as $item)
                                                              <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                         @endforeach
                                                    </select>
		                                        </div>

                                        	</div>


                                        	<div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Title</label>
		                                            <input type="text" name="title" id="simpleinput" class="form-control" required>
		                                        </div>

                                        	</div>


                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="simpleinput">Price</label>
                                                    <input type="text" name="price" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="simpleinput">Technology</label>
                                                    <input type="text" name="technology" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="simpleinput">Background Color</label>
                                                    <input type="text" name="background_color" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="simpleinput">Color</label>
                                                    <input type="text" name="color" class="form-control">
                                                </div>

                                            </div>


                                            </div>
                                            <div class="col-md-12 col-12">

                                                <div class="form-group">
                                                    <label for="simpleinput">Features</label>

                                                    <table class="table table-striped" id="features">
                                                        <thead>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control"
                                                                        name="feature[]" placeholder="Features"></td>
                                                                <td> <button id="add" type="button"
                                                                        class="btn btn-success add"><i
                                                                            class="fa fa-plus-circle"></i> </button>
                                                                </td>
                                                            </tr>
                                                            <tr></tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>





                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="simpleinput">Status</label>
                                                    <select name="status" class="form-control" id="">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>

                                            </div>





                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>


                                        </div>




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
    $(document).on('click', '.add', function() {

        var html = '';
        html += '<tr>';
        html += '<td><input type="text" name="feature[]" placeholder="Features" class="form-control"/></td>';
        html +=
            '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
        $('#features').append(html);
    });
    $(document).on('click', '.remove', function() {
        $(this).closest('tr').remove();
    });
</script>


@endsection
