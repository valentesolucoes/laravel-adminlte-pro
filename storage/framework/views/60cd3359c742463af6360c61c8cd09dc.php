            <!--begin::App Content Header-->
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php if (! empty(trim($__env->yieldContent('page-title')))): ?>
                                <h3 class="mb-0"><?php echo $__env->yieldContent('page-title'); ?></h3>
                            <?php endif; ?>

                            <?php if(isset($breadcrumbs)): ?>
                            <ol class="breadcrumb">
                                <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="breadcrumb-item">
                                    <a href="<?php echo e($breadcrumb['route']); ?>"><?php echo e($breadcrumb['label']); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ol>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-6 text-end">
                            <?php echo $__env->yieldContent('page-actions'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::App Content Header-->
<?php /**PATH /Volumes/www/laravel/laravel-pro-adminlte/resources/views/parts/content-header.blade.php ENDPATH**/ ?>