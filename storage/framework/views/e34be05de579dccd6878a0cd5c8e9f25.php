<?php $__env->startSection('body-class','register-page'); ?>
<?php $__env->startSection('content'); ?>
    <div class="register-box">
        <div class="register-logo">
            <a href="<?php echo e(route('login')); ?>"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body register-card-bacody">
                <p class="register-box-msg">Registrar um novo usuário</p>
                <form action="<?php echo e(route('register')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                        <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nome Completo" value="<?php echo e(old('name')); ?>" />
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email" value="<?php echo e(old('email')); ?>" />
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Senha" />
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmação de senha" />
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="mb-0 mt-2 text-center">
                    <a href="<?php echo e(route('login')); ?>" class="text-center"> Eu já tenho uma assinatura </a>
                </p>
            </div>
            <!-- /.register-card-body -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/www/laravel/laravel-pro-adminlte/resources/views/auth/register.blade.php ENDPATH**/ ?>