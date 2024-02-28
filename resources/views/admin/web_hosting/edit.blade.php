@extends('admin.layouts.app')
@section('title')
    <title>Edit Web Hosting</title>
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
                            <h4 class="mb-0 font-size-18">Edit Web Hosting</h4>

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

                                <form method="post" action="{{ route('admin.web_hosting.update', $data->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">



                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Title</label>
                                                <input type="text" name="title" id="simpleinput"
                                                    value="{{ $data->title }}" class="form-control" required>
                                            </div>

                                        </div>


                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Price</label>
                                                <input type="text" name="price" value="{{ $data->price }}"
                                                    class="form-control">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Type</label>
                                                <select name="type" class="form-control" id="">
                                                    <option value="Year" {{ $data->type =='Year'?'selected':'' }}>Year</option>
                                                    <option value="Month" {{ $data->type =='Month'?'selected':'' }}>Month</option>

                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Background Color</label>
                                                <input type="text" name="background_color"
                                                    value="{{ $data->background_color }}" class="form-control">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Color</label>
                                                <input type="text" name="color" value="{{ $data->color }}"
                                                    class="form-control">
                                            </div>

                                        </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="simpleinput">Bkash Payment Number</label>
                                            <input type="text" name="payment_number" value="{{ $data->payment_number }}" class="form-control">
                                        </div>

                                    </div>
                                    <div class="col-md-12 col-12">

                                        <div class="form-group">
                                            <label for="simpleinput">Features</label>

                                            <table class="table table-striped" id="features">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                    @if ($data->feature)
                                                        @foreach (json_decode($data->feature) as $item)
                                                            <tr>
                                                                <td><input type="text" class="form-control"
                                                                        value="{{ $item }}"
                                                                        name="feature[]" placeholder="Features">
                                                                </td>
                                                                <td><button type="button" name="remove"
                                                                        class="btn btn-danger btn-sm remove"><span
                                                                            class="fa fa-minus-circle"></span></button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <p>No Data available.</p>
                                                    @endif
                                                    <tr>

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
                                                <option value="1" {{ $data->status == 1 ?'selected':'' }}>Active</option>
                                                <option value="0" {{ $data->status == 0 ?'selected':'' }}>Inactive</option>
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
