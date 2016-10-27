<h1><strong>USUARIOS</strong></h1>

@foreach($usuarios as $usuario) 
	<table>
	  	<tr>
		    <th scope="col">ID</th>
		    <th scope="col">Usuario</th>
		    <th scope="col">Contraseña</th>
	  	</tr>
	 
	  	<tr>
			  <td>{{$usuario->Id}}</td>
			  <td>{{$usuario->Username}}</td>
			  <td>{{$usuario->Password}}</td>			  
		</tr>
	</table>
@endforeach