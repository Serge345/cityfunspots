@extends('layouts.master')

@section('content')

<h1>Bienvenido a CityFunSpots</h1>
<p class="lead">
</p>
<hr>
<a href="{{ url('establecimientos') }}" class="btn btn-info">Ver Sitios</a>
<a href="{{ url('publicaciones') }}" class="btn btn-info">Ver Comentarios</a>
</br></br>
<a href="{{ url('publicaciones/create') }}" class="btn btn-primary">publicar un nuevo comentario</a>

@stop
