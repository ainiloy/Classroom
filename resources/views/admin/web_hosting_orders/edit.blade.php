@extends('admin.layouts.app')
@section('title')
    <title>Edit Web Hosting Order</title>
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
                            <h4 class="mb-0 font-size-18">Edit Web Hosting Order</h4>

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

                                <form method="post" action="{{ route('admin.web_hosting_orders.update', $data->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Domain Name</label>
                                                <input type="text" name="domain_name" class="form-control" value="{{ $data->domain_name }}"
                                                    readonly>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Customer Name</label>
                                                <input type="text" name="customer_name" class="form-control" value="{{ $data->customer_name }}"
                                                    readonly>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Choosen Package</label>
                                                <input type="text" name="email"class="form-control" value="{{ $data->webhosting->title }}"
                                                    readonly>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Email</label>
                                                <input type="text" name="email"class="form-control" value="{{ $data->email }}"
                                                    readonly>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Phone</label>
                                                <input type="text" name="phone" class="form-control" value="{{ $data->phone }}"
                                                    readonly>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Address</label>
                                                <input type="text" name="address" class="form-control" value="{{ $data->address }}"
                                                    readonly>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput">Customer Bkash Account</label>
                                                <input type="text" name="customer_bkash_number"class="form-control" value="{{ $data->customer_bkash_number }}"
                                                    readonly>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="simpleinput"> Bkash Transaction Id</label>
                                                <input type="text" name="transaction_id" class="form-control" value="{{ $data->transaction_id }}"
                                                    readonly>
                                            </div>

                                        </div>
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="simpleinput">Order Note</label>
                                               <textarea name="order_note" class="form-control" readonly>{{ $data->order_note }}</textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="simpleinput">Status</label>
                                                 <select name="status" class="form-control"id="">
                                                    <option value="pending" {{ $data->status =='pending'?'selected':'' }}>Pending</option>
                                                    <option value="cancel" {{ $data->status =='cancel'?'selected':'' }}>Cancel</option>

                                                    <option value="accetped" {{ $data->status =='accepted'?'selected':'' }}>Accepted</option>

                                                 </select>
                                            </div>

                                        </div>








                                     <div>
                                        <button type="submit"
                                        class="btn btn-primary waves-effect waves-light">Save</button>
                                     </div>


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
