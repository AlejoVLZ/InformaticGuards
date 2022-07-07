<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>">
    <title>Sing Up</title>
</head>
<body>
<?php $__env->startSection('content'); ?>

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

<?php $__env->stopSection(); ?>



</body>
</html>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\InformaticsGuards\resources\views/Registro.blade.php ENDPATH**/ ?>