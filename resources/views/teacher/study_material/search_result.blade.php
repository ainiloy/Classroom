<div class="card">
    <div class="card-body">


        @include('admin.layouts.notify')


        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
            <thead>
                <tr>
                    <th>SM Id</th>
                    <th> Date</th>
                    <th>Course</th>
                    <th>Batch</th>
                    <th>Youtube Link</th>

                </tr>
            </thead>

            <tbody>

                @foreach ($datas as $key => $item)
                    <tr>
                        <td class="text-sucess fw-bolder"> {{ $item->id }} </td>
                        <td> {{  Carbon\Carbon::parse($item->date)->format('d/m/Y') }} </td>

                        <td> {{ $item->course->title ?? '' }} </td>
                        <td> {{ $item->batch->name ?? '' }} </td>
                        <td>{{ $item->link }}</td>


                    </tr>
                @endforeach

            </tbody>

        </table>


    </div> <!-- end card body-->

</div> <!-- end card -->
