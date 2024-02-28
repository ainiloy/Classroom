@extends('admin.layouts.app')
@section('title')
    <title>Manage Orders</title>
@endsection
@section('content')


        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Orders</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Orders</a></li>
                                        <li class="breadcrumb-item active">All Orders</li>
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
                                                <th>Course Name</th>
                                                <th>Amount</th>
                                                <th>Transaction id</th>
                                                <th>Transaction Number</th>

                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    
                                    
                                        <tbody>

                                        	@foreach($orders as $key => $item)
                                            <tr>
                                                <td> {{ $key + 1 }} </td>
                                                <td> {{ $item->course->title ?? '' }} </td>
                                                <td> {{ $item->amount }} </td>
                                                <td> {{ $item->transaction_id }} </td>
                                                <td> {{ $item->payment_transition_number }} </td>
                                        
                                            	<td>
	                                                @if($item->status == 1)
	                                                    <span class="btn  btn-success btn-sm">Approved</span>
	                                                @elseif($item->status ==2)
                                                    <span class="btn  btn-danger btn-sm">Canceled</span>
                                                    @else
	                                                    <span class="btn btn-warning btn-sm">Pending</span>
	                                                @endif
	                                            </td>

                                                <td>
	                                                	
													<a href="{{ route('admin.order-handle.edit', $item->id) }}" class="btn btn-info btn-sm">
	                                                    <i class="fas fa-edit"></i>
	                                                </a>


													<form action="{{ route('admin.order-handle.destroy', $item->id) }}" method="post">
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
