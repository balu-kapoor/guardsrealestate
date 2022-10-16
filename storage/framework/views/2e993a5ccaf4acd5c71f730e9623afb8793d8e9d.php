

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
        <img src="<?php echo e(asset('images/tenants.jpg')); ?>"  class="responsive-img ">
        <div class="header-row-heading">
            <div class="header-row">
                <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">Tenants</h1>
            </div>
        </div>
    </div>
    <div class="privacy-container">
        <div class="container">
            <div class="row first-row-block">
                <div class="col s12">
                        <p><strong>WHAT WE PROVIDE TO OUR TENANTS?</strong></p>
                        <p>We provide a Gold service as we are a efficient, caring, mobile team. We take all enquiries very literate to ensure that your time is not wasted to able to find you the home you deserve with extra care, we understand the rental market is extremely competitive &amp; this can be stressful at times, we take that stress away by ensuring that the Gold service we provide takes into account all your requirements in why your moving and what you need, we are hear to help you and go above and beyond to achieve what it is you are looking for, we are the agency that work around the clock and will go the extra mile for you.</p>
                        <p>&nbsp;</p>

                    <div class="guards-heading-box">
                        <h4 class="heading-guards guards-border guards-bottom-border">Guards are here to protect you.</h4>
                    </div>
                        <p><strong>LONG OPENING HOURS</strong></p>
                        <p>Flexible Consultants who will work around your time schedule.</p>
                        <p class="p-s-text"><strong>Monday – Thursday</strong><br>
                            9:00am – 8:00pm</p>
                        <p class="p-s-text"><strong>Friday</strong><br>
                            9:00am – 5:30pm</p>
                        <p class="p-s-text"><strong>Saturday<br>
                        </strong>10:00am – 3:30pm</p>
                        <p>&nbsp;</p>
                        <p><strong>EMERGENCY CALL SERVICE</strong></p>
                        <p>24hrs</p>
                        <p>&nbsp;</p>
                        <p><strong>24HR SERVICES</strong></p>
                        <p>Provide a 24hrs call service so when you need a human to speak we are here.</p>
                        <p>&nbsp;</p>
                        <blockquote><p>
                                <strong><em>‘’ We understand what its like having pets they are a big part of the family &amp; this is why we are hear to help you find your full family the perfect home’’</em></strong>
                            </p></blockquote>
                        <p>&nbsp;</p>
                        <p>Yes we are a pet friendly agency although this will always come down to the landlords discretion, we have a fantastic system in place where we don’t waste your time on viewings with the wrong properties, Guards Property advisors will already know which developments and clients will allow pets for rentals due to all of our clients been dealt with from a one to one manner.</p>
                        <p>&nbsp;</p>
                    </div>
                <div class="col s12">
                    <p>We are a pet friendly agency and we encourage tenants to bring offers forward with pets, we do have a sector of clients that are extremely understanding that some of your pets are part of your family.</p>
                    <p>&nbsp;</p>
                    <p><strong>WHERE DOES MY DEPOSIT GO?</strong></p>
                    <p>Your deposit will be registered within the first 30days of the agency/landlord receiving the deposit funds to a regulated deposit holder (my deposits) this will be returned at the end of the tenancy matching in line with the check in and check out report for more information on deposits give Guards Real Estate a call and we can inform you on the full deposit process.</p>
                    <p>&nbsp;</p>
                    <p><strong>PROPERTY ADVISOR</strong></p>
                    <p>We understand that looking for your perfect home can be challenging, we are here to ensure that you are given a smooth &amp; hassle free service this is why when you come to use to help you, we will have one professional property advisor who you deal with for the full process to keep all matters simple so no miscommunication occur’s.</p>
                    <p>&nbsp;</p>
                    <p><strong>ACCREDITATIONS</strong></p>
                    <p>Guards Real Estate are fully regulated &amp; accredited to all respected bodies, this means you have nothing to worry about as you are in the best hands when it comes to us dealing with your property search in a full professional manner. (see accreditations in Landlord sector &amp; Heritage values)</p>
                    <p>&nbsp;</p>
                    <p><strong>WHERE DO I LOOK FOR EXTERNAL ADVICE IF I HAVE A PROBLEM?</strong></p>
                    <p>As a tenant in the event in need of external advice you can always seek this from <strong><a href="https://www.citizensadvice.org.uk/housing/renting-a-home/" target="_blank" rel="noopener noreferrer">citizens advice bureau</a>.</strong></p>
                    <p>&nbsp;</p>
                </div>
            </div>
                <div class="privacy-text-block">
                    <div class="guards-heading-box">
                        <h4 class="heading-guards guards-border guards-bottom-border">Discuss your requirements with one of our Experts</h4>
                    </div>

                    <p class="p-l-text">For more information or to speak with one of our advisors please complete the information below and we will contact yoiu to discuss.</p>
                    <p class="p-l-text">Alternatively, call us on&nbsp;<strong><a href="tel:+442036331271">020 3633 1271</a></strong>&nbsp;to speak with one our team or email&nbsp;<a href="mailto:info@guardsrealestate.com">info@guardsrealestate.com</a></p>
                </div>
                <div class="privacy-text-block">
                    <div class="guards-heading-box">
                        <h4 class="heading-guards guards-border guards-bottom-border">Make an Enquiry</h4>
                    </div>
                    <form class="col s12" method="post" action="<?php echo e(route('website-contactus-form')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                            <?php endif; ?>
                            <div class="input-field col s12 m6 <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                                <input name="name" id="first_name" type="text" placeholder="Name" value="<?php echo e(old('name')); ?>">
                            </div>
                            <div class="input-field col s12 m6 <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                                <input name="email"  id="email" type="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
                            </div>
                            <div class="input-field col s12 m6 <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
                                <input name="phone"  id="phone" type="text" placeholder="Phone" value="<?php echo e(old('phone')); ?>">
                            </div>
                            <div class="input-field col s12 m6 <?php echo e($errors->has('subject') ? 'has-error' : ''); ?>">
                                <input name="subject"  id="subject" type="text" placeholder="Subject" value="<?php echo e(old('subject')); ?>">
                            </div>
                            <div class="input-field col s12 m12 <?php echo e($errors->has('message') ? 'has-error' : ''); ?>">
                                <textarea name="message"  id="message" class="materialize-textarea" placeholder="Your Message"><?php echo e(old('message')); ?></textarea>
                            </div>
                            <div class="col s12">
                                <button type="submit" value="Send Message" class="btn-guards">Send Message</button>
                            </div>
                        </div>
                    </form>
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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\guardsre-web\resources\views//pages/tenants.blade.php ENDPATH**/ ?>