@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | User</title>
@endsection
@section('content')





        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Users</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Users</li>
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

                               
                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>NID</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Password</th>
                                                <th>Gurdian Name</th>
                                                <th>Gurdian Number</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    
                                    
                                        <tbody>

                                        	@foreach($users as $key => $item)
                                            <tr>
                                                <td> {{ $key + 1 }} </td>
                                                <td> {{ $item->name }} </td>
                                                <td> {{ $item->nid }} </td>
                                                <td> {{ $item->email }} </td>
                                                <td> {{ $item->phone }} </td>
                                                <td> {{ $item->password_str }} </td>
                                                <td> {{ $item->gurdian_name }} </td>
                                                <td> {{ $item->gurdian_contact_number }} </td>

                                            	<td>
	                                                @if($item->status == 1)
	                                                    <span class="badge bg-success">Active</span>
	                                                @else
	                                                    <span class="badge bg-success">Inactive</span>
	                                                @endif
	                                            </td>

                                                <td>
	                                                	
													<a href="{{ route('admin.user.edit', encrypt($item->id)) }}" class="btn btn-info">
	                                                    <i class="fas fa-edit"></i>
	                                                </a>
	                                                <button class="btn btn-danger" type="button" onclick="deleteData({{ $item->id }})">
	                                                    <i class="fa fa-trash"></i>
	                                                </button>
	                                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.user.destroy', $item->id) }}" method="POST" style="display: none;">
	                                                    @csrf
	                                                    @method('DELETE')
	                                                </form>

                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                    {{ $users->links() }}
                                    
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
