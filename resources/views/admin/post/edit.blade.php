@extends('admin.layouts.app')
@section('title')
    <title>Edit post</title>
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
                                <h4 class="mb-0 font-size-18">Edit post</h4>

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

                               

                                   <form action="{{route('admin.post.update', $data->id)}}" method="post"  enctype="multipart/form-data">
		                                @method('patch')
		                                @csrf

                                        <div class="row">
                                        	<div class="col-md-6">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Title</label>
		                                            <input type="text" name="title" value="{{ $data->title }}" id="simpleinput" class="form-control">
		                                        </div>

                                        	</div>

                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Writter</label>
                                                    <input type="text" name="writter" id="simpleinput" class="form-control" value="{{ $data->writter }}">
                                                </div>

                                            </div>


                                            <div class="col-md-6">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Image</label>
                                                    @if(isset($data->image))
                                                    <img src="{{asset($data->image)}}" style="width:50px;height:50px"></img>
                                                    @endif
		                                             <input name="image" type="file" class="form-control"></input>
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

                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Short Description</label>

                                                    <textarea name="short_description" class="form-control" id="" cols="30" rows="3"> {!! $data->short_description !!} </textarea>
                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Description</label>

                                                    <textarea name="description" class="form-control summernote" id="" cols="30" rows="10"> {!! $data->description !!} </textarea>
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