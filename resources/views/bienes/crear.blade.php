@extends('layouts.app')
@section('layouts.sidebar')
@section('layout.header')
@section('content')
   <form method="POST" class="form-horizontal" action="/bienes/guardar">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
             <label class="col-md-3 control-label">Descripcion:</label>
             <div class="col-md-3 control-label">
                  <input type="text" class="form-control" name="descripcion">
             </div>

        </div>
        <div class="form-group">
             <label class="col-md-3 control-label">Modelo</label>
             <div class="col-md-3 control-label">
                  <input type="text" class="form-control"  name="modelo">
             </div>

        </div>
        <div class="form-group">
             <label class="col-md-3 control-label">Rubro</label>
             <div class="col-md-3 control-label">
                  <select name="rubros" class="form-control">
                       @foreach($rubros as $rubro)
                            <option value="{{$rubro->Id}}">{{$rubro->nombre}}</option>
                       @endforeach
                  </select>
             </div>
        </div>
        <div class="form-group">
             <label class="col-md-3 control-label">Fecha</label>
             <div class="col-md-3 control-label">
                  <input type="text" class="form-control" name="fecha">
             </div>
        </div>

        <div class="form-group">
             <label class="col-md-3 control-label">valor</label>
             <div class="col-md-3 control-label">
                  <input type="text" class="form-control" name="valor">
             </div>
        </div>



        <input type="submit" value="Guardar" class="btn btn-sm btn-success">
    </form>
@stop
    
    	