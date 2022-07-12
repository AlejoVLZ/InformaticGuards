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
						<td>Ivan</td>
						<td>iyanes.3565@unimar.edu.ve</td>
						<td>28043565</td>
						<td>0424 8144487</td>
						<td>admin</td>
						<td>Activo</td>
					</tr>
					<tr>
						<td>Alejandro</td>
						<td>avelasquez.5536@unimar.edu.ve</td>
						<td>28315536</td>
						<td>04123589671</td>
						<td>admin</td>
						<td>activo</td>
					</tr>
					<tr>
						<td>Georgelyz</td>
						<td></td>
						<td></td>
						<td></td>
						<td>Supervisora</td>
						<td>suspended</td>
					</tr>
				</table>

			</div>

@endsection



	</body>
</html>
