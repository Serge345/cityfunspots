@extends('layouts.master')

@section('content')

 <h1>{{ $usuario->name }} </h1>
<p class="lead">Datos de usuario</p>

<table class="table table-striped table-hover">
  <tr>
    <td style="width: 200px">Nombre</td>
    <td>{{ $usuario->nombre }}</td>
  </tr>
  <tr>
    <td>email</td>
    <td>{{ $usuario->email }}</td>
  </tr>
<tr>
  <td>nickname</td>
  <td>{{ $usuario->nickname }}</td>
</tr>
<tr>
  <td>contrasena</td>
  <td>{{ $usuario->password }}</td>
</tr>

<tr>
  <td>fecha creacion</td>
  <td>{{ $usuario->created_at }}</td>
</tr>
<tr>
  <td>fecha modificacion</td>
  <td>{{ $usuario->updated_at }}</td>
</tr>
</table>

<hr>


{!! Form::open([
    'method' => 'DELETE',
    'route' => ['usuarios.destroy', $usuario->id]
]) !!}
<a href="{{ route('usuarios.index') }}" class="btn btn-info">todos los usuarios</a>
    {!! Form::submit('¿eliminar este usuario?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@stop
