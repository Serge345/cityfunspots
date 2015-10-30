@extends('layouts.master')

@section('content')

<h1>establecimientos registrados:</h1>
<p class="lead">Lista de sitios. <a href="{{url('establecimientos/create')}}">crear uno nuevo</a></p>
<hr>

@foreach($establecimientos as $establecimiento)

<h4>{{ $establecimiento->nombre }} {{ ($establecimiento->direccion) }}</h4>


<p>
    <a href="{{ route('establecimientos.show', $establecimiento->id) }}" class="btn btn-info">ver sitio</a>
    <a href="{{ route('establecimientos.edit', $establecimiento->id) }}" class="btn btn-primary">editar sitio</a>
</p>
<hr>

@endforeach

@stop
