<h1><strong>COMPONENTES</strong></h1>

@foreach($componentes as $componente) 
	<table>
	  	<tr>
		    <th scope="col">ID Componente</th>
		    <th scope="col">ID Bien</th>
		    <th scope="col">Descripcion</th>
		    <th scope="col">Importe</th>
	  	</tr>
	 
	  	<tr>
			  <td>{{$componente->Id}}</td>
			  <td>{{$componente->IdBien}}</td>
			  <td>{{$componente->Descripcion}}</td>
			  <td>{{$componente->Importe}}</td>
		</tr>
	</table>
@endforeach