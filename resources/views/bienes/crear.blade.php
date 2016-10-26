<html>
    <body>
    <form method="POST" action="/bienes/guardar">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    	<label>Descripcion:</label>
        <input type="text" name="descripcion"><br>
        
        <label>Fecha</label>
        <input type="text" name="modelo"><br>

        <label>Valor:</label>
        <input type="text" name="valor"><br>

        <br>
        <input type="submit" value="Guardar">
    </form>
    	

    </body>
</html>