<h1><strong>MANTENIMIENTOS</strong></h1>

@foreach($mantenimientos as $mantenimiento) 
	<table>
	  	<tr>
		    <th scope="col">ID</th>
		    <th scope="col">ID Bien</th>
		    <th scope="col">Descripcion</th>
		    <th scope="col">Fecha</th>
		    <th scope="col">Tipo</th>
		    <th scope="col">ID Usuario</th>
		    <th scope="col">Importe</th>
	  	</tr>
	 
	  	<tr>
			  <td>{{$mantenimiento->Id}}</td>
			  <td>{{$mantenimiento->IdBien}}</td>
			  <td>{{$mantenimiento->Descripcion}}</td>
			  <td>{{$mantenimiento->Fecha}}</td>
			  <td>{{$mantenimiento->Tipo}}</td>
			  <td>{{$mantenimiento->IdUsuario}}</td>
			  <td>{{$mantenimiento->Importe}}</td>
		</tr>
	</table>
@endforeach