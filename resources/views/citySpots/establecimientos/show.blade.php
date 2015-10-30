@extends('layouts.master')

@section('content')

 <h1>{{ $establecimiento->name }} </h1>
<p class="lead">Datos del sitio</p>

<table class="table table-striped table-hover">
  <tr>
    <td style="width: 200px">Nombre</td>
    <td>{{ $establecimiento->nombre }}</td>
  </tr>
  <tr>
    <td>Direccion</td>
    <td>{{ $establecimiento->direccion }}</td>
  </tr>
<tr>
  <td>Latitud</td>
  <td>{{ $establecimiento->latitud }}</td>
</tr>
<tr>
  <td>Longitud</td>
  <td>{{ $establecimiento->longitud }}</td>
</tr>

<tr>
  <td>fecha creacion</td>
  <td>{{ $establecimiento->created_at }}</td>
</tr>
<tr>
  <td>fecha modificacion</td>
  <td>{{ $establecimiento->updated_at }}</td>
</tr>
</table>

<hr>


{!! Form::open([
    'method' => 'DELETE',
    'route' => ['establecimientos.destroy', $establecimiento->id]
]) !!}
<a href="{{ route('establecimientos.index') }}" class="btn btn-info">todos los sitios</a>
    {!! Form::submit('¿eliminar este sitio?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@stop
