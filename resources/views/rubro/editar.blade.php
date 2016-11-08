<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="/rubros/actualizar">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" value="{{$rubro->Id}}">

		<label>Descripcion:</label>
		<input type="text" name="descripcion" value="{{ $rubro->Descripcion }}"><br>

		<label>Nombre:</label>
		<input type="text" name="nombre" value="{{ $rubro->Nombre }}"><br>
		<input type="submit" value="Guardar">

	</form>

</body>
</html>