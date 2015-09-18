@extends('layouts.master')

@section('content')


<h1>Crear un establecimiento nuevo</h1>
<p class="lead">Ingrese la información del nuevo establecimiento.</p>
<hr>



{!! Form::open(['route' => 'establecimientos.store']) !!}

<div class="form-group">
    {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('id tipo', 'Id tipo', ['class' => 'control-label']) !!}
    {!! Form::text('id_tipo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Direccion', ['class' => 'control-label']) !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>



{!! Form::submit('Crear nuevo establecimiento', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
