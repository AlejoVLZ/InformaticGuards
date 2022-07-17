<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{!! asset('CSS/Diseño.CSS') !!}">

		<title id="TittlePage"> login Adm  </title>
</head>
	<body>
@extends('layout.layout')

@section('content')

<div class="logginbox">
    <div class="loggincontent">

        <h3>BIEVENIDO</h3>

        <p id="instructions">Ingresar sus datos de administrador:</p>

        <form action="{{route('admin.verificar') }}" method="POST">
            @csrf

        <label for="name">Nombre de usuario</label>
        <input type="text" name="name" placeholder="usuario">


        <label for="password">Contraseña </label>
        <input type="text" name="password" placeholder="clave">

        <label for="dni">DNI </label>
        <input type="text" name="dni" placeholder="DNI">

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
