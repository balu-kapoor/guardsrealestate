

<?php $__env->startSection('page-head'); ?>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <!-- Latest compiled and minified CSS -->        
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navigation'); ?>
    <?php echo $__env->make('includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-body'); ?>
    <main>
        <div class="repair-success">
            <img class="sent-header" src="<?php echo e(asset('/images/sent-header.png')); ?>" alt="">
            <h4>Sent!</h4>
            <hr>
            <p>Your issue has been submitted. Your reference number is IS7781783</p>
            <p>You will receive a copy of your issue by email shortly. (Don't forget to check your spam folder)</p>
            <p>Things to do next:</p>
            <ul>
                <li><a href="<?php echo e(url('/repair-maintenance')); ?>">Report another issue</a></li>
                <li><a href="#">Help us improve our repair reporting service for you. It takes less than a minute!</a></li>
            </ul>
            <a class="home-button" href="<?php echo e(url('/')); ?>">Home</a>
        </div>
    </main>
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<style>
    .sent-header {
        background: #9ec128;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\guardsre-web\resources\views/pages/create-issue-success.blade.php ENDPATH**/ ?>