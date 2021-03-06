<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo asset('CSS/Diseño.CSS'); ?>">

		<title id="TittlePage"> Informacion de usuarios  </title>
</head>
	<body>



<?php $__env->startSection('content'); ?>

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
                        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($usuario->id); ?></td>
                            <td> <?php echo e($usuario->name); ?></td>
                            <td> <?php echo e($usuario->email); ?></td>
                            <td> <?php echo e($usuario->dni); ?></td>
                            <td> <?php echo e($usuario->phone); ?></td>
                            <td> <?php echo e($usuario->rol); ?></td>
                            <td> <?php echo e($usuario->status); ?></td>
                            <td> <a href= "<?php echo e(route('usuarios.editar',$usuario->id)); ?>" >edit</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>


				</table>
			</div>

<?php $__env->stopSection(); ?>



	</body>
</html>

<?php echo $__env->make('layout.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\InformaticGuards-1\resources\views/users-info.blade.php ENDPATH**/ ?>