<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Mantenimientos ABM</title>
    </head>
<body>
	<form action = "/mantenimientos/guardar" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<p>
			<label for="Descripcion">Descripción: </label>
			<input type="text" name="descripcion">
			<br/> <br/>

			<label for="Fecha">Fecha: </label>
			<input type="date" name="fecha">
			<br/> <br/>

			<label for="Tipo">Tipo: </label>
			<input type="text" name="tipo">
			<br/> <br/>

			<label for="Importe">Importe: </label>
			<input type="text" name="importe">
			<br/> <br/>

			<input type="submit" value="Guardar">
		</p>
	</form>
</body>
</html>
