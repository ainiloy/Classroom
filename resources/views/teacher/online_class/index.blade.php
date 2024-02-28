@extends('teacher.layouts.app')
@section('title')
    <title>Manage Online Class</title>
@endsection
@section('content')


        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Online Class</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Online Class</a></li>
                                        <li class="breadcrumb-item active">All Online Class</li>
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
                                                <th>Start Date</th>
                                                <th>Time</th>
                                                <th>Join Link</th>
                                                <!-- <th>Status</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    
                                    
                                        <tbody>

                                        	@foreach($datas as $key => $item)

                                            <?php 

                                                $today = date('d/m/Y');
                                                $start_date =  Carbon\Carbon::parse($item->start_date)->format('d/m/Y');

                                             

                                                $time = new DateTime($item->time);
                
                                                $hour = $time->format("g");
                                                $minute = $time->format("i");
                                                $format = $time->format("A");

                                            ?>

                                            <tr>
                                                <td> NT-{{ $key + 1 }} </td>
                                                <td> {{ $item->title }} </td>
                                                <td> {{ $item->course->title ?? '' }} </td>
                                                <td> {{ $item->batch->name ?? '' }} </td>

                                                <td> 
                                                    {{ $start_date }} 
                                                </td>

                                                <td> 

                                                    {{ $hour }}:{{ $minute }}  {{ $format }}

                                                </td>

                                                <td> 
                                                    @if($today < $start_date)

                                                        <p>Wait</p>

                                                    @elseif($today == $start_date)
                                                        <a href=" {{ $item->join_link ?? '' }}" target="_blank">Join</a> 
                                                    @else
                                                        <p>Class Ended</p>
                                                    @endif
                                                </td>
                                        
                                        
                                            	<!-- <td>
	                                                @if($item->status == 1)
	                                                    <span class="btn  btn-success btn-sm">Active</span>
	                                                @else
	                                                    <span class="btn btn-danger btn-sm">Inactive</span>
	                                                @endif
	                                            </td> -->

                                                <td>
	                                                	
													<a href="{{ route('teacher.online_class.edit', $item->id) }}" class="btn btn-info btn-sm">
	                                                    <i class="fas fa-edit"></i>
	                                                </a>


													<form action="{{ route('teacher.online_class.destroy', $item->id) }}" method="post">
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
