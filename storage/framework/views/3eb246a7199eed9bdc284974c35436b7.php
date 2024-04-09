

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">Worm Statistics</div>
        <div class="card-body">
            <p>Number of Sandworms: <?php echo e($viewData['sandworm']); ?></p>
            <p>Number of Spaceworms: <?php echo e($viewData['spaceworm']); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\2024-1\TEIS\laravelTutorials\LaravelTutorials\resources\views/worm/stadistics.blade.php ENDPATH**/ ?>