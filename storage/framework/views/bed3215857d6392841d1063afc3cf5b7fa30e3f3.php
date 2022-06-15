<?php $__env->startSection('content'); ?>
<div class="container">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
        <?php echo e(config('app.name', 'Laravel')); ?>

    </a>
   
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if(auth()->check() && auth()->user()->is_admin == 1): ?>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo e(url('admin')); ?>">Halaman Admin</a>
        </li>
        <?php endif; ?>
        <?php if(auth()->check() && auth()->user()->is_admin == 2): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('kabid')); ?>">Halaman KABID</a>
        </li>
        <?php endif; ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('pns')); ?>">Halaman PNS</a>
        </li>     
    </ul>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang\ProjekAbsenEgov\AbsensiEGOV\resources\views/home.blade.php ENDPATH**/ ?>