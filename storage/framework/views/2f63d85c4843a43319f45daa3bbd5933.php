<?php $__env->startSection('title', 'Jadwal Workout'); ?>

<?php $__env->startSection('active', 'pengelolaan'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .page-head { margin-bottom: 22px; }
    .day-card {
        display: flex; flex-direction: column; gap: 8px;
        transition: transform .15s, border-color .15s;
    }
    .day-card:hover { transform: translateY(-4px); border-color: var(--accent); }
    .day-top { display: flex; justify-content: space-between; align-items: center; }
    .day-name { font-weight: 800; font-size: 1.1rem; }
    .day-latihan { font-weight: 600; font-size: 1.05rem; }
    .day-meta { color: var(--muted); font-size: .92rem; }
    .day-meta strong { color: var(--text); }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-head">
    <h1>Jadwal Workout Mingguan</h1>
    <p class="muted">Rencana latihan milik <strong class="accent"><?php echo e($username); ?></strong>, <?php echo e(count($jadwal)); ?> hari dalam seminggu.</p>
</div>

<div class="grid grid-cards">
    <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card day-card">
            <div class="day-top">
                <span class="day-name"><?php echo e($item['hari']); ?></span>
                <span class="badge <?php echo e($item['status'] === 'Terjadwal' ? 'badge-ok' : 'badge-rest'); ?>"><?php echo e($item['status']); ?></span>
            </div>
            <div class="day-latihan"><?php echo e($item['latihan']); ?></div>
            <div class="day-meta">
                <?php if($item['durasi'] > 0): ?>
                    Pukul <strong><?php echo e($item['jam']); ?></strong> · <?php echo e($item['durasi']); ?> menit
                <?php else: ?>
                    <strong>Tanpa jadwal latihan</strong>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\workout\resources\views/pengelolaan.blade.php ENDPATH**/ ?>