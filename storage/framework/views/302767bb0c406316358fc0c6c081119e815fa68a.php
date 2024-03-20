

<?php $__env->startSection("tituloPagina", "Crear un nuevo registro"); ?>

<?php $__env->startSection('contenido'); ?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-dark text-white">
                <h5 class="card-header bg-danger text-white">Actualizar nuevo usuario</h5>
                <div class="card-body">
                    <form action="<?php echo e(route('personas.update' , $personas->id)); ?>" method="POST" class="needs-validation" novalidate>
                        <?php echo csrf_field(); ?>
                         <?php echo method_field("PUT"); ?>
                        <div class="form-group text-white">

                        <div class="form-group text-white">
                            <label for="nombres">Nombre</label>
                            <input type="text" id="nombres" name="nombres" class="form-control" required value="<?php echo e($personas->nombres); ?>">
                            <div class="invalid-feedback">Por favor ingrese su nombre.</div>
                        </div>

                            <label for="apellidos">Apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control" required value="<?php echo e($personas->apellidos); ?>">
                            <div class="invalid-feedback">Por favor ingrese sus apellidos.</div>
                        </div>


                        <div class="form-group text-white">
                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required value="<?php echo e($personas->fecha_nacimiento); ?>">
                            <div class="invalid-feedback">Por favor seleccione su fecha de nacimiento.</div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="text-white">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control" required value="<?php echo e($personas->password); ?>">
                            <div class="invalid-feedback">Por favor ingrese una contraseña.</div>
                        </div>

                            <div class="form-group">
                            <button type="submit" class="btn btn-warning mr-2">Actualizar</button>
                            <a href="<?php echo e(route ("personas.index")); ?>" class="text-white mr-2">Regresar</a>
                            <a href="#" class="btn btn-outline-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meta\resources\views/actualizar.blade.php ENDPATH**/ ?>