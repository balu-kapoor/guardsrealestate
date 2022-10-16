

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
            <img src="<?php echo e(asset('images/payments.jpg')); ?>" class="responsive-img ">
            <div class="header-row-heading">
                <div class="header-row">
                    <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border ">
                        payments</h1>
                </div>
            </div>
        </div>
        <div class="text-box-container">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="guards-heading-box">
                            <h4 class=" payment-h4 heading-guards guards-border guards-bottom-border">make a
                                payment</h4>
                        </div>
                        <div class=" payment-container">
                            <p class="p-l-text">
                                Please use this feature to make a payment to Guards Real Estate. Once you have completed
                                the form you will be redirected to the secure payment platform to enter & submit your
                                payment details. If you have any questions please speak to one of our advisors.
                            </p>
                            <div class="form-block">
                                <div class="row">
                                    <form class="col s12" id="sage_pay"
                                          action="https://live.sagepay.com/gateway/service/vspform-register.vsp"
                                          method="post">
                                        <input type="hidden" name="VPSProtocol" value="3.00">
                                        <input type="hidden" name="TxType" value="PAYMENT">
                                        <input type="hidden" name="Vendor" value="<?php echo e(SAGE_VENDOR_NAME); ?>">
                                        <input type="hidden" name="Crypt" id="crypt_value" value="">
                                        <input type="hidden" name="FailureURL" value="<?php echo e(route('website-payments').'?failure'); ?>">
                                        <input type="hidden" name="SuccessURL" value="<?php echo e(route('website-payments').'?success'); ?>">
                                        <input type="hidden" name="BillingCountry" value="GB">
                                        <input type="hidden" name="BillingCountry" value="GB">
                                        <input type="hidden" name="Currency" value="GBP">
                                        <div class="row">
                                            <div class="input-field col s12 m6">
                                                <input name="BillingFirstnames" id="first_name" type="text" placeholder="Name" value="">
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="BillingSurname" id="surname" type="text" placeholder="Surname" value="">

                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="BillingAddress1" id="add1" type="text" placeholder="Your Address Line One"  value="">
                                                <label for="add1"></label>
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="BillingAddress2" id="add2" type="text" placeholder="Your Address Line Two" value="">

                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="BillingCity" id="city" type="text" placeholder="City"  value="">
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="BillingPostCode" id="pincode" type="text" placeholder="Postcode" value="">
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="BillingPhone" id="BillingPhone" type="number" placeholder="Phone Number">
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="email" id="email" type="email" placeholder="Email">
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="property" id="property" type="text" placeholder="Property Reference">
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input name="Amount" id="amount" type="number" placeholder="Amount To Pay" value="">
                                            </div>
                                            <div class="col s12 payment-button">
                                                <button class="btn-guards">Make Payment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script type="text/javascript">
        jQuery(function () {
            jQuery('form#sage_pay').submit(function (e) {
                e.preventDefault();
                e.returnValue = false;

                var form = jQuery(this);

                jQuery.ajax({
                    type: 'post',
                    url: '<?php echo e(route('payments-getcrypt')); ?>',
                    context: jQuery('form#sage_pay'),
                    data: form.serialize(),
                    success: function (response) {
                        jQuery('form#sage_pay input[name="Crypt"]').val(response);
                    },
                    error: function () {
                        //something
                    },
                    complete: function () {
                        $('form#sage_pay').off('submit');
                        $('form#sage_pay').submit();
                    }
                });
            });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\guardsre-web\resources\views/pages/payments.blade.php ENDPATH**/ ?>