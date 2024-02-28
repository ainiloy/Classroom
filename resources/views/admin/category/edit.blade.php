@extends('admin.layouts.app')
@section('title')
    <title>Edit Category</title>
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
                                <h4 class="mb-0 font-size-18">Edit Category</h4>

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

                               

                                   <form action="{{route('admin.category.update', $data->id)}}" method="post"  enctype="multipart/form-data">
		                                @method('patch')
		                                @csrf

                                        <div class="row">
                                        	<div class="col-md-6">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Name</label>
		                                            <input type="text" name="name" value="{{ $data->name }}" id="simpleinput" class="form-control">
		                                        </div>

                                        	</div>


                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Slug <span style="color: red;">( Must in english )</span></label>
                                                    <input type="text" name="slug" value="{{ $data->slug }}" id="simpleinput" class="form-control" required>
                                                </div>

                                            </div>



                                           <!--  <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Name (En)</label>
                                                    <input type="text" name="name_en" value="{{ $data->name_en }}" id="simpleinput" class="form-control">
                                                </div>

                                            </div> -->


                                            <div class="col-md-6">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Icon</label>
                                                    @if(isset($data->icon))
                                                    <img src="{{asset($data->icon)}}" style="width:50px;height:50px"></img>
                                                    @endif
		                                             <input name="icon" type="file" class="form-control"></input>
		                                        </div>

                                        	</div>
                                        	<div class="col-md-6">
		                                        		
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