<?php $__env->startSection('title', 'Masuk'); ?>

<?php $__env->startSection('nonav', true); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .login-wrap { min-height: 70vh; display: flex; align-items: center; justify-content: center; }
    .login-card { width: 100%; max-width: 420px; text-align: center; border-top: 6px solid var(--accent); }
    .login-card h1 { margin: 0 0 4px; }
    .login-card form { margin-top: 24px; text-align: left; }
    label { display: block; font-weight: 600; margin-bottom: 6px; }
    input[type=text] {
        width: 100%;
        padding: 13px 16px;
        background: var(--card-2);
        border: 1px solid #d1d5db;
        border-radius: 12px;
        color: var(--text);
        font-size: 1rem;
        margin-bottom: 8px;
    }
    input[type=text]:focus { outline: 2px solid var(--accent); border-color: transparent; }
    .error { color: var(--accent-dark); font-size: .88rem; margin-bottom: 10px; }
    .login-card .btn { width: 100%; margin-top: 10px; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="login-wrap">
    <div class="card login-card">
        <h1>Work<span class="accent">Out</span></h1>
        <p class="muted">Masuk untuk mengatur jadwal workout mingguanmu.</p>

        <form action="<?php echo e(route('login.proses')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" value="<?php echo e(old('username')); ?>" autofocus>
            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <button type="submit" class="btn">Masuk</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\workout\resources\views/login.blade.php ENDPATH**/ ?>