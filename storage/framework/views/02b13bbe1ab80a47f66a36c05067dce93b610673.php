<?php $__env->startSection('tituloPagina', 'Crud con Laravel 8'); ?>

<?php $__env->startSection('contenido'); ?>

<div class="card">
  <h5 class="card-header">CRUD ""con Laravel 8 MySQL</h5>
  <div class="card-body">
    <div class="row">
        <div class="col-sm-12">
            <?php if($mensaje = Session::get('success')): ?>
                <div class="alert alert-success" role="alert">
        <?php echo e(( $mensaje )); ?>

</div>
<?php endif; ?>
        </div>
    </div>
    <h5 class="card-title">Listado de personas en el sistema</h5>
    <p>
        <a href="<?php echo e(route("personas.create")); ?>" class="btn btn-primary"><span class="fa-solid fa-user-plus"></span> Agregar nueva persona</a>

            <a href="<?php echo e(route("login.index")); ?>" class="btn btn-outline-danger">Salir</a>
    </p>
    <hr>
    <p class="card-text">
        <div class="table table-responsive">
            <table class='table table-sm table-bordered'>
                <thead>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha de nacimientos</th>
                    <th>Password</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <tr>
                        <td><?php echo e($item->nombres); ?></td>
                        <td><?php echo e($item->apellidos); ?></td>
                        <td><?php echo e($item->fecha_nacimiento); ?></td>
                        <td><?php echo e($item->password); ?></td>
                            <td>
                            <form action="<?php echo e(route("personas.edit", $item->id)); ?>" method="GET">
                            <button class="btn btn-warning btn-sm">

                            </button>    
                            </form>

                        </td>
                        <td>
                            <form action="<?php echo e(route("personas.show", $item->id)); ?>" method="GET">
                                <button class="btn btn-danger btn-sm">
                                    <span class=""></span>                                
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                
            </table>
        </div>
    </p>
    
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meta\resources\views/inicio.blade.php ENDPATH**/ ?>