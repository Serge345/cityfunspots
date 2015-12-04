@extends('layouts.master')

@section('content')
<script type="text/javascript">

$(document).ready(function() {
    $('select').material_select();
});

</script>
<?php  $categoria=App\Tipo_Establecimiento::all()?>

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




{!! Form::submit('Crear nuevo establecimiento', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('tipoEstablecimiento.create') }}" class="btn btn-info">agregar una nueva categoria</a>
<a href="{{ route('tipoEstablecimiento.index') }}" class="btn btn-info">ver categorias</a>

{!! Form::close() !!}

@stop
