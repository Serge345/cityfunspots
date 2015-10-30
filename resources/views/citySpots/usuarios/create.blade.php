@extends('layouts.master')

@section('content')


<h1>Crear un usuario nuevo</h1>
<p class="lead">Ingrese la información del nuevo usuario.</p>
<hr>



{!! Form::open(['route' => 'usuarios.store']) !!}

<div class="form-group">
    {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('correo', 'Correo electronico', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('nickname', 'Nickname', ['class' => 'control-label']) !!}
    {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password_confirmation', 'Confirmar Password',['class' => 'control-label']) !!}
    {!! Form::password('password_confirmation', null,['class' => 'control-label']) !!}
</div>



{!! Form::submit('Crear nuevo usuario', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
