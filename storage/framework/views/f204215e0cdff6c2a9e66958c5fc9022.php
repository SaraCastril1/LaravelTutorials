
<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <?php $__currentLoopData = $viewData["worms"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <div class="card-body">
        <h4>ID: <?php echo e($worm->getId()); ?></h4>
        <h4>Name: <?php echo e($worm->getName()); ?></h4>
        <h4>Type: <?php echo e($worm->getType()); ?></h4>
        <h4>Velocity: <?php echo e($worm->getVelocity()); ?></h4>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\2024-1\TEIS\laravelTutorials\LaravelTutorials\resources\views/worm/list.blade.php ENDPATH**/ ?>