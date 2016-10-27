<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Usuarios ABM</title>
    </head>
<body>
	<form action = "/usuarios/guardar" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<p>
			<label for="Usuario">Usuario: </label>
			<input type="text" name="username">
			<br/> <br/>

			<label for="Contraseña">Contraseña: </label>
			<input type="password" name="password">
			<br/> <br/>

			<label for="Nivel">Nivel: </label>
			<select>
			<option value="1">Administrador</option>
			<option value="2">Normal</option>
			<option value="3">Moderador</option>
			</select>
			<br/> <br/>

			<input type="submit" value="Guardar">
		</p>
	</form>
</body>
</html>
