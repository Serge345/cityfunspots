@extends('layouts.master')

@section('content')


<h1>Crear nueva categoria</h1>
<p class="lead">Ingrese los datos de la nueva categoria.</p>
<hr>



{!! Form::open(['route' => 'tipoEstablecimiento.store']) !!}

<div class="form-group">
    {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion', ['class' => 'control-label']) !!}
    {!! Form::textArea('descripcion', 'ingrese aquí la descripcion de la categoria', ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Añadir nueva categoria', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
