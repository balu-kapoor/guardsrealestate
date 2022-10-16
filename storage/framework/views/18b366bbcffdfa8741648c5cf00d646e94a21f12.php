

<?php $__env->startSection('page-head'); ?>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('navigation'); ?>
    <?php echo $__env->make('includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-body'); ?>
    <main>

        <div class="main-heading-row">
            <img src="<?php echo e(asset('images/IMG_9014_certificates.jpg')); ?>" class="responsive-img ">
            <div class="header-row-heading">
                <div class="header-row">
                    <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">certificates</h1>
                </div>
            </div>
        </div>

        <div class="about-us">
            <div class="privacy-container">
                <div class="container">

                    <a class="btn-guards full-width"  href="<?php echo e(asset('files/Propertymark+CMP+Main+Scheme+Certificate.pdf')); ?>" title="Guards - Client Money Protection Scheme" target="_blank">CLIENT MONEY PROTECTION SCHEME</a>

                    <a class="btn-guards full-width" href="<?php echo e(asset('files/Client-Money-Protection-Security-Certificate-Email.pdf')); ?>" title="Guards - Client Money Protection Scheme" target="_blank">CLIENT MONEY PROTECTION SECURITY CERTIFICATE</a>

                    <a class="btn-guards full-width"  href="<?php echo e(asset('files/PRS+MemberShip+Certificate.pdf')); ?>" title="Guards - Property Redress Scheme" target="_blank">PROPERTY REDRESS SCHEME MEMBERSHIP 21/22</a>

                    <a class="btn-guards full-width"   href="<?php echo e(asset('files/PRS+MemberShip+Certificate.pdf')); ?>" title="Guards - My Deposits Protection" target="_blank">MY DEPOSITS PROTECTION CERTIFICATE</a>

                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\guardsre-web\resources\views/pages/certificates.blade.php ENDPATH**/ ?>