@extends('layouts.app2')

@section('content')


        <!--Section-->
        @include('student.layouts.second_style')
            <!--Topbar-->


            {{-- @include('layouts.header') --}}


            <!--Section-->
            <section>
                <div class="bannerimg">
                    <div class="header-text mb-0">
                        <div class="container">
                            <div class="text-center text-white">
                                <h1 class="text-dark">Account details</h1>
                                <ol class="breadcrumb text-center">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}" class="text-dark">Home /</a></li>
                                    <li class="breadcrumb-item active text-dark" aria-current="page">Account details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/Section-->
        </div><!--/Section-->




        <!--User Dashboard-->
        <section class="sptb">
            <div class="container">
                <div class="row">


                    @include('layouts.dashboard_sidebar')


                    <div class="col-xl-9 col-lg-12 col-md-12">

                        <div class="card mb-0">
                            <div class="card-header">
                                <h3 class="card-title">Orders List</h3>
                            </div>
                            @if (Session::has('success'))
                                <p class="alert alert-info">{{ Session::get('success') }}</p>
                            @endif
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Course Name</th>
                                                <th>Date</th>
                                                <th>Fees</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $item)
                                                <tr>

                                                    <td class="text-primary">{{ $item->id }}</td>
                                                    <td>{{ $item->course->title }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                                                    <?php
                                                    $orderr = DB::table('orders')
                                                        ->where('id', $item->id)
                                                        ->first();
                                                    ?>
                                                    <td>{{ $orderr->amount }}</td>
                                                    <td>
                                                        @if ($item->status == 0)
                                                            <a href="javascript:void(0);"
                                                                class="badge badge-warning">Pending</a>
                                                        @elseif($item->status == 2)
                                                            <a href="javascript:void(0);"
                                                                class="badge badge-danger">Canceled</a>
                                                        @else
                                                            <a href="javascript:void(0);"
                                                                class="badge badge-success">Canceled</a>
                                                        @endif
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <ul class="pagination">
                                    <li class="page-item page-prev disabled">
                                        <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item page-next">
                                        <a class="page-link" href="javascript:void(0);">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section><!--/User Dashboard-->





@stop
