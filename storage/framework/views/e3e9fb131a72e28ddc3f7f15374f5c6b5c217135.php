<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>">
    <title>Log in</title>
</head>
<body>
<?php $__env->startSection('content'); ?>
<div class="logginbox">
    <div class="loggincontent">

        <h3>BIEVENIDO</h3>

        <p id="instructions">Ingresar sus datos de administrador:</p>


        <label id="uss" for="username_new">Nombre de usuario nuevo/correo electronico</label>
        <input type="text" name="Enter username/Email">


        <label id="pass" for="password">ingresa contraseña </label>
        <input type="text" name="Enter password">


        <label id="IDUS" for="Email">Ingresar Id User </label>
        <input type="text" name="Enter Id user">

        <input type="submit" name="log in">
        <a id="volver_registro" href="Index.html">volver</a>

    </div>
    <div class="logginbanner">
        <img src="<?php echo asset('1062915392.jpg'); ?>" alt="">
    </div>
</div>

<?php $__env->stopSection(); ?>



</body>
</html>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\InformaticsGuards\resources\views/Loginadm.blade.php ENDPATH**/ ?>