@extends('admin.layouts.app')

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
                                <h4 class="mb-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Lunoz</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-layer float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Student</h6>
                                    <h3 class="mb-3" data-plugin="counterup">{{$students}}</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-dollar-circle float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Course Purchase</h6>
                                    <h3 class="mb-3"><span data-plugin="counterup">{{$purchase}}</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-bx bx-analyse float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Today Student</h6>
                                    <h3 class="mb-3"><span data-plugin="counterup">{{$today_student}}</span></h3>
                                    {{-- <span class="badge badge-warning mr-1"> 0% </span> <span class="text-muted">From previous period</span> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-basket float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Today purchase</h6>
                                    <h3 class="mb-3" data-plugin="counterup">{{$today_purchase}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

               

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                    </div>

                                    <h4 class="card-title overflow-hidden">Recent Purchase</h4>
                                    {{-- <p class="card-subtitle mb-4 font-size-13 overflow-hidden">Transaction period from 21 July to 25 Aug --}}
                                    {{-- </p> --}}

                                    <div class="table-responsive">
                                        <table class="table table-centered table-hover table-xl mb-0" id="recent-orders">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">Student Name</th>
                                                    <th class="border-top-0">Student Id</th>
                                                    <th class="border-top-0">Purchase By</th>
                                                    <th class="border-top-0">Course</th>
                                                    <th class="border-top-0">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($latest_purchase as $item)
                                                @php
                                                    $user = App\Models\User::where('user_id',$item->student_id)->first();
                                                @endphp
                                                <tr>
                                                    <td class="text-truncate">{{$user->name ?? ''}}</td>
                                                    <td class="text-truncate">{{$user->user_id}}</td>
                                                    <td>
                                                        <span class="badge badge-soft-success p-2">{{$item->admin_id}}</span>
                                                    </td>
                                                    <td class="text-truncate">{{$item->course->title ?? ''}}</td>
                                                    <td class="text-truncate">{{$item->item_price ?? ''}}</td>
                                                    <td class="text-truncate">{{$item->created_at ?? ''}}</td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
          
                                    </div>

                                    <h4 class="card-title overflow-hidden">Latest Students</h4>
                                    

                                    <div class="table-responsive">
                                        <table class="table table-borderless table-hover table-centered table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">Student Name</th>
                                                    <th class="border-top-0">Phone</th>
                                                    <th class="border-top-0">Refer By</th>
                                                    <th class="border-top-0">Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($latest_students as $item)
                                                <tr>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">{{$item->name}}</h5>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">{{$item->phone}}</h5>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-17 mb-1 font-weight-normal">{{$item->contact_person}}</h5>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">{{$item->created_at}}
                                                        </h5>
                                                    </td>
                                                </tr>
                                                @endforeach
                                         

                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('admin.layouts.footer')

        </div>
        <!-- end main content-->


@stop