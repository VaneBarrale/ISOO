<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="/rubros/guardar">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label>Descripcion:</label>
		<input type="text" name="descripcion"><br>

		<label>Nombre:</label>
		<input type="text" name="nombre"><br>
		<input type="submit" value="Guardar">

	</form>

</body>
</html>