<?php $__env->startSection('page-title', 'Usuários'); ?>

<?php $__env->startSection('page-actions'); ?>
    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary">Adicionar Usuário</a>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [['label' => 'Home', 'route' => ''], ['label' => 'Usuários', 'route' => '']];
?>
<?php $__env->startSection('content'); ?>
    <?php $__sessionArgs = ['status'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('status')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Criação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($user->id); ?></th>
                    <td><?php echo e($user->name); ?></td>
                    <td><a href="mailto:<?php echo e($user->email); ?>"><?php echo e($user->email); ?></a></td>
                    <td><?php echo e($user->created_at->format('d/m/Y m:h')); ?></td>
                    <td>
                        <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i> Editar</a>
                            <button type="submti" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i> Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/www/laravel/laravel-pro-adminlte/resources/views/users/index.blade.php ENDPATH**/ ?>