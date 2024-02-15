
<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead"><?php echo e($viewData["description"]); ?></p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead"><?php echo e($viewData["phone"]); ?></p>
      <p class="lead"><?php echo e($viewData["email"]); ?></p>
      <p class="lead"><?php echo e($viewData["address"]); ?></p>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\2024-1\TEIS\talleres\laravelcourse\resources\views/home/contact.blade.php ENDPATH**/ ?>