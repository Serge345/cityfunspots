@extends('layouts.master')

@section('content')

<h1>Categorias:</h1>
<p class="lead">Todas las categorias. <a href="{{url('tipoEstablecimiento.create')}}">crear nueva</a></p>
<hr>

@foreach($categorias as $categoria)

<h4>{{ $categoria->nombre }} {{ ($categoria->direccion) }}</h4>


<p>
    <a href="{{ route('tipoEstablecimiento.show', $categoria->id) }}" class="btn btn-info">ver categoria</a>
    <a href="{{ route('tipoEstablecimiento.edit', $categoria->id) }}" class="btn btn-primary">editar categoria</a>
    
</p>
<hr>

@endforeach

@stop
