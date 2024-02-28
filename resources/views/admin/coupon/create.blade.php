@extends('admin.layouts.app')
@section('title')
    <title>Add Coupon</title>
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
                                <h4 class="mb-0 font-size-18">Add Coupon</h4>

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

                                    <form method="post" action="{{route('admin.coupon.store')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">



                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Coupon code</label>
		                                            <input type="text" name="coupon_code" id="simpleinput" class="form-control" required>
                                                   
                                                </div>
                                                
                                            </div>

                                        	<div class="col-md-6">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Days</label>
		                                            <input type="number" name="days" id="simpleinput" class="form-control" required>
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Discount</label>
		                                            <input type="number" name="discount" id="simpleinput" class="form-control" required>
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Coupon User Limit</label>
		                                            <input type="number" name="coupon_limit" id="simpleinput" class="form-control" required>
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