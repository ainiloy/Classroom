@extends('admin.layouts.app')
@section('title')
    <title>Manage Class Lesson</title>
@endsection
@section('content')


        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Class Lesson</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Class Lesson</a></li>
                                        <li class="breadcrumb-item active">All Class Lesson</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->



                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                    				@include('admin.layouts.notify')


                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>

                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                        	@foreach($datas as $key => $item)
                                            <tr>
                                                <td> {{ $key + 1 }} </td>
                                                <td> {{ $item->name }} </td>


                                            	<td>
	                                                @if($item->status == 1)
	                                                    <span class="btn  btn-success btn-sm">Active</span>
	                                                @else
	                                                    <span class="btn btn-danger btn-sm">Inactive</span>
	                                                @endif
	                                            </td>

                                                <td>

													<a href="{{ route('admin.class_lesson.edit', $item->id) }}" class="btn btn-info btn-sm">
	                                                    <i class="fas fa-edit"></i>
	                                                </a>


													<form action="{{ route('admin.class_lesson.destroy', $item->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> </button>
                                                    </form>


                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>


                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('admin.layouts.footer')

        </div>





@endsection
