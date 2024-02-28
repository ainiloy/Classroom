@extends('teacher.layouts.app')
@section('title')
    <title>Manage Support Question</title>
@endsection
@section('content')


        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Support Question</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Support Question</a></li>
                                        <li class="breadcrumb-item active">All Support Question</li>
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
                                                <th>Course</th>
                                                <th>Date</th>
                                                <th>Student Id</th>
                                                <th>Name</th>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    
                                    
                                        <tbody>

                                        	@foreach($datas as $key => $item)

                                        	<?php
                                        		$user = App\Models\User::where('user_id', $item->student_id)->first();
                                        	?>
                                            <tr>
                                                <td> NT-{{ $key + 1 }} </td>
                                                <td> {{ $item->course->title ?? '' }} </td>
                                                <td> {{ Carbon\Carbon::parse($item->date)->format('d/m/Y') }} </td>

                                                <td> {{ $item->student_id }} </td>
                                                <td> {{ $user->name ?? '' }} </td>

                                                <td> {{ $item->question_title }} </td>

                                            	<td>
	                                                @if($item->status == 1)
	                                                    <span class="btn  btn-success btn-sm">Done</span>
	                                                @else
	                                                    <span class="btn btn-danger btn-sm">Not Answer Yet</span>
	                                                @endif
	                                            </td>
                                        

                                                <td>
	                                                	
													<a href="{{ route('teacher.edit-support-answer', $item->id) }}" class="btn btn-info btn-sm">
	                                                    <i class="fas fa-edit"></i>
	                                                </a>

													<a href="{{ route('teacher.delete-support-answer', $item->id) }}" class="btn btn-danger btn-sm">
	                                                    <i class="fas fa-trash"></i>
	                                                </a>


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
