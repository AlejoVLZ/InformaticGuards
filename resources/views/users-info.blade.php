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
					<thead>
                        <td>ID</td>
						<td>Nombre</td>
						<td>Correo</td>
						<td>Cedula</td>
						<td>Telefono</td>
						<td>Rol</td>
						<td>Status</td>

                    </thead>
					<tbody>
                        @foreach ( $usuarios as $usuario )
                        <tr>
                            <td> {{ $usuario->id }}</td>
                            <td> {{ $usuario->name }}</td>
                            <td> {{ $usuario->email }}</td>
                            <td> {{ $usuario->dni }}</td>
                            <td> {{ $usuario->phone }}</td>
                            <td> {{ $usuario->rol }}</td>
                            <td> {{ $usuario->status }}</td>
                            <td> <a href= "{{ route('usuarios.editar',$usuario->id) }}" >edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>


				</table>
			</div>

@endsection



	</body>
</html>
