<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{!! asset('CSS/Diseño.CSS') !!}">
	<title>Admin</title>
</head>
<body>
    @extends('layout.layout')

    @section('content')
<body>


    <aside class="asidehome">

        <div class="elementsidebar">
             <h4>Eventos del día</h4>
            <p>No hay eventos programados hasta ahora</p>
        </div>
        <div class="elementsidebar">
            <h4 >Generar Evento</h4>
            <input type="text" name="" placeholder="Nombre">
            <input type="text" name="" placeholder="Detalle">
        </div>
        <div class="elementsidebar">
            <p id="Delete_CuEvent">Eliminar Evento del Dia</p>
            <p id="Delete_Button">Eliminar</p>
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
                <table class="calendaradmin">
                    <tr>
                        <td>Hora</td>
                        <td>Alejandro</td>
                        <td>Ivan</td>
                    </tr>
                    <tr>
                        <td class="asignado">10:00-11:00</td>
                        <td></td>
                        <td class="ivan"></td>
                    </tr>
                    <tr>
                        <td class="asignado">11:00-12:00</td>
                        <td></td>
                        <td class="ivan"></td>
                    </tr>
                    <tr>
                        <td class="asignado">13:00-14:00</td>
                        <td></td>
                        <td class="ivan"></td>
                    </tr>
                    <tr>
                        <td class="asignado">14:00-15:00</td>
                        <td></td>
                        <td class="ivan"></td>
                    </tr>
                    <tr>
                        <td class="asignado">16:00-17:00</td>
                        <td class="ale"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="asignado">18:00-19:00</td>
                        <td class="ale"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="asignado">19:00-20:00</td>
                        <td class="ale"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="asignado">20:00-21:00</td>
                        <td class="ale"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="asignado">21:00-22:00</td>
                        <td class="ale"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="asignado">22:00-23:00</td>
                        <td class="ale"></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            </section>

        </div>
    </body>

    @endsection

    </body>
</html>
