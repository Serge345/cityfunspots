@extends('layouts.master')

@section('content')
<?php  $categoria=App\Tipo_Establecimiento::all()?>
<h1>Actualizar datos de usuario</h1>
<p class="lead">Edita la informacion del sitio.
   <a href="{{ route('establecimientos.index') }}">volver a la lista de sitios.</a></p>
<hr>


{!! Form::model($establecimiento, [
    'method' => 'PUT',
    'route' => ['establecimientos.update', $establecimiento->id]
]) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('id_tipo', 'Categoria', ['class' => 'control-label']) !!}
        {!!Form::select('id_tipo',$categoria ->lists('nombre','id'), ['class' => 'form-control'])!!}
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

{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
