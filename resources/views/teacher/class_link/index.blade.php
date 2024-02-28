@extends('admin.layouts.app')
@section('title')
    <title>Manage Class Link</title>
@endsection
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="mb-0 font-size-18">Class Link</h4>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('teacher.serach.for.class') }}" class="btn btn-primary">Search For
                                        Class</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('teacher.search.for.attendance') }}" class="btn btn-success">Search For Attendance</a>

                                </div>
                            </div>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Class Link</a></li>
                                    <li class="breadcrumb-item active">All Class Link</li>
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
                                            <th>Create Time</th>
                                            <th>Course</th>
                                            <th>Batch</th>
                                            <th>Lesion</th>
                                            <th>Vanue</th>
                                            <th>Start Date</th>
                                            <th>Start Time</th>
                                            <th>Duration</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        @foreach ($datas as $key => $item)
                                            <tr>
                                                <td> {{ $key + 1 }} </td>
                                                <td> {{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y g:i:s A') }}
                                                </td>
                                                <td> {{ $item->course->title ?? '' }} </td>
                                                <td> {{ $item->batch->name ?? '' }} </td>
                                                <td> {{ $item->lesion->name ?? '' }} </td>
                                                <td> {{ $item->vanue->name }} </td>
                                                <td> {{ Carbon\Carbon::parse($item->start_date)->format('d-M-Y') }} </td>
                                                @php
                                                    $startTime = Carbon\Carbon::createFromFormat('H:i:s', $item->start_time);

                                                    $formattedTime = $startTime->format('g:i:s A');
                                                @endphp

                                                <td> {{ $formattedTime }} </td>
                                                @php
                                                    $startDateTime = Carbon\Carbon::parse($item->start_date . ' ' . $item->start_time);
                                                    $endDateTime = Carbon\Carbon::parse($item->end_date . ' ' . $item->end_time);

                                                    $duration = $startDateTime->diffInMinutes($endDateTime);
                                                @endphp
                                                <td> {{ $duration }} mins </td>


                                                <td>
                                                    @if ($item->status == 1)
                                                        <span class="btn  btn-success btn-sm">Active</span>
                                                    @else
                                                        <span class="btn btn-danger btn-sm">Inactive</span>
                                                    @endif
                                                </td>

                                                <td>

                                                    <a href="{{ route('teacher.class_link.edit', $item->id) }}"
                                                        class="btn btn-info btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>


                                                    <form action="{{ route('teacher.class_link.destroy', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i
                                                                class="fa fa-trash"></i> </button>
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
