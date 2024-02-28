@extends('teacher.layouts.app')
@section('title')
    <title>Manage Study Material</title>
@endsection
@section('content')


        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Study Material</h4>
                                <div>
                                    <a href="{{ route('teacher.search.for.sm') }}" class="btn btn-primary">Search For Study Material</a>
                                </div>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Study Material</a></li>
                                        <li class="breadcrumb-item active">All Study Material</li>
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


                    				@include('teacher.layouts.notify')


                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Course</th>
                                                <th>Batch</th>
                                                <th>Date</th>
                                                <th>Link</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                        	@foreach($datas as $key => $item)
                                            <tr>
                                                <td> NT-{{ $key + 1 }} </td>
                                                <td> {{ $item->title }} </td>
                                                <td> {{ $item->course->title ?? '' }} </td>
                                                <td> {{ $item->batch->name ?? '' }} </td>
                                                <td> {{ Carbon\Carbon::parse($item->date)->format('d/m/Y') }} </td>
                                                <td> <a href=" {{ $item->link ?? '' }}" target="_blank">Click</a> </td>


                                            	<td>
	                                                @if($item->status == 1)
	                                                    <span class="btn  btn-success btn-sm">Active</span>
	                                                @else
	                                                    <span class="btn btn-danger btn-sm">Inactive</span>
	                                                @endif
	                                            </td>

                                                <td>

													<a href="{{ route('teacher.study_material.edit', $item->id) }}" class="btn btn-info btn-sm">
	                                                    <i class="fas fa-edit"></i>
	                                                </a>


													<form action="{{ route('teacher.study_material.destroy', $item->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> </button>
                                                    </form>


                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                    {{ $datas->links() }}


                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('teacher.layouts.footer')

        </div>





@endsection
