

<?php $__env->startSection('page-head'); ?>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navigation'); ?>
    <?php echo $__env->make('includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-body'); ?><main class="privacy">
    <div class="main-heading-row">
        <img src="<?php echo e(asset('images/IMG_8627_valuations.jpg')); ?>" class="responsive-img ">
        <div class="header-row-heading">
            <div class="header-row">
                <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">Valuations</h1>
            </div>
        </div>
    </div>
    <div class="about-us">
        <div class="container">
            <div class="row first-row-block">
                    <p>Sell or Let your Property with Guards Real Estate today – Call <a href="tel:+442036331271">020 3633 1271</a>.</p>
                    <p>&nbsp;</p>
                    <p><strong>HOW MUCH IS YOUR PROPERTY WORTH?</strong></p>
                    <p class="textbox" dir="ltr">Guards Real Estate Valuers have gained their industry standard exams meaning you will be advised by accredited and experienced advisors to ensure you gain the best price available in the present market. If you decide to list your property or are simply looking for a comparison quote we ensure you will receive professional service with a <em>complimentary and no obligation valuation.&nbsp;</em></p>
                    <p dir="ltr"><strong>NO LET, NO FEE</strong></p>
                    <p class="textbox" dir="ltr">You don’t pay anything until we let your property.</p>
                    <p class="textbox" dir="ltr"><strong>ADVERTISE LOCALLY &amp; GLOBALLY</strong></p>
                    <p class="textbox" dir="ltr">We will ensure that your property will reach the most appropriate audience with opportunity for the highest possible market price. Guards Real Estate operates globally using different styles of marketing unique to Guards Real Estate, benefiting you!</p>
                    <p class="textbox" dir="ltr"><strong>Contact us <a href="/contact-us"><span style="text-decoration: underline;">here</span></a>.&nbsp;</strong></p>

            </div>
            <div class="col s12 button-area">
                <a class="btn-guards" href="<?php echo e(url('valuation/online')); ?>" >Book valuation</a>
            </div>
    </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\guardsre-web\resources\views/pages/valuations.blade.php ENDPATH**/ ?>