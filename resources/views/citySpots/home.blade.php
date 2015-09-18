@extends('layouts.master')

@section('content')

<h1>Bienvenido a CityFunSpots</h1>
<p class="lead">
</p>
<hr>

<a href="{{ url('establecimientos') }}" class="btn btn-info">Ver Sitios</a>
<a href="{{ url('usuarios') }}" class="btn btn-info">Ver Usuarios</a>
<a href="{{ url('publicaciones') }}" class="btn btn-info">Ver comentarios</a>
</br><a href="{{ url('establecimientos/create') }}" class="btn btn-primary">Agregar un nuevo sitio</a>
<a href="{{ url('usuarios/create') }}" class="btn btn-primary">Crear un nuevo suario</a>
<a href="{{ url('publicaciones/create') }}" class="btn btn-primary">publicar un nuevo comentario</a>


@stop
