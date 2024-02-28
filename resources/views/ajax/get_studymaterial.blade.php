
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				@foreach($study_materials as $item)
				<div class="col-md-6">
					<div class="card">
                        @php
                            $youtube=explode('=',$item->link);
                            $yt=$youtube[1];
                        @endphp
						<iframe  height="250" src="https://www.youtube.com/embed/{{$yt}}" title="{{$item->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

					  <div class="card-body">
					    <h5 class="card-title">{{$item->title}}</h5>
					    <p class="card-text">Date: {{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</p>
					  </div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
