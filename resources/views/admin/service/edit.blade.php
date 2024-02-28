@extends('admin.layouts.app')
@section('title')
    <title>Edit Service</title>
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
                            <h4 class="mb-0 font-size-18">Edit Service</h4>

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

                                <form method="post" action="{{ route('admin.services.update', $data->id) }}"
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
                                                <label for="simpleinput">Image</label><br>
                                                @if ($data->image)
                                                    <img src="{{ asset($data->image) }}" style="width:100px" alt="">
                                                @endif
                                                <input type="file" name="image" class="form-control">
                                            </div>

                                        </div>
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="simpleinput">Short Description</label>

                                                <textarea name="short_description" class="form-control" id="" cols="30" rows="3">{{ $data->short_description }}</textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="simpleinput">Business Plan</label>

                                                <textarea name="business_plan" class="form-control" id="" cols="30" rows="3">{{ $data->business_plan }}</textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="form-group">
                                                <label for="simpleinput">Service Features</label>

                                                <table class="table table-striped" id="features">
                                                    <thead>
                                                    </thead>
                                                    <tbody>
                                                        @if ($data->service_feature)
                                                            @foreach (json_decode($data->service_feature) as $item)
                                                                <tr>
                                                                    <td><input type="text" class="form-control"
                                                                            value="{{ $item }}"
                                                                            name="service_feature[]" placeholder="Features">
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

                                        <div class="col-md-6 col-12">

                                            <div class="form-group">
                                                <label for="simpleinput">Support Charge</label>

                                                <table class="table table-striped" id="charge">
                                                    <thead>
                                                    </thead>
                                                    <tbody>
                                                        @if ($data->support_charge)
                                                            @foreach (json_decode($data->support_charge) as $item)
                                                                <tr>
                                                                    <td><input type="text" class="form-control"
                                                                            value="{{ $item }}"
                                                                            name="support_charge[]" placeholder="Features">
                                                                    </td>
                                                                    <td><button type="button" name="remove"
                                                                            class="btn btn-danger btn-sm charge_remove"><span
                                                                                class="fa fa-minus-circle"></span></button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <p>No Data available.</p>
                                                        @endif
                                                        <tr>

                                                            <td> <button id="charge_add" type="button"
                                                                    class="btn btn-success charge_add"><i
                                                                        class="fa fa-plus-circle"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr></tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="form-group">
                                                <label for="simpleinput">Training</label>

                                                <table class="table table-striped" id="training">
                                                    <thead>
                                                    </thead>
                                                    <tbody>
                                                        @if ($data->training)
                                                        @foreach (json_decode($data->training) as $item)
                                                            <tr>
                                                                <td><input type="text" class="form-control"
                                                                        value="{{ $item }}"
                                                                        name="training[]" placeholder="Features">
                                                                </td>
                                                                <td><button type="button" name="remove"
                                                                        class="btn btn-danger btn-sm training_remove"><span
                                                                            class="fa fa-minus-circle"></span></button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <p>No Data available.</p>
                                                    @endif
                                                        <tr>

                                                            <td> <button id="training_add" type="button"
                                                                    class="btn btn-success training_add"><i
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

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Additional Cost One Name</label>

                                                <input type="text" class="form-control mb-2"
                                                    name="additional_cost_one" value="{{ $data->additional_cost_one }}" placeholder="Additional Cost One">
                                                <input type="text" class="form-control" value="{{ $data->cost_one }}" name="cost_one"
                                                    placeholder="Cost One">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Additional Cost Two Name</label>

                                                <input type="text" class="form-control mb-2"
                                                    name="additional_cost_two" value="{{ $data->additional_cost_two }}" placeholder="Additional Cost Two">
                                                <input type="text" class="form-control" value="{{ $data->cost_two }}" name="cost_two"
                                                    placeholder="Cost Two">
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Additional Cost Three Name</label>

                                                <input type="text" class="form-control mb-2"
                                                    name="additional_cost_three" value="{{ $data->additional_cost_three }}" placeholder="Additional Cost Three">
                                                <input type="text" class="form-control" value="{{ $data->cost_three }}" name="cost_three"
                                                    placeholder="Cost Three">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Additional Cost Three Four</label>

                                                <input type="text" class="form-control mb-2"
                                                    name="additional_cost_four" value="{{ $data->additional_cost_four }}"  placeholder="Additional Cost Four">
                                                <input type="text" class="form-control" value="{{ $data->cost_four }}" name="cost_four"
                                                    placeholder="Cost Four">
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
@section('script')

    <script>
        $(document).on('click', '.add', function() {

            var html = '';
            html += '<tr>';
            html +=
                '<td><input type="text" name="service_feature[]" placeholder="Features" class="form-control"/></td>';
            html +=
                '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
            $('#features').append(html);
        });
        $(document).on('click', '.remove', function() {
            $(this).closest('tr').remove();
        });
    </script>
    <script>
        $(document).on('click', '.charge_add', function() {

            var html = '';
            html += '<tr>';
            html +=
                '<td><input type="text" name="support_charge[]" placeholder="Support Charge" class="form-control"/></td>';
            html +=
                '<td><button type="button" name="remove" class="btn btn-danger btn-sm charge_remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
            $('#charge').append(html);
        });
        $(document).on('click', '.charge_remove', function() {
            $(this).closest('tr').remove();
        });
    </script>
    <script>
        $(document).on('click', '.training_add', function() {

            var html = '';
            html += '<tr>';
            html += '<td><input type="text" name="training[]" placeholder="Training" class="form-control"/></td>';
            html +=
                '<td><button type="button" name="remove" class="btn btn-danger btn-sm training_remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
            $('#training').append(html);
        });
        $(document).on('click', '.training_remove', function() {
            $(this).closest('tr').remove();
        });
    </script>

@endsection
