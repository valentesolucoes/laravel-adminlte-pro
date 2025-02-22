<!doctype html>
<html lang="pt-br">

<head>
<?php echo $__env->make('parts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php echo $__env->make('parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main class="app-main">
            <?php echo $__env->make('parts.content-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="app-content">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?>

                </div>
            </div>
        </main>
        <?php echo $__env->make('parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
<!--end::Body-->

</html>
<?php /**PATH /Volumes/www/laravel/laravel-pro-adminlte/resources/views/layouts/default.blade.php ENDPATH**/ ?>