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
        <form action="{{ route('usuarios.crear')}}" method="POST">
        <! –– username section ––>
            @csrf
            <label for="username_new">Nombre de usuario nuevo</label> <br>
            <input type="text" name="name" placeholder="Nombre" value="{{old('name')}}"><br>
            {!! $errors ->first('name','<small>:message</small><br>')!!}
        <! ––  password section ––>

        <label for="password">Crear contraseña </label><br>
        <input type="text" name="password" placeholder="contraseña" value="{{old('password')}}"><br>
        {!! $errors ->first('password','<small>:message</small><br>')!!}
        <! ––  Email section ––>

        <label for="Email">Ingresar correo electronico </label><br>
        <input type="email" name="email" placeholder="Correo" value="{{old('email')}}"><br>
        {!! $errors ->first('email','<small>:message</small><br>')!!}

        <label for="Document">Ingresar documento  </label><br>
        <input type="text" name="dni" placeholder="Cedula/rif" value="{{old('dni')}}"><br>
        {!! $errors ->first('dni','<small>:message</small><br>')!!}

        <label for="Phone">Ingresar Telefono  </label><br>
        <input type="text" name="phone" placeholder="Tlf" value="{{old('phone')}}"><br>
        {!! $errors ->first('phone','<small>:message</small><br>')!!}

        <label for="rol">Ingresar Rol  </label><br>
        <input type="text" name="rol" placeholder="su ocupación" value="{{old('rol')}}"><br>
        {!! $errors ->first('rol','<small>:message</small><br>')!!}

        <input type="submit" name="Guardar">
    </form>
        </div>


@endsection
</body>
</html>
