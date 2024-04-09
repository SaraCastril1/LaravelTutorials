
<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
  <div class="parcial1 activity1">
        
    <a class="nav-link active" href="<?php echo e(route('worm.register')); ?>">Register Worms</a>
    <a class="nav-link active" href="<?php echo e(route('worm.list')); ?>">List Worms</a>
    <a class="nav-link active" href="<?php echo e(route('worm.stadistics')); ?>">Stadistics</a>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\2024-1\TEIS\laravelTutorials\LaravelTutorials\resources\views/worm/index.blade.php ENDPATH**/ ?>