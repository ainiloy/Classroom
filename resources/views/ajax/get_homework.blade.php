<table class="table table-bordered table-hover mb-0 text-nowrap">
	<thead>
		<tr>
			<th>Submit</th>
			<th>Start date</th>
			<th>Due date</th>
			<th>Marks</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		@foreach($home_works as $item)
			
		<?php
			$user = Auth::user();
			$already_answer = App\Models\HomeWorkAnswer::where('student_id', $user->user_id)->where('home_work_id', $item->id)->first();
		?>


		<tr>

			@if($already_answer)
			<td> <button class="btn btn-warning w-100">Submitted</button> </td>
			@else
			<td> <a href="{{ route('student.submit-homework', $item->id) }}" target="_blank"><button class="btn btn-info w-100">Submit</button></a> </td>
			@endif


			<td> {{  Carbon\Carbon::parse($item->start_date)->format('d/m/Y') }} </td>
			<td>  {{ Carbon\Carbon::parse($item->due_date)->format('d/m/Y')  }}  </td>
			<td> {{ $item->marks ?? '' }} </td>

			<td>
				<a href="{{ route('student.view-homework', $item->id) }}" target="_blank"><button class="btn btn-primary w-50">View HW</button> </a>

				<a href="{{ asset($item->pdf) }}" target="_blank"><button class="btn btn-info w-50">View PDF</button> </a>
			</td>
			
		
		</tr>
		@endforeach

	</tbody>
</table>

