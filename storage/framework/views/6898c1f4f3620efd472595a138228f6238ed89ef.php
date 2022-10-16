<?php $__env->startComponent('mail::message'); ?>
You have a new valuation request!


<?php if(!empty($formData)): ?>
<?php if(is_array($formData)): ?>
<?php $__currentLoopData = $formData['form_data2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
__<?php echo e($key); ?>__: <?php echo e($value); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<?php echo $formData; ?>

<?php endif; ?>

<?php else: ?>
No data found!
<?php endif; ?>


Thanks,

<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\guardsre-web\resources\views/emails/bookvaluation.blade.php ENDPATH**/ ?>