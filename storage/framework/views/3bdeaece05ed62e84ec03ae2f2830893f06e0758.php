<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="C:\laragon\www\InformaticsGuards\resources\css\app.css">
    <title>Document</title>
</head>
<body>
        <header>
            <h1 >Informatic Guards</h1>
            <h2 id="headersection">Turnos de trabajo</h2>
            <nav class="menu">
            <ul>
                <li> <p> <a href="InformaticGuards_Calendary.html">Ver Usuarios</a> </p></li>
                <li> <p> <a href="home_user.blade.php.html">Home </a></p></li>
                <li> <p> <a href="Welcome.blade.php.html"></a> Salir de cuenta </p> </li>
            </ul>
        </nav>
        </header>

        <?php echo $__env->yieldContent('content'); ?>

</body>
</html>
<?php /**PATH C:\laragon\www\InformaticsGuards\resources\views/cabecera.blade.php ENDPATH**/ ?>