@extends('layouts.app')
@section('layouts.sidebar')
@section('layout.header')
@section('content')
	<form method="POST" class="form-horizontal" action="/rubros/actualizar">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="id" value="{{$rubro->Id}}">
		<div class="form-group">
             <label class="col-md-3 control-label">Descripcion:</label>
             <div class="col-md-3 control-label">
             	<input type="text" class="form-control" name="descripcion" value="{{ $rubro->Descripcion }}">
             </div>
        </div>

        <div class="form-group">
        	<label class="col-md-3 control-label">Nombre:</label>
        	<div>
        		<input type="text" class="form-control" name="nombre" value="{{ $rubro->Nombre }}">
        	</div>
        </div>

		<input type="submit" value="Guardar" class="btn btn-sm btn-success">

	</form>

</body>
</html>