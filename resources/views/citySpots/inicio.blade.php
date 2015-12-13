@extends('layouts.master')

@section('content')

<h1>Bienvenido a CityFunSpots</h1>
<p class="lead">
</p>
<hr>
<h3>Iniciar Sesion</h3>
<a href="{{ url('auth/login') }}" class="btn btn-primary">Acceder</a>
</br></br>
<h3>Registrarse</h3>
<a href="{{ url('auth/register') }}" class="btn btn-primary">Registrarse</a>


@stop
