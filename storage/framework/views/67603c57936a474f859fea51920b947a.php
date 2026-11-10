<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('active', 'dashboard'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .hero {
        background: #fee2e2;
        border: 1px solid #fecaca;
        border-radius: var(--radius);
        padding: 30px;
        margin-bottom: 20px;
    }
    .hero .hari { color: var(--accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: .85rem; }
    .hero h1 { margin: 6px 0 12px; }
    .today-box {
        background: #ffffff;
        border: 1px solid #fecaca;
        border-radius: 14px;
        padding: 16px 18px;
        margin-top: 14px;
    }
    .today-box .jam { font-weight: 700; color: var(--text); }
    .stat { text-align: center; }
    .stat .label { color: var(--muted); font-size: .92rem; margin-top: 4px; }
    .cta { margin-top: 24px; text-align: center; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="hero">
    <div class="hari"><?php echo e($hariIni); ?></div>
    <h1>Halo, <span class="accent"><?php echo e($username); ?></span>!</h1>

    <?php if($jadwalHariIni && $jadwalHariIni['status'] === 'Terjadwal'): ?>
        <p class="muted">Ini rencana latihanmu hari ini</p>
        <div class="today-box">
            <div><strong><?php echo e($jadwalHariIni['latihan']); ?></strong></div>
            <div class="muted">
                <span class="jam">Pukul <?php echo e($jadwalHariIni['jam']); ?></span> · <?php echo e($jadwalHariIni['durasi']); ?> menit
            </div>
        </div>
    <?php else: ?>
        <p class="muted">Hari ini jadwalnya istirahat.</p>
    <?php endif; ?>
</section>

<h2>Ringkasan Minggu Ini</h2>
<div class="grid grid-3">
    <div class="card stat">
        <div class="stat-num"><?php echo e($ringkasan['total_sesi']); ?></div>
        <div class="label">Sesi latihan</div>
    </div>
    <div class="card stat">
        <div class="stat-num"><?php echo e($ringkasan['total_menit']); ?></div>
        <div class="label">Total menit latihan</div>
    </div>
    <div class="card stat">
        <div class="stat-num"><?php echo e($ringkasan['hari_rest']); ?></div>
        <div class="label">Hari istirahat</div>
    </div>
</div>

<div class="cta">
    <a class="btn" href="<?php echo e(route('pengelolaan', ['username' => $username])); ?>">Lihat Jadwal Lengkap →</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\workout\resources\views/dashboard.blade.php ENDPATH**/ ?>