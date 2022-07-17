<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{!! asset('CSS/Diseño.CSS') !!}">

		<title id="TittlePage"> Login  </title>
</head>
	<body>

@extends('layout.layout')

@section('content')

<div class="logginbox">
    <div class="loggincontent">

        <h3>BIEVENIDO</h3>

        <p id="instructions">Ingresar sus datos de usuario:</p>

        <form action="{{route('usuarios.verificar') }}" method="POST">
            @csrf

        <label>
            <input type="name" name="name" placeholder="usuario">
        </label><br>

        <input type="submit" name="log in">
        </form>


        <a href="{{ route('registro')}}">Crear cuenta nueva</a>
        <a id="volver_reg" href="{{route('welcome')}}">volver</a>

    </div>
    <div class="logginbanner">
        <img src="{!! asset('Images/1062915392.jpg') !!}" alt="">
    </div>
</div>

@endsection



    </body>
</html>
