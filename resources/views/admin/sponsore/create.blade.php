@extends('admin.layouts.app')
@section('title')
    <title>Add sponsore</title>
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
                                <h4 class="mb-0 font-size-18">Add sponsore</h4>

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

                                    <form method="post" action="{{route('admin.sponsore.store')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                        	<div class="col-md-6">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Name</label>
		                                            <input type="text" name="name" id="simpleinput" class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Image</label>
		                                             <input name="image" type="file" class="form-control"></input>
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