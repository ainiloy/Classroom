@extends('admin.layouts.app')
@section('title')
    <title>Page</title>
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
                                <h4 class="mb-0 font-size-18">Page</h4>

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

                                    <form method="post" action="{{route('admin.page.store')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">



                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Title</label>
		                                            <input type="text" name="title" id="simpleinput" class="form-control">
                                                   
                                                </div>
                                                
                                            </div>

                                        	<div class="col-md-6">
                                        		
		                                        <div class="form-group">
                                                    <p>Please select page type:</p>
                                                      <input type="radio" id="link"  name="type" value="link" >
                                                      <label for="link">Link</label><br>
                                                      <input type="radio" id="description"  name="type" value="description">
                                                      <label for="description">Description</label><br>
		                                        </div>

                                        	</div>
                                            {{-- <div>
                                                <input type="radio" id="link" name="type" value="link">
                                                  <label for="link">Link</label><br>
                                                  <input type="radio" id="description" name="type" value="description">
                                                  <label for="description"></label><br>
                                            </div> --}}
                                            <div class="col-md-6" id="links">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Link</label>
		                                            <input type="text" name="link" id="simpleinput" class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-6" id="images">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Image</label>
                                                  
		                                            <input type="file" name="image" id="simpleinput" class="form-control">
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
                                           
                                            <div class="col-md-12" id="descriptions">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Description</label>
		                                            <textarea name="description" id="" class="form-control summernote"></textarea>
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


@endsection
@section('script')
<script>
 $('#links').css("display", "none");
 $('#images').css("display", "none");
 $('#descriptions').css("display", "none");
</script>
<script>
    $('#link').on('click',function(){
        $('#links').css("display", "block");
       $('#images').css("display", "none");
       $('#descriptions').css("display", "none");
        
    })
    $('#description').on('click',function(){
        let type=$('#description').val();
        $('#links').css("display", "none");
 $('#images').css("display", "block");
 $('#descriptions').css("display", "block");
    })
</script>
@endsection