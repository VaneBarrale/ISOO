<input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach($rubros as $rubro)
	<li>
		{{$rubro->Id}}
	</li>
	<li>
		{{$rubro->Descripcion}}
	</li>
	<li>
		{{$rubro->Nombre}}
	</li>

@endforeach