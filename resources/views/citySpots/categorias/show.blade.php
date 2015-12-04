@extends('layouts.master')

@section('content')

 <h1>{{ $categoria->name }} </h1>
<p class="lead">Información de la categoria</p>

<table class="table table-striped table-hover">
  <tr>
    <td style="width: 200px">Nombre</td>
    <td>{{ $categoria->nombre }}</td>
  </tr>
  <tr>
    <td>Descripcion</td>
    <td>{{ $categoria->Descripcion }}</td>
  </tr>
  <tr>
    <td>fecha creacion</td>
    <td>{{ $categoria->created_at }}</td>
  </tr>
  <tr>
    <td>fecha modificacion</td>
    <td>{{ $categoria->updated_at }}</td>
  </tr>
</table>

<hr>


{!! Form::open([
    'method' => 'DELETE',
    'route' => ['tipoEstablecimiento.destroy', $categoria->id]
]) !!}
<a href="{{ route('tipoEstablecimiento.index') }}" class="btn btn-info">todos las categorias</a>
    {!! Form::submit('¿eliminar esta categoria?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@stop
