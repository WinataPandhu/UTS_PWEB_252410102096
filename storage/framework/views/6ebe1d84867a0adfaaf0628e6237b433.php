<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['username' => '', 'active' => '']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['username' => '', 'active' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<style>
    .navbar {
        background: var(--accent);
        box-shadow: 0 2px 12px rgba(185,28,28,.35);
        position: sticky;
        top: 0;
        z-index: 10;
    }
    .navbar-inner {
        max-width: 1080px;
        margin: 0 auto;
        padding: 14px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
    }
    .brand { font-size: 1.4rem; font-weight: 800; color: #ffffff; }
    .nav-links { display: flex; gap: 6px; flex-wrap: wrap; align-items: center; }
    .nav-links a {
        padding: 8px 16px;
        border-radius: 10px;
        color: rgba(255,255,255,.88);
        font-weight: 600;
        font-size: .95rem;
        transition: background .15s, color .15s;
    }
    .nav-links a:hover { background: rgba(255,255,255,.18); color: #ffffff; }
    .nav-links a.active { background: #ffffff; color: var(--accent); }
    .nav-links a.logout { border: 1px solid rgba(255,255,255,.6); }
    @media (max-width: 600px) {
        .navbar-inner { justify-content: center; }
        .nav-links a { padding: 7px 11px; font-size: .88rem; }
    }
</style>

<nav class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="<?php echo e(route('dashboard', ['username' => $username])); ?>">WorkOut</a>
        <div class="nav-links">
            <a href="<?php echo e(route('dashboard', ['username' => $username])); ?>" class="<?php echo e($active === 'dashboard' ? 'active' : ''); ?>">Dashboard</a>
            <a href="<?php echo e(route('pengelolaan', ['username' => $username])); ?>" class="<?php echo e($active === 'pengelolaan' ? 'active' : ''); ?>">Jadwal</a>
            <a href="<?php echo e(route('profile', ['username' => $username])); ?>" class="<?php echo e($active === 'profile' ? 'active' : ''); ?>">Profil</a>
            <a href="<?php echo e(route('login')); ?>" class="logout">Keluar</a>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\workout\resources\views/components/navbar.blade.php ENDPATH**/ ?>