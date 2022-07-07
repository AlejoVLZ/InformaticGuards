<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>">
    <title>Welcome</title>
</head>
<body>
<?php $__env->startSection('content'); ?>

<div id="agrupwelcome">

    <div id="zonacentro" class="cuadroshome">
        <img src="https://images.vexels.com/media/users/3/205950/isolated/preview/6fbc93ab8efc8497ef9ad1f7c815dd33-icono-de-trazo-de-calendario.png" width="70px" >
        <h2 class="cuadro">BIEVENIDO</h2>
        <h3 id="joinQ">¿Como desea ingresar?</h3>
    <nav>
        <div class="UsersType">
            <p class="cuadro"><a href="login_regular.html"> Como usuario</a></p>
            <p id="o"> o </p>
            <p class="cuadro"> <a href="login_Adm.html">Como Administrador</a> </p>
            <a href="Registro.html">Crear cuenta</a>
        </div>
    </nav>
    </div>

    <section id="zonaizquierda" class="cuadroshome">
        <article id="section2" class="cuadro">
            <p>¿Que es?</p>
            <p class="text">Espacio ocupado para el registro de actividades laborales.</p>
        </article>
        <article id="section2" class="cuadro">
            <p>¿Quienes pueden acceder?</p>
            <p class="text">Aquellos trabajadores de la empresa “Informatics Guards”.
                Posee dos tipos de accesos, de usuario con el que puede registrar
                sus actividades y como administrador, permitiendole modificar toda la informacion de los empleados</p>
        </article>
    </section>

    <aside id="zonaderecha">
        <nav class="cuadro">
        <p>Contactenos</p>
        <ul>
            <li><a href="https://www.facebook.com/"> Facebook</li>
            <li><a id="tt" href="https://twitter.com/">Twitter</a>
            <li><a id="ig" href="http://www.instagram.com">Instagram</a></li>
        </ul>
        </nav>
    </aside>

    <footer class="footer">
        <p>© Informatics Guards 2022, Tlf: 0800-555-4756 , isla de margarita, Venezuela.</p>
    </footer>

</div>

<?php $__env->stopSection(); ?>



</body>
</html>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\InformaticsGuards\resources\views/welcomeusr.blade.php ENDPATH**/ ?>