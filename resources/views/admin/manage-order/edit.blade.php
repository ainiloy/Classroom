@extends('admin.layouts.app')
@section('title')
    <title>Course Order</title>
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
                                <h4 class="mb-0 font-size-18">Course Order</h4>

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

                               

                                   <form action="{{route('admin.order-handle.update', $data->id)}}" method="post"  enctype="multipart/form-data">
		                                @method('patch')
		                                @csrf

                                        <div class="row">
                                        	
                                        	<div class="col-md-6">
		                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Status</label>
		                                            <select name="status" class="form-control" id="">
		                                            	<option value="1" @php if ( $data->status == 1) { echo "selected"; } @endphp>Approved</option>
		                                            	<option value="2" @php if ( $data->status == 2) { echo "selected"; } @endphp>Canceled</option>
                                                        <option value="0" @php if ( $data->status == 0) { echo "selected"; } @endphp>Pending</option>
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