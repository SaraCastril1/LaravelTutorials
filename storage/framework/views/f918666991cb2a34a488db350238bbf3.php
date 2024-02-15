
<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           <?php echo e($viewData["product"]["name"]); ?>

        </h5>
        <p class="card-text"><?php echo e($viewData["product"]["description"]); ?></p>
        <span>$</span>
        <span class="card-text"><?php echo e($viewData["product"]["price"]); ?></span> 
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\2024-1\TEIS\talleres\tutorial1\resources\views/product/show.blade.php ENDPATH**/ ?>