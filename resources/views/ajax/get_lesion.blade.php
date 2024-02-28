

	<option value=""> --- Select --- </option>

	@foreach($lesions as $item)
	<option value="{{$item->id}}">{{$item->name}}</option>
	@endforeach
