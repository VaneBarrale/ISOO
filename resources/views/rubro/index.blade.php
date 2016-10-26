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