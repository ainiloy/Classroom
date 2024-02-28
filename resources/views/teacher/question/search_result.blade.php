<div class="card">
    <div class="card-body">


        @include('admin.layouts.notify')


        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
            <thead>
                <tr>
                    <th>Question Id</th>
                    <th>Question</th>
                    <th>Course</th>
                    <th>Leson</th>

                </tr>
            </thead>

            <tbody>

                @foreach ($datas as $key => $item)
                    <tr>
                        <td class="text-sucess fw-bolder"> {{ $item->id }} </td>
                        <td>{{ $item->question }}</td>

                        <td> {{ $item->course->title ?? '' }} </td>
                        <td> {{ $item->lesion->name ?? '' }} </td>


                    </tr>
                @endforeach

            </tbody>

        </table>


    </div> <!-- end card body-->

</div> <!-- end card -->
