@extends('teacher.layouts.app')
@section('title')
    <title>Manage Home Work</title>
@endsection
@section('content')


        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Home Work</h4>
                                <div>
                                    <a href="{{ route('teacher.search.for.hw') }}" class="btn btn-primary">Search For HW</a>
                                </div>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home Work</a></li>
                                        <li class="breadcrumb-item active">All Home Work</li>
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
                                                <th> # </th>
                                                <th>Course</th>
                                                <th>Batch</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Marks</th>
                                                <th>PDF</th>
                                                <!-- <th>Status</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                        	@foreach($datas as $key => $item)
                                            <tr>
                                                <td> {{ $key + 1 }} </td>
                                                <td> {{ $item->course->title ?? '' }} </td>
                                                <td> {{ $item->batch->name ?? '' }} </td>
                                                <td> {{  Carbon\Carbon::parse($item->start_date)->format('d/m/Y') }} </td>
                                                <td> {{ Carbon\Carbon::parse($item->due_date)->format('d/m/Y')  }} </td>
                                                <td> {{ $item->marks ?? '' }} </td>
                                                <td> <a href="{{ asset($item->pdf) }}" target="_blank">Download</a> </td>

                                            	<!-- <td>
	                                                @if($item->status == 1)
	                                                    <span class="btn  btn-success btn-sm">Active</span>
	                                                @else
	                                                    <span class="btn btn-danger btn-sm">Inactive</span>
	                                                @endif
	                                            </td> -->

                                                <td>

													<a href="{{ route('teacher.home_work.edit', $item->id) }}" class="btn btn-info btn-sm">
	                                                    <i class="fas fa-edit"></i>
	                                                </a>


													<form action="{{ route('teacher.home_work.destroy', $item->id) }}" method="post">
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
