@extends('layouts.master')

@section('content')

<h1>Bienvenido a CityFunSpots</h1>
<p class="lead">
</p>
<hr>
<a href="{{ url('establecimientos') }}" class="btn btn-info">Ver Sitios</a>
<a href="{{ url('usuarios') }}" class="btn btn-info">Ver Usuarios</a>
</br></br>
<a href="{{ url('establecimientos/create') }}" class="btn btn-primary">Agregar un nuevo sitio</a>
<a href="{{ url('usuarios/create') }}" class="btn btn-primary">Crear un nuevo usuario</a>


@stop
