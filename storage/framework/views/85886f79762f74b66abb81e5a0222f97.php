
<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?>
<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="card-header"></div>
        <div class="card-body">
        <?php if($errors->any()): ?>
        <ul id="errors" class="alert alert-danger list-unstyled">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('worm.store')); ?>">
            <?php echo csrf_field(); ?>
            <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="<?php echo e(old('name')); ?>" />
            <select class="form-control mb-2" name="type">
                <option value="sandworm">sandworm</option>
                <option value="spaceworm">spaceworm</option>
            </select>
            <input type="number" step="any" class="form-control mb-2" placeholder="Enter velocity (km/h)" name="velocity" value="<?php echo e(old('velocity')); ?>" />
            <input type="submit" class="btn btn-primary" value="Send" />
        </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\2024-1\TEIS\laravelTutorials\LaravelTutorials\resources\views/worm/register.blade.php ENDPATH**/ ?>