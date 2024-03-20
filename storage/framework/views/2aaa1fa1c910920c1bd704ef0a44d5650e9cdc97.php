

<?php $__env->startSection("tituloPagina", "Crear un nuevo registro"); ?>

<?php $__env->startSection('contenido'); ?>
<div class="card">
  <h5 class="card-header">Eliminar un Usuario!</h5>
  <div class="card-body">
    
  
    <p class="card-text">
    <div class="alert alert-danger" role="alert">
  Estas Seguro de Eliminar este Registro!!!

  <table class="table table-sm table-hover table-bordered" style="background-color: white">
    <thead>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha de nacimiento</th>
        <th>Password</th>
    </thead>
    <tr>
        <td><?php echo e($personas->nombres); ?></td>
        <td><?php echo e($personas->apellidos); ?></td>
        <td><?php echo e($personas->fecha_nacimiento); ?></td>
        <td><?php echo e($personas->password); ?></td>
    </tr>
  </table>
  <hr>
  <form action="<?php echo e(route('personas.destroy' , $personas->id)); ?>" method="POST"> 
    <?php echo csrf_field(); ?>  
    <?php echo method_field('DELETE'); ?>
    <a href="<?php echo e(route('personas.index')); ?>" class="btn btn-info">Regresar</a>
    <button class="btn btn-danger">Eliminar</button>
</div>
    </p>
    
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meta\resources\views/eliminar.blade.php ENDPATH**/ ?>