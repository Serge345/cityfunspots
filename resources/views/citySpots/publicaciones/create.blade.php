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
    {!! Form::label('id_tipo', 'Categoria', ['class' => 'control-label']) !!}
    {!! Form::text('id_tipo', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('direccion', 'Direccion', ['class' => 'control-label']) !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('latitud', 'Latitud', ['class' => 'control-label', 'step' => '0']) !!}
    {!! Form::text('latitud', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('longitud', 'Longitud', ['class' => 'control-label']) !!}
    {!! Form::text('longitud', null, ['class' => 'form-control']) !!}
</div>




{!! Form::submit('Crear nuevo establecimiento', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('tipoEstablecimiento.create') }}" class="btn btn-info">agregar una nueva categoria</a>

{!! Form::close() !!}

@stop
