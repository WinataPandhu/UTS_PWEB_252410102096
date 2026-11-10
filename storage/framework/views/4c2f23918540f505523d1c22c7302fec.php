<?php $__env->startSection('title', 'Profil'); ?>

<?php $__env->startSection('active', 'profile'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .profile-wrap { max-width: 560px; margin: 0 auto; }
    .profile-head { text-align: center; padding-bottom: 22px; border-bottom: 1px solid var(--line); margin-bottom: 8px; }
    .avatar {
        width: 110px; height: 110px; border-radius: 50%;
        background: linear-gradient(135deg, var(--accent), var(--accent-dark));
        color: #ffffff; font-size: 3rem; font-weight: 800;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 14px;
    }
    .profile-head h2 { margin-bottom: 8px; }
    .section-title { margin: 18px 0 6px; }
    .info-row { display: flex; justify-content: space-between; gap: 12px; padding: 12px 0; border-bottom: 1px solid var(--line); }
    .info-row:last-child { border-bottom: 0; }
    .info-row span:first-child { color: var(--muted); }
    .info-row strong { text-align: right; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="profile-wrap">
    <div class="card">
        <div class="profile-head">
            <div class="avatar"><?php echo e(strtoupper(substr($username, 0, 1))); ?></div>
            <h2><?php echo e($username); ?></h2>
        </div>

        <h2 class="section-title">Data Diri & Target</h2>
        <div class="info-row"><span>Username</span><strong><?php echo e($username); ?></strong></div>
        <div class="info-row"><span>Target</span><strong><?php echo e($profil['target']); ?></strong></div>
        <div class="info-row"><span>Berat badan</span><strong><?php echo e($profil['berat']); ?></strong></div>
        <div class="info-row"><span>Tinggi badan</span><strong><?php echo e($profil['tinggi']); ?></strong></div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\workout\resources\views/profile.blade.php ENDPATH**/ ?>