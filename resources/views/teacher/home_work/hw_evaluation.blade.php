@extends('teacher.layouts.app')
@section('title')
    <title>Homework Evaluation</title>
@endsection
@section('content')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12 mb-3">

                               <div class="row">
                                <div class="col-md-4">
                                    <h1>Homework Evaluation</h1>
                                </div>


                               </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    @include('teacher.layouts.notify')

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">

                                    <form method="get" action="{{route('teacher.hw.evaluation.search.result')}}" id="search_result">


                                        <div class="row">



                                            <div class="col-md-5">

                                                <div class="form-group">
                                                    <label for="simpleinput">Course <span class="text-danger">*</span></label>
                                                    <select name="course_id" class="form-control" id=""  required>

                                                        <option value="">Select</option>

                                                        @foreach($courses as $item)
                                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-5">

                                                <div class="form-group">
                                                    <label for="simpleinput">Batch <span class="text-danger">*</span></label>
                                                    <select name="batch_id" class="form-control" id=""  required>

                                                        <option value="">Select</option>

                                                        @foreach($batches as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-2 mt-4">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>

                                            </div>



                                        </div>




                                    </form>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div> <!-- end col -->



                    </div>
                    <!-- end row-->
                    <div class="row"  >
                        <div class="col-12 result_table">

                        </div><!-- end col-->
                    </div>





                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('teacher.layouts.footer')

        </div>
        <!-- end main content-->


@stop

@section('script')
<script>
  $('#datatable-buttons').DataTable();

</script>
<script>
    // Use jQuery to handle the form submission and AJAX request
    $(document).ready(function() {
        $('#search_result').on('submit', function(event) {
            event.preventDefault();
            const form = $(this);
            const url = form.attr('action');
            const formData = form.serialize();

            $.ajax({
                type: 'GET',
                url: url,
                data: formData,
                dataType: 'json',
                success: function(data) {
                    // Handle the success response and update the page with the filtered data
                    // console.log(data);
                    $('.result_table').html(data.html);
                    $('#datatable-buttons').DataTable();
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });


    });
</script>

@endsection
