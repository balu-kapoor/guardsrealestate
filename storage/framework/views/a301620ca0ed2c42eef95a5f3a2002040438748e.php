

<?php $__env->startSection('page-head'); ?>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navigation'); ?>
    <?php echo $__env->make('includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-body'); ?>

    <?php /** @var \App\Models\Properties\GB_PropertySync $property  */ ?>
<main class="details-page">
    <div class="images-container">
        <div class="carousel">
            <a id="carousel-prev" class="moveCarousel prev  waves-effect left"><img src="<?php echo e(asset('images/i_prev.svg')); ?>"></a>
            <a id="carousel-next" class="moveCarousel next waves-effect right"><img src="<?php echo e(asset('images/i_next.svg')); ?>"></a>

            <?php $i=1; ?>
            <?php if(!empty($property->imagelist)): ?>
                <?php $__currentLoopData = $property->imagelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imgpath): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="carousel-item" href="#">
                    <img src="<?php echo e($imgpath); ?>?width=1920&height=1200&cropToFill=True">
                    <div class="card-overlay">
                        <div class="img-counter"><img src="<?php echo e(asset('images/landscape.svg')); ?>"><span class="text"><?php echo e($i); ?>/<?php echo e(count($property->imagelist)); ?></span></div>
                    </div>
                </a>
                    <?php $i++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="back-to-search"><a href="<?php echo e(url()->previous()); ?>"><span class="material-icons">arrow_back</span> Back to results</a> </div>
        <div class="image-zoom">
            <span class="guards-border"><img src="<?php echo e(asset('images/i_gallery.svg')); ?>">Gallery</span>
            <?php if(!empty($property->epc)): ?>
                <span class="modal-trigger" id="epc" data-img="epc-img" data-target="modal2"><img src="<?php echo e(asset('images/i_epc.svg')); ?>">EPC</span>
            <?php endif; ?>
            <a href="#map"><img src="<?php echo e(asset('images/i_map.svg')); ?>">Map</a>
            <?php if(!empty($property->virtual_tour_link)): ?>
                <span class="modal-trigger" id="v-tour" data-img="gallery-img" data-target="modal3"><i class="fa fa-houzz"></i>Virtual Tour</span>
            <?php endif; ?>
            <?php if(!empty($property->floorplan)): ?>
                <span class="modal-trigger" id="floor-map" data-img="floor-map-img" data-target="modal2"><img src="<?php echo e(asset('images/i_floor.svg')); ?>">Plans</span>
            <?php endif; ?>
        </div>
    </div>
    <div id="modal2" class="modal detail-popup">
        <div class="modal-content">
            <img src="<?php echo e($property->floorplan); ?>" class="responsive-img" id="floor-map-img">
            <img src="<?php echo e($property->epc); ?>" class="responsive-img" id="epc-img">
            <div id="gallery-img"></div>
        </div>
    </div>
    <div id="modal3" class="modal v-tour-popup">
        <div class="modal-content">
            <div id="gallery-img"><iframe style="margin: auto; width: 50vw;height: 60vh" src="<?php echo e($property->virtual_tour_link); ?>"></iframe> </div>
        </div>
    </div>

    <div class="h-summary-wrapper">
        <div class="container h-summary detail-grid">
            <div >
                <h1 class="prop-name"><?php echo $property->title; ?><div class="pricecol right"><?php echo $property->price_display; ?></div></h1>
                <div class="h-addr"><?php echo e($property->type); ?> | REF: <?php echo e($property->reference); ?><?php if($property->status!='Available'): ?><span class="new badge red" data-badge-caption=""><?php echo e($property->status); ?></span><?php endif; ?></div>
                <div class="divider"></div>
                <div class="h-spec">
                    <img src="<?php echo e(asset('images/bath.svg')); ?>"><span><?php echo e($property->bathrooms); ?> bath</span>
                    <img src="<?php echo e(asset('images/bed.svg')); ?>"><span><?php echo e($property->beds); ?> Beds</span>
                    <img src="<?php echo e(asset('images/sqft.svg')); ?>"><span><?php echo e($property->area); ?></span>
                </div>
            </div>
            <div class="center">
                <a class="btn-guards modal-trigger" data-target="modal_viewing" href="#modal_viewing">Book viewing</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="detail-grid h-details">
            <div>
                <h3>About The Listing</h3>
                <p><?php echo e($property->summary); ?>

                </p>
            </div>
            <div >
                <?php if(!empty($property->amenities)): ?>
                <div class="row det-am">
                    <h3 class=" col s12">Ameneties</h3>
                    <?php $__currentLoopData = $property->amenities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ammenity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col s6">
                            <img src=<?php echo e(asset("images/i_ac-unit.svg")); ?>><span><?php echo e($ammenity); ?></span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="detail-grid">
            <div >
                <h3>Important Note To Purchasers</h3>
                <p><?php echo e($property->disclaimer_text); ?></p>
            </div>
        </div>
        <h3 class="map-switch"><span id='map-view' onclick="initMap()">Map View </span>/
            <span onclick="switchToStreetView()" id='street-view' class="not-selected"> Street view</span></h3>
        <div class="map-container">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <div id="map"></div>
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
    <script>
        // Initialize and add the map
        var map,h_location;
        let API_KEY = '<?php echo e(GMAPS_KEY); ?>';
        function initMap() {
            $('#street-view').addClass('not-selected');
            $('#map-view').removeClass('not-selected');
            if('<?php echo e($property->latitude); ?>' != ''){
                let h_location = {lat:<?php echo e($property->latitude); ?>,lng:<?php echo e($property->longitude); ?>}
                map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 13, center: h_location});
                // The marker, positioned at Uluru
                let marker = new google.maps.Marker({
                    position: h_location,
                    map: map,
                    icon:'<?php echo e(asset('images/guards_pin.png')); ?>'
                });
            }else{
                $.get('https://maps.googleapis.com/maps/api/geocode/json',
                    {  address:'<?php echo preg_replace( "/\r\n/", ",",strip_tags($property->full_address) ); ?>',
                        key:API_KEY},
                    function (data) {
                        if(data.results && data.results[0].geometry){
                            h_location = data.results[0].geometry.location;
                            map = new google.maps.Map(
                                document.getElementById('map'), {zoom: 13, center: h_location});
                            // The marker, positioned at Uluru
                            var marker = new google.maps.Marker({
                                position: h_location,
                                map: map,
                                icon:'<?php echo e(asset('images/guards_pin.png')); ?>'
                            });
                        }
                    })

            }
        }
        function switchToStreetView() {
            //new google.maps.StreetViewPanorama(container, panoramaOptions);
            $('#map-view').addClass('not-selected');
            $('#street-view').removeClass('not-selected');

            var panorama = new google.maps.StreetViewPanorama(
                document.getElementById('map'), {
                    position: h_location,
                    pov: {
                        heading: 34,
                        pitch: 10
                    }
                });
            map.setStreetView(panorama);
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(GMAPS_KEY); ?>&callback=initMap">
    </script>
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
    </style>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\guardsre-web\resources\views/pages/property.blade.php ENDPATH**/ ?>