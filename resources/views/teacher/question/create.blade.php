@extends('teacher.layouts.app')
@section('title')
    <title>Add Question</title>
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
                                <h4 class="mb-0 font-size-18">Add Question</h4>

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
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">

                                    <form method="post" action="{{route('teacher.question.store')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">



                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Course</label>
                                                    <select name="course_id" class="form-control" id=""  onchange="getLesion(this)" required>

                                                        <option value="">Select</option>

                                                        @foreach($courses as $item)
                                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                
                                            </div>



                                            <div class="col-md-6">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Lesion</label>
                                                    <select name="lesion_id" class="form-control lesion_id" id="" required>

                                                        <option value="">Select</option>

                                                        <!-- @foreach($lesions as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach -->

                                                    </select>
                                                </div>
                                                
                                            </div>

                                        	<div class="col-md-6">
                                        		
		                                        <div class="form-group">
		                                            <label for="simpleinput">Question</label>
		                                            <input type="text" name="question" id="simpleinput" class="form-control" required>
		                                        </div>

                                        	</div>


                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Answer</label>
                                                    <select name="answer" class="form-control" id="" required>
                                                        <option value="">--- Select ---</option>
                                                        <option value="option_one">Option 1</option>
                                                        <option value="option_two">Option 2</option>
                                                        <option value="option_three">Option 3</option>
                                                        <option value="option_four">Option 4</option>
                                                    </select>
                                                </div>

                                            </div>





                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Option 1</label>
                                                    <input type="text" name="option_one" id="simpleinput" class="form-control" required>
                                                </div>

                                            </div>


                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Option 2</label>
                                                    <input type="text" name="option_two" id="simpleinput" class="form-control" required>
                                                </div>

                                            </div>



                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Option 3</label>
                                                    <input type="text" name="option_three" id="simpleinput" class="form-control" required>
                                                </div>

                                            </div>


                                            <div class="col-md-6">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Option 4</label>
                                                    <input type="text" name="option_four" id="simpleinput" class="form-control" required>
                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Mark</label>
                                                    <input type="number" name="mark" value="1" id="simpleinput" class="form-control" required>
                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                        
                                                <div class="form-group">
                                                    <label for="simpleinput">Status</label>
                                                    <select name="status" class="form-control" id="" >
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                                
                                            </div>


                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label for="simpleinput">Description</label>

                                                    <textarea name="description" class="form-control"  cols="30" rows="5"></textarea>
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

            @include('teacher.layouts.footer')

        </div>
        <!-- end main content-->


@stop