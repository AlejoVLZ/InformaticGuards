<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="file:///C:/Users/ivany/OneDrive/Escritorio/Calendario/Diseño.CSS">
	<title>Calendar User</title>
</head>
<body>

@extends('layout.layout')


@section('content')
    <header>
        <nav class="menu">
            <ul>
                <li> <p> <a href="InformaticGuards_Calendary.html">Ver Usuarios</a> </p></li>
                <li> <p> <a href="home_user.blade.php.html">Home </a></p></li>
                <li> <p> <a href="Welcome.blade.php.html"></a> Salir de cuenta </p> </li>
            </ul>
        </nav>
    </header>

<aside class="asidehome">
    <div class="elementsidebar">
         <h4>Eventos del día</h4>
        <p>No hay eventos programados hasta ahora</p>
    </div>
    <div class="elementsidebar">
        <h4>Leyenda</h4>
        <p id="lg1">Asignado</p>
        <p id="lg2">No Asignado</p>
        <p id="lg3">Permiso por enfermedad</p>
    </div>
</aside>

<div class="homebigbox">
<section>

    <div class="opcionesbusqueda">
        <p>ver por</p>
        <select id="date_one"></select>
        <p>buscar por</p>
        <select id="date_two"></select>
    </div>

<div id="box-calendar">
    <table class="calendar">
        <tr id="fila1">
            <td>Hora</td>
            <td>Encargado</td>
        </tr>
        <tr>
            <td class="asignado">10:00-11:00</td>
            <td class="ivan">Ivan</td>
        </tr>
        <tr>
            <td class="asignado">11:00-12:00</td>
            <td class="ivan">Ivan</td>
        </tr>
        <tr>
            <td class="asignado">13:00-14:00</td>
            <td class="ivan">Ivan</td>
        </tr>
        <tr>
            <td class="asignado">14:00-15:00</td>
            <td class="ivan">Ivan</td>
        </tr>
        <tr>
            <td class="asignado">16:00-17:00</td>
            <td class="ivan">Ivan</td>
        </tr>
        <tr>
            <td class="asignado">18:00-19:00</td>
            <td class="ale">Alejandro</td>
        </tr>
        <tr>
            <td class="asignado">19:00-20:00</td>
            <td class="ale">Alejandro</td>
        </tr>
        <tr>
            <td class="asignado">20:00-21:00</td>
            <td class="ale">Alejandro</td>
        </tr>
        <tr>
            <td class="asignado">21:00-22:00</td>
            <td class="ale">Alejandro</td>
        </tr>
        <tr>
            <td class="asignado">22:00-23:00</td>
            <td class="ale">Alejandro</td>
        </tr>
    </table>
</div>
</section>


</div>

@endsection


</body>
</html>
