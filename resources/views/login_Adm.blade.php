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

        <label for="username">Nombre de usuario</label>
        <input type="text" name="Enter usernames" placeholder="usuario">


        <label for="password">Contraseña </label>
        <input type="text" name="Enter password" placeholder="clave">

        <label for="password">Email </label>
        <input type="text" name="Enter mail" placeholder="clave">

        <input type="submit" name="log in">

            <a id="volver_reg" href="Index.html">volver</a>

    </div>
    <div class="logginbanner">
        <img src="{!! asset('Images/1062915392.jpg') !!}" alt="">
    </div>
</div>

@endsection

	</body>
</html>
