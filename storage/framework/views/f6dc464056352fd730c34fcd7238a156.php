<?php $__env->startSection('body-class', 'login-page'); ?>

<?php $__env->startSection('content'); ?>
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo e(route('login')); ?>"><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Redefinir senha da conta</p>

                <?php $__sessionArgs = ['status'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e($value); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>

                <form action="<?php echo e(route('password.email')); ?>" method="post">
                    <?php echo csrf_field(); ?>

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
                    <div class="row">
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Enviar Link</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="mt-2 text-center">
                    <p class="mb-1"><a href="<?php echo e(route('login')); ?>">Login</a></p>
                    <p class="mb-0"><a href="<?php echo e(route('register')); ?>" class="text-center"> Registre uma nova associação </a></p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/www/laravel/laravel-pro-adminlte/resources/views/auth/forgot_password.blade.php ENDPATH**/ ?>