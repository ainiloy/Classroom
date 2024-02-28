

	<option value=""> --- Select --- </option>

	@foreach($batchs as $item)
	<option value="{{$item->id}}">{{$item->name}}</option>
	@endforeach
