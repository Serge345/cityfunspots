@extends('layouts.master')

@section('content')

<h1>Bienvenido a CityFunSpots</h1>
<p class="lead">
</p>
<hr>
<a href="{{ url('establecimientos') }}" class="btn btn-info">Ver Sitios</a>
</br></br>
<a href="{{ url('establecimientos/create') }}" class="btn btn-primary">Agregar un nuevo sitio</a>


@stop
