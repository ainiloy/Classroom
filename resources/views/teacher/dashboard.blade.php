@extends('teacher.layouts.app')

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

                                <h4 class="mb-0 font-size-18">My Account</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);" style="font-size: 25px;"> Welcome Mr./Mrs. <span style="font-weight: bold">{{ auth()->user()->name ?? ''}}</span>!</a></li>
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
                                    <a href="{{ route('teacher.dashboard') }}"><i class="bx bx-edit float-right m-0 h2 text-muted"></i></a>
                                    <h6 class="text-muted text-uppercase mt-0">Account Information</h6>
                                    <h3 class="mb-3">
                                        {{ auth()->user()->name ?? '' }}
                                       <span style="font-size: 15px;">( ID: {{auth()->user()->user_id ?? '' }} )</span>
                                    </h3>
                                    <a href="{{ route('teacher.information') }}"><span class="text-muted">Change password</span></a>
                                </div>
                            </div>
                        </div>





                    </div>
                    <!-- end row -->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('admin.layouts.footer')

        </div>
        <!-- end main content-->


@stop
