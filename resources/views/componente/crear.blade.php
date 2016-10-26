<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Componentes CRUD</title>
    </head>
<body>
	<form action = "/componentes/guardar" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<p>
			<label for="Descripcion">Descripcion: </label>
			<input type="text" name="descripcion">
			<br/> <br/>

			<label for="Importe">Importe: </label>
			<input type="text" name="importe">
			<br/> <br/>

			<input type="submit" value="Guardar">
		</p>
	</form>
</body>
</html>