<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Mi Aplicación'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <header>
        <h1>Mi Aplicación</h1>
    </header>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer>
        <p>© 2024 Mi Aplicación</p>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\Daniel\Desktop\Tareaweb2\VehiculosApp\resources\views/layouts/app.blade.php ENDPATH**/ ?>