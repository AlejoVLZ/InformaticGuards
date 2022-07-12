<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{!! asset('CSS/Diseño.CSS') !!}">
		<title id="TittlePage"> Registro  </title>
</head>
<body>

@extends('layout.layout')

@section('content')
    <header>
        <h2 id="headersection">Creación de usuario</h2>
    </header>
        <! –– login section ––>

    <div class="singupbox">
        <h3>BIEVENIDO</h3>
        <p >Pavor, llenar el siguiente formulario para completar su registro</p>

        <! –– username section ––>

            <label for="username_new">Nombre de usuario nuevo</label>
            <input type="text" name="Enter new username" placeholder="Nombre">

        <! ––  password section ––>

        <label for="password">Crear contraseña </label>
        <input type="text" name="Create password" placeholder="contraseña">

        <! ––  Email section ––>

        <label for="Email">Ingresar correo electronico </label>
        <input type="text" name="Enter Email" placeholder="Correo">

        <! ––  birthday section ––>

        <label for="Birthday">Ingresar fecha de nacimiento  </label>
        <input type="text" name="Enter BirthdayDate"
        placeholder="(MM/DD/YYYY)">

        <label for="Document">Ingresar documento  </label>
        <input type="text" name="" placeholder="Cedula/rif">

        <label for="Phone">Ingresar Telefono  </label>
        <input type="text" name="" placeholder="Tlf">


        <input type="submit" name="log in">
        </div>


@endsection
</body>
</html>
