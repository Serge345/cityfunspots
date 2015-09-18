@extends('layouts.master')

@section('content')

<h1>Usuarios registrados:</h1>
<p class="lead">Lista de usuarios. <a href="citySpots/usuarios/create">crear uno nuevo</a></p>
<hr>

@foreach($usuarios as $usuario)

<h3>{{ $usuario->nombre }} ({{ ($usuario->email) }})({{ ($usuario->nickname) }})</h3>


<p>
    <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-info">ver usuario</a>
    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-primary">editar usuario</a>
</p>
<hr>

@endforeach

@stop
