<table class="table table-bordered table-hover mb-0 text-nowrap">
	<thead>
		<tr>
			<th>Noitce Id</th>
			<th>Course</th>
			<th>Batch</th>
			<th>Notice Title</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		@foreach($notices as $item)
		


		<tr>
			<td> #{{ $item->id }} </td>
			<td> {{ $item->course->title ?? '' }} </td>
			<td> {{ $item->batch->name ?? '' }} </td>

			<td>
				<a href="{{ route('student.notice-description', $item->id) }}" target="_blank"><button class="btn btn-primary w-50">Description</button> </a>

				<a href="{{ asset($item->file ?? '#') }}" target="_blank"><button class="btn btn-info w-50">View PDF</button> </a>
			</td>
			
		
		</tr>
		@endforeach

	</tbody>
</table>

