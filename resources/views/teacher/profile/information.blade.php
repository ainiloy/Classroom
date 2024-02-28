@extends('teacher.layouts.app')

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
                                <h4 class="mb-0 font-size-18">My Account</h4>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

             
                    @include('teacher.layouts.notify')

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
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Account details </h4>
                                    

                                    <form method="post" action="{{ route('teacher.update-profile') }}" enctype="multipart/form-data">
                                        @csrf


                                        <div class="form-group">
                                            <label for="simpleinput">Name</label>
                                            <input type="text" name="name" value="{{ $user->name }}" id="simpleinput" class="form-control">
                                        </div>



                                        
                                        <div class="form-group">
                                            <label for="simpleinput">User ID</label>
                                            <input type="text" name="" value="{{ $user->user_id }}" id="simpleinput" class="form-control" readonly="">
                                        </div>



                                        <div class="form-group">
                                            <label for="example-password">NID</label>
                                            <input type="text" name="nid" value="{{ $user->nid }}" id="example-password" class="form-control" readonly="">
                                        </div>
                                                
                                                
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <label for="example-password">Imaage</label>
                                                    <input type="file" name="image" class="dropify" data-max-file-size="1M" data-default-file="{{ asset($user->image ?? null) }}"   />

                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Address</label>
                                            <input type="text" name="address" value="{{ $user->address }}" class="form-control" id="exampleFormControlInput1">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Qualification</label>
                                            <input type="text" name="qualification" value="{{ $user->teacher->qualification ?? '' }}" class="form-control" id="exampleFormControlInput1">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Description</label>
                                            <textarea name="description"  class="form-control" rows="5">{{ $user->teacher->description ?? '' }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">District</label>
                                            <select name="district_id" class="form-control" id="exampleFormControlSelect1" required>

                                            	<option value="">District</option>

                                            	@foreach($districts as $item)
                                                <option value="{{$item->id}}" @php if ($user->district_id == $item->id) { echo "selected"; } @endphp>{{$item->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                      


                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Thana/Upazilla</label>
                                            <select name="thana_id" class="form-control" id="exampleFormControlSelect1" required>

                                            	<option value="">Thana/Upazilla</option>

                                            	@foreach($thanas as $item)
                                                <option value="{{$item->id}}"  @php if ($user->thana_id == $item->id) { echo "selected"; } @endphp>{{$item->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email</label>
                                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" id="exampleFormControlInput1">
                                        </div>

                                      	<button type="submit" class="btn btn-primary waves-effect waves-light">Profile Update</button>
                                       
                                        
                                    </form>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div> <!-- end col -->

                        <div class="col-xl-6">
                        	
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Password change</h4>
                             

                                    <form method="post" action="{{ route('teacher.update-password') }}">
                                        @csrf
                                     
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Current Password</label>
                                            <input type="password" name="current_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                     
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">New Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                     
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                                        </div>


                                       
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Change</button>
                                    </form>
                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->




                        </div>

                      

                    </div>
                    <!-- end row-->






                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('admin.layouts.footer')

        </div>
        <!-- end main content-->


@stop