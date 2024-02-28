											<table class="table table-bordered table-hover mb-0 text-nowrap">
												<thead>
													<tr>
														<th>Lession</th>
														<th>Start date</th>
														<th>Time</th>
														<th>Duration</th>
														<th>Passcode</th>
														<th>Join Link</th>
													</tr>
												</thead>
												<tbody>

													@foreach($classes as $item)
													

			                                            <?php 

			                                                $today = date('d/m/Y');
			                                                $start_date =  Carbon\Carbon::parse($item->start_date)->format('d/m/Y');

			                                             

			                                                $time = new DateTime($item->time);
			                
			                                                $hour = $time->format("g");
			                                                $minute = $time->format("i");
			                                                $format = $time->format("A");

			                                            ?>


													<tr>
														<td>{{ $item->title }}</td>
														<td>  {{ $start_date }} </td>
														<td> {{ $hour }}:{{ $minute }}  {{ $format }} </td>
														<td>{{ $item->duration }}</td>
														<td>{{ $item->passcode }}</td>

														<td> 
		                                                    @if($today < $start_date)

		                                                        <p>Wait</p>

		                                                    @elseif($today == $start_date)
		                                                        <a href=" {{ $item->join_link ?? '' }}" target="_blank">Join</a> 
		                                                    @else
		                                                        <p>Class Ended</p>
		                                                    @endif
		                                                </td>

														
													
													</tr>
													@endforeach
	
												</tbody>
											</table>