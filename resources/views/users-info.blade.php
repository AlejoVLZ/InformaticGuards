<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{!! asset('CSS/Diseño.CSS') !!}">

		<title id="TittlePage"> Informacion de usuarios  </title>
</head>
	<body>

@extends('layout.layout')

@section('content')

			<! ––  Tabla de la informacion de usuario ––>
			<div >
				<table id="dt_interno">
					<tr>
						<td >Nombre</td>
						<td>Correo</td>
						<td>Cedula</td>
						<td>Telefono</td>
						<td>Rol</td>
						<td>Status</td>
					</tr>
					<tr>
						@foreach ( $usuariosos as $usuario )
                        <tr>
                            <td> {{ $usuario->id }}</td>
                            <td> {{ $usuario->nombre }}</td>
                            <td> {{ $usuario->correo }}</td>
                            <td> {{ $usuario->cedula }}</td>
                            <td> {{ $usuario->telefono }}</td>
                            <td> {{ $usuario->rol }}</td>
                            <td> {{ $usuario->estatus }}</td>
                                <td>
                                    <a href="/usuarios/ver"{{$usuario->id}}>ver</a>
                                    <a href="/usuarios/editar"{{$usuario->id}}>editar</a>
                                    <a href="/usuarios/eliminar"{{$usuario->id}}>eliminar</a>
                                </td>
                        </tr>
                        @endforeach
					</tr>
				</table>
                <br>
                <a href="/usuarios/crear">nuevo usuario</a>
			</div>

@endsection



	</body>
</html>
