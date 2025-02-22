<!doctype html>
<html lang="pt-br">
<head>
<?php echo $__env->make('parts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="<?php echo $__env->yieldContent('body-class'); ?> bg-body-secondary">
    <?php echo $__env->yieldContent('content'); ?>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

</body>


</html>
<?php /**PATH /Volumes/www/laravel/laravel-pro-adminlte/resources/views/layouts/auth.blade.php ENDPATH**/ ?>