<?php $__env->startComponent('mail::message'); ?>
You have a new repair request!


<?php if(is_array($formData)): ?>
<?php $__currentLoopData = $formData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><b><?php echo e($key); ?></b> : <?php echo e($value); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<?php echo $formData; ?>

<?php endif; ?>

<?php if(is_array($images)): ?>
<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<img src="<?php echo e(url('/')); ?>/uploads/<?php echo e($value); ?>" /> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<?php echo $images; ?>

<?php endif; ?>

Thanks,

<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\guardsre-web\resources\views/emails/repair.blade.php ENDPATH**/ ?>