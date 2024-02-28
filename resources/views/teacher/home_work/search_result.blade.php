<div class="card">
    <div class="card-body">


        @include('admin.layouts.notify')


        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
            <thead>
                <tr>
                    <th>HW Id</th>
                    <th>Start Date</th>
                    <th>Due Date</th>
                    <th>Marks</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($datas as $key => $item)
                    <tr>
                        <td class="text-sucess fw-bolder"> {{ $item->id }} </td>
                        <td> {{  Carbon\Carbon::parse($item->start_date)->format('d/m/Y') }} </td>
                        <td> {{ Carbon\Carbon::parse($item->due_date)->format('d/m/Y')  }} </td>
                        <td> {{ $item->marks ?? '' }} </td>
                        <td>{!! $item->description !!}</td>
                        <td> <a href="{{ asset($item->pdf) }}" target="_blank" class="btn btn-success">View Hw</a> </td>

                    </tr>
                @endforeach

            </tbody>

        </table>


    </div> <!-- end card body-->

</div> <!-- end card -->
