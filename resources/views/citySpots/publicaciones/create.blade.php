@extends('layouts.master')

@section('content')


<h1>Añadir un nuevo comentario</h1>
<p class="lead">Escribe tu comentario en menos de 240 caracteres.</p>
<hr>



{!! Form::open(['route' => 'publicaciones.store']) !!}

<div class="form-group">
    {!! Form::label('id_usuario', 'id_usuario', ['class' => 'control-label']) !!}
    {!! Form::text('id_usuario', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('id_establecimiento', 'id_establecimiento', ['class' => 'control-label']) !!}
    {!! Form::text('id_establecimiento', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('contenido', 'contenido', ['class' => 'control-label']) !!}
    {!! Form::textArea('contenido', null, ['class' => 'form-control']) !!}
</div>




{!! Form::submit('Añadir comentario', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('establecimientos') }}" class="btn btn-primary">Cancelar</a>


{!! Form::close() !!}

@stop
