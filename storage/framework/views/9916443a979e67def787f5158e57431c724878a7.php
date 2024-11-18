

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Crear Vehículo</h1>
    <form action="<?php echo e(route('vehiculos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="tipo_vehiculo">Tipo de Vehículo</label>
            <input type="text" name="tipo_vehiculo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <input type="text" name="categoria" class="form-control" required>
        </div>
        <button class="btn btn-primary mt-2">Guardar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Daniel\Desktop\Tareaweb2\VehiculosApp\resources\views/vehiculos/create.blade.php ENDPATH**/ ?>