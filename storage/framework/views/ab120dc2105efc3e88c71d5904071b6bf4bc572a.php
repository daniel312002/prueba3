

<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(route('vehiculos.create')); ?>" class="btn btn-primary">Crear Vehículo</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Vehículo</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $vehiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($vehiculo->id); ?></td>
                <td><?php echo e($vehiculo->tipo_vehiculo); ?></td>
                <td><?php echo e($vehiculo->categoria); ?></td>
                <td>
                    <a href="<?php echo e(route('vehiculos.edit', $vehiculo)); ?>" class="btn btn-warning">Editar</a>
                    <form action="<?php echo e(route('vehiculos.destroy', $vehiculo)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger" onclick="return confirm('¿Eliminar este vehículo?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Daniel\Desktop\t\y\resources\views/vehiculos/index.blade.php ENDPATH**/ ?>