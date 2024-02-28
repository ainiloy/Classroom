@extends('admin.layouts.app')
@section('title')
    <title>Edit Teacher</title>
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
                                <h4 class="mb-0 font-size-18">Edit Teacher</h4>

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

                                    <form action="{{route('admin.teacher.update', $data->id)}}" method="post"  enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                        <div class="row">

                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Name</label>
                                                    <input type="text" name="name" id="simpleinput" class="form-control" value="{{ $data->name }}">
                                                </div>

                                            </div>



                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Email</label>
                                                    <input type="text" name="email" id="simpleinput" class="form-control" required value="{{ $data->email }}">
                                                </div>

                                            </div>



                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Phone Number</label>
                                                    <input type="text" name="phone" id="simpleinput" class="form-control" value="{{ $data->phone }}" required>
                                                </div>

                                            </div>


                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">NID</label>
                                                    <input type="number" name="nid" id="simpleinput" class="form-control" value="{{ $data->nid }}" required>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Image</label>
                                                    @if(isset($data->image))
                                                    <img src="{{asset($data->image)}}" style="width:50px;height:50px"></img>
                                                    @endif
                                                     <input name="image" type="file" class="form-control"></input>
                                                </div>

                                            </div>


                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Password</label>
                                                    <input type="text" name="password" id="simpleinput" value="{{ $data->password_str }}"  class="form-control" required>
                                                </div>

                                            </div>



<!-- 
                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Max Qualification</label>
                                                    <input type="text" name="max_qualification" id="simpleinput" class="form-control" required>
                                                </div>

                                            </div>




                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Max Result</label>
                                                    <input type="text" name="max_result" id="simpleinput" class="form-control" required>
                                                </div>

                                            </div>
 -->



                                            <div class="col-md-4">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Status</label>
                                                    <select name="status" class="form-control" id="">
                                                        <option value="1" @php if ( $data->status == 1) { echo "selected"; } @endphp>Active</option>
                                                        <option value="0" @php if ( $data->status == 0) { echo "selected"; } @endphp>Inactive</option>
                                                    </select>
                                                </div>
                                                
                                            </div>

<!--                                             <div class="col-xl-12">
                                                <div class="card">
                                                    <div class="card-body">
                                        
                                                        <input type="file" name="image" class="dropify" data-max-file-size="1M" data-default-file=""   />
                                        
                                                    </div>
                                                </div>
                                            </div> 
                                            -->




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