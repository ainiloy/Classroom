@extends('admin.layouts.app')
@section('title')
    <title>Site Setting</title>
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
                                <h4 class="mb-0 font-size-18">Site Setting</h4>

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

                                    <form method="post" action="{{route('admin.site-setting.store')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">



                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="simpleinput">name</label>
		                                            <input type="text" name="name" id="simpleinput" value="{{isset($data->name)?$data->name:''}}" class="form-control">

                                                </div>

                                            </div>

                                        	<div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Email</label>
		                                            <input type="email" name="email" id="simpleinput" value="{{isset($data->email)?$data->email:''}}" class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Phone</label>
		                                            <input type="number" name="phone" id="simpleinput"value="{{isset($data->phone)?$data->phone:''}}" class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Logo</label>
                                                    @if(isset($data->logo))
                                                    <img src="{{asset($data->logo)}}" width="50px" alt="">
                                                  @endif
		                                            <input type="file" name="logo" id="simpleinput" class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Fav_icon</label>
                                                    @if(isset($data->fav_icon))
                                                      <img src="{{asset($data->fav_icon)}}" width="50px" alt="">
                                                    @endif
		                                            <input type="file" name="fav_icon" id="simpleinput" class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Address</label>
		                                            <textarea name="address" id="" class="form-control">{{isset($data->address)?$data->address:''}}</textarea>
		                                        </div>

                                        	</div>
                                            <div class="col-md-12">

		                                        <div class="form-group">
		                                            <label for="simpleinput">About</label>
		                                            <textarea name="about" id="" class="form-control summernote">{{isset($data->about)?$data->about:''}}</textarea>
		                                        </div>

                                        	</div>




                                            <!-- <div class="col-md-3">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Total Learners</label>
		                                            <input type="text" name="total_learners" id="simpleinput" value="{{isset($data->total_learners)?$data->total_learners:''}}" class="form-control">
		                                        </div>

                                        	</div>




                                            <div class="col-md-3">

                                                <div class="form-group">
                                                    <label for="simpleinput">Total Graduates</label>
                                                    <input type="text" name="total_graduates" id="simpleinput" value="{{isset($data->total_graduates)?$data->total_graduates:''}}" class="form-control">
                                                </div>

                                            </div>



                                            <div class="col-md-3">

                                                <div class="form-group">
                                                    <label for="simpleinput">Total Countries</label>
                                                    <input type="text" name="total_countries" id="simpleinput" value="{{isset($data->total_countries)?$data->total_countries:''}}" class="form-control">
                                                </div>

                                            </div>


                                            <div class="col-md-3">

                                                <div class="form-group">
                                                    <label for="simpleinput">Total Courses</label>
                                                    <input type="text" name="total_courses" id="simpleinput" value="{{isset($data->total_courses)?$data->total_courses:''}}" class="form-control">
                                                </div>

                                            </div>



                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="simpleinput">Facebook</label>
                                                    <input type="text" name="facebook" id="simpleinput" value="{{isset($data->facebook)?$data->facebook:''}}" class="form-control">
                                                </div>

                                            </div>



                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Twitter</label>
		                                            <input type="text" name="twitter" id="simpleinput"  value="{{isset($data->twitter)?$data->twitter:''}}" class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Instagram</label>
		                                            <input type="text" name="instagram" id="simpleinput"  value="{{isset($data->instagram)?$data->instagram:''}}" class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Linkedin</label>
		                                            <input type="text" name="linkedin" id="simpleinput" value="{{isset($data->linkedin)?$data->linkedin:''}}" class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">You Tube</label>
		                                            <input type="text" name="youtube" id="simpleinput" value="{{isset($data->youtube)?$data->youtube:''}}" class="form-control">
		                                        </div>

                                        	</div>
                                            <div class="col-md-6">

		                                        <div class="form-group">
		                                            <label for="simpleinput">Whatsapp</label>
		                                            <input type="text" name="whatsapp" id="simpleinput" value="{{isset($data->whatsapp)?$data->whatsapp:''}}" class="form-control">
		                                        </div>

                                        	</div>


                                        </div> -->


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
