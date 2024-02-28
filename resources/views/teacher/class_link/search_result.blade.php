<div class="card">
    <div class="card-body">


        @include('admin.layouts.notify')


        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
            <thead>
                <tr>
                    <th>Class Id</th>
                    <th>Create Time</th>
                    <th>Lesson</th>
                    <th>Start Date</th>
                    <th>Time</th>
                    <th>Vanue</th>
                    <th>Duration</th>
                    <th>Host ID</th>
                    <th>Meeting Id</th>
                    <th>Password</th>
                    <th>Join Link</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($datas as $key => $item)
                    <tr>
                        <td class="text-sucess fw-bolder"> {{ $item->id }} </td>
                        <td> {{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y g:i:s A') }}
                        </td>
                        <td> {{ $item->lesion->name ?? '' }} </td>
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
                        <td> {{ $item->vanue->name }} </td>
                        <td> {{ $duration }} mins </td>


                        <td>
                            {{ $item->host_id }}
                        </td>
                        <td>
                            {{ $item->meeting_id }}
                        </td>
                        <td>
                            {{ $item->meeting_password }}
                        </td>
                        <td>
                            <a href="{{ $item->join_link }}" class="btn btn-success">Join</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>


    </div> <!-- end card body-->

</div> <!-- end card -->
