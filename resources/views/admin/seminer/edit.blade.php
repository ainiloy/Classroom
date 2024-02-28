@extends('admin.layouts.app')
@section('title')
    <title>Edit Seminer</title>
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
                                <h4 class="mb-0 font-size-18">Edit Course</h4>

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


                                    <form action="{{route('admin.seminer.update', $seminer->id)}}" method="post"  enctype="multipart/form-data">
                                    @method('put')
                                    @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Teacher</label>
                                                    <select name="teacher_id" class="form-control" id="" >
                                                        <option value="">Select</option>
                                                        @foreach($teachers as $teacher)
                                                        <option value="{{$teacher->id}}"  @php if ( $seminer->teacher_id == $teacher->id) { echo "selected"; } @endphp>{{$teacher->user->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Date</label>
                                                    <input type="date" name="date" value="{{ optional($seminer->date ?? null)->format('Y-m-d') }}"  id="simpleinput" class="form-control" >
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Title</label>
                                                    <input type="text" name="title" value="{{ $seminer->title }}"  id="simpleinput" class="form-control" >
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Time</label>
                                                    <input type="text" name="time" value="{{ $seminer->time }}"  id="simpleinput" class="form-control" >
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Online / Offline</label>
                                                    <select name="online_or_offline" class="form-control" id="" >
                                                        <option value="">Select</option>
                                                        <option value="1" @php if ( $seminer->offline_or_online == 1) { echo "selected"; } @endphp >Online</option>
                                                        <option value="0" @php if ( $seminer->offline_or_online == 0) { echo "selected"; } @endphp>Offline</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="simpleinput">Link</label>
                                                    <input type="text" name="link" value="{{ $seminer->link }}"  id="simpleinput" class="form-control" >
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="simpleinput">Status</label>
                                                    <select name="status" class="form-control" id="">
                                                        <option value="1" @php if ( $seminer->status == 1) { echo "selected"; } @endphp>Active</option>
                                                        <option value="0" @php if ( $seminer->status == 0) { echo "selected"; } @endphp>Inactive</option>
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