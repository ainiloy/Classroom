<div class="card">
    <div class="card-body">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        @include('admin.layouts.notify')


        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Student Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Marks</th>
                    <th>Answer</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($homeworkAnswers as $homeworkId => $answers)
                    @foreach ($answers as $item)
                        <tr>
                            @php
                                $user = DB::TABLE('users')
                                    ->where('user_id', $item->student_id)
                                    ->first();
                                $home_work = DB::TABLE('home_works')
                                    ->where('id', $item->home_work_id)
                                    ->first();
                                $answers = DB::TABLE('home_work_answer_files')
                                    ->where('home_work_answer_id', $item->id)
                                    ->latest()
                                    ->first();
                            @endphp
                            <td>{{ Carbon\Carbon::parse($item->created_at)->format('d/m/Y') ?? '' }}</td>
                            <td>{{ $item->student_id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{!! $home_work->description !!}</td>
                            <td>{{ $item->mark }}</td>
                            <td>
                                @if($answers)
                                <a href="{{ asset($answers->homework_answer_file) }}" target="_blank"
                                    class="btn btn-primary">View Hw</a>
                                @else
                                {!! $item->answer !!}
                                @endif
                                </td>
                            <td><button class="btn btn-success mark-assign" data-item-id="{{ $item->id }}">Mark
                                    Assign</button></td>
                        </tr>
                    @endforeach
                @endforeach

            </tbody>

        </table>


    </div> <!-- end card body-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">HW Marks Assign</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="updateMarksForm">
                    <div class="modal-body">
                        <input type="text" class="form-control" name="mark" id="marksInput">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="updateMarksBtn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <script>
        // Use document as the static container for delegating the event
        $(document).on('click', '.mark-assign', function() {
            var itemId = $(this).data('item-id');
            $('#exampleModal').modal('show');

            // Set the item ID in the modal form
            $('#updateMarksForm').data('item-id', itemId);
        });

        // Handle the Save button click
        $('#updateMarksBtn').click(function() {
            var itemId = $('#updateMarksForm').data('item-id');
            var mark = $('#marksInput').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Make an AJAX request to update the marks
            $.ajax({
                type: 'POST',
                url: '{{ route('teacher.update.hw.answer') }}',
                data: {
                    item_id: itemId,
                    mark: mark
                },
                success: function(response) {
                    // Handle the response if needed
                    console.log(response);
                    $('#exampleModal').modal('hide'); // Close the modal
                    location.reload();

                },
                error: function(error) {
                    // Handle errors
                    console.error(error);
                }
            });
        });
    </script>
</div> <!-- end card -->
