    

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
        <div id="valuation_card_new" class="evaluation-tool">
            <h4>Instant Online Valuation</h4>            
            <div class="valuation_card_content">
                <div class="result-loader hidden">
                    <h2>Calculating</h2>
                    <div class="result_progress_bar">
                        <div class="result_blank"></div>
                        <div class="result_filler" style="width: 0.0000%;"></div>
                    </div>
                </div>                
                <div class="progress-container hidden">
                    <div class="progress_text"><span class="label">Progress</span><span class="state">1/10</span></div>
                    <div class="progress_bar">
                        <div class="blank"></div>
                        <div class="filler" style="width: 0.0000%;"></div>
                    </div>
                </div>
                <div class="home_steps starting_point">
                <div class="stat_step">
                        <h2>Property Valuation</h2>
                        <p>Would you like a home valuation or an online valuation?</p>
                        <div class="input_wrapper">
                            <div class="input_container">
                                <div class="default_button option_button btn_collection_0">
                                    <button class="" name="valuation_type" type="button" value="online">Online valuation</button>
                                    <button class="" name="valuation_type" type="button" value="home">Home valuation</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="steps hidden">               
                    <div class="building step" data-progress="1">
                        <h2>What type of building is it?</h2>
                        <h3>Please select your property type</h3>
                        <div class="input_wrapper">
                            <div class="input_container">
                                <div class="default_button option_button btn_collection_1">
                                    <button class="" name="property_type" type="button" value="house">House</button>
                                    <button class="" name="property_type" type="button" value="flat">Flat</button>
                                    <button class="" name="property_type" type="button" value="bungalow">Bungalow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flat step hidden" data-progress="2">
                        <h2>What kind of flat is it?</h2>
                        <div class="input_container">
                            <div class="default_button option_button btn_collection_2">
                                <button class="" name="property_type" type="button" value="purpose_built">Purpose
                                    Build</button>
                                <button class="" name="property_type" type="button" value="converted">Converted</button>
                            </div>
                        </div>
                    </div>
                    <div class="house bungalow hidden step" data-progress="2">
                        <h2>What kind of house is it?</h2>
                        <div class="input_wrapper">
                            <div class="input_container">
                                <div class="default_button option_button btn_collection_2">
                                    <button class="" name="property_sub_type" type="button"
                                        value="detached">Detached</button>
                                    <button class="" name="property_sub_type" type="button"
                                        value="semi_detached">Semi-detached</button>
                                    <button class="" name="property_sub_type" type="button"
                                        value="mid_terrace">Mid-terrace</button>
                                    <button class="" name="property_sub_type" type="button"
                                        value="end_terrace">End-terrace</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms hidden step" data-progress="3">
                        <h2>How many bedrooms does it have?</h2>
                        <div class="input_wrapper">
                            <div class="input_container">
                                <div class="default_button option_button btn_collection_3"><button class="" name="bedrooms"
                                        type="button" value="1">1</button><button class="" name="bedrooms" type="button"
                                        value="2">2</button><button class="" name="bedrooms" type="button"
                                        value="3">3</button><button class="" name="bedrooms" type="button"
                                        value="4">4</button><button class="" name="bedrooms" type="button"
                                        value="5">5</button><button class="" name="bedrooms" type="button"
                                        value="6">6</button><button class="" name="bedrooms" type="button"
                                        value="7">7</button><button class="" name="bedrooms" type="button"
                                        value="8">8</button><button class="" name="bedrooms" type="button"
                                        value="9">9</button><button class="" name="bedrooms" type="button"
                                        value="10">10</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="postcode hidden step">
                        <h2>Please type your postcode below</h2>
                        <input type="text" name="address" id="address" placeholder="Enter your postcode"
                            autocomplete="nope">
                        <div class="address_results" style="display: none">
                            <ul></ul>
                        </div>
                    </div>
                    <div class="owner hidden step">
                        <h2>Are you the legal owner of the property?</h2>
                        <div class="input_wrapper">
                            <div class="input_container">
                                <div class="default_button option_button btn_collection_5">
                                    <button class="" name="legal_owner" type="button" value="yes">Yes</button>
                                    <button class="" name="legal_owner" type="button" value="no">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="email hidden step">
                        <h2>What’s the best email address for you?</h2>
                        <div class="input_wrapper">
                            <div class="input_container">
                                <div class="default_input">
                                    <input id="step_email" type="email" name="email" placeholder="Email" class="">
                                </div>
                                <div class=""><label><input id="optout_to_marketing" type="checkbox"
                                            name="optout_to_marketing" value="true" checked=""><i class="helper"></i>We'd
                                        like to follow up with
                                        complimentary valuation information such as market trend reports, if you don't wish
                                        to receive these emails please tick this box.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="name hidden step">
                        <h2>Excellent! I'm nearly there.</h2>
                        <h3>Can you please tell me your first and last name?</h3>
                        <div class="input_wrapper">
                            <div class="input_container">
                                <div class="default_select">
                                    <select class="title">
                                        <option value="" disabled="">Title</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Mx">Mx</option>
                                        <option value="Ms">Ms</option>
                                    </select>
                                </div>
                                <div class="default_input"><input type="text" name="first_name" placeholder="First name"
                                        class="" value=""></div>
                                <div class="default_input"><input type="text" name="last_name" placeholder="Last name"
                                        class="" value=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="phone hidden step">
                        <h2>What's the best phone number for you, <span class="f__name"></span>?</h2>
                        <div class="input_wrapper">
                            <div class="input_container">
                                <div class="default_input"><input id="phone" type="number" name="phone"
                                        placeholder="Phone number" class="" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="situation hidden step">
                        <h2>What is your situation?</h2>
                        <div class="input_wrapper">
                            <div class="input_container">
                                <div class="default_button option_button btn_collection_6"><button class=""
                                        name="contact_situation" type="button" value="planning_to_sell">Planning to
                                        sell</button><button class="" name="contact_situation" type="button"
                                        value="planning_to_let">Planning to let</button><button class=""
                                        name="contact_situation" type="button" value="just_curious">Just
                                        curious</button><button class="btn_override_2" name="contact_situation"
                                        type="button" value="ready_to_sell">Ready to sell</button><button
                                        class="btn_override_2" name="contact_situation" type="button"
                                        value="ready_to_let">Ready to let</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="final_results step hidden">
                        <div class="input_wrapper">
                            <div class="input_container">
                                <div class="results_wrapper actual_result">
                                    <h2>Your estimated valuation</h2>
                                    <h3 class="address"></h3>                                
                                        <div class="estimates_content">
                                            <div class="evaluation-tabs">
                                                <ul id="evaluation-tabs-nav">
                                                    <li><a href="#tab1">Sale Price</a></li>
                                                    <li><a href="#tab2">Rental Price</a></li>
                                                </ul>
                                                <div id="evaluation-tabs-content">
                                                    <div id="tab1" class="tab-content">
                                                        
                                                    </div>
                                                    <div id="tab2" class="tab-content">
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="copy">These values are generated using the data on your area to estimate the value of your property and are subject to market change.</p>
                                        <h4>We will call you back, but if you want to contact us click below</h4>
                                        <p class="button button_new button_centered ripplelink"><a id="evaluation-query"
                                                href="<?php echo e(url('/valuation/online')); ?>">Schedule
                                                your home valuation</a></p>                              
                                </div>
                                <div class="suggested_result hidden">
                                    <h3>Your property is unique</h3>
                                    <p>We can fast-track you for a free in-person valuation to give you an accurate assessment of your property’s value, including:</p>
                                    <ul class="ticklist">
                                        <li>An in-person assessment of your home</li>
                                        <li>Chance to discuss your options with a local expert</li>
                                        <li>A detailed report on your area</li></ul><p class="button button_new button_centered ripplelink">
                                            <a href="<?php echo e(url('/valuation/online')); ?>">Schedule your home valuation</a>
                                        </p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="valuation_nav hidden">
                    <div class="default_button nav_button prev_button">
                        <button type="button" data-progress="0.0000%">Back</button>
                    </div>
                    <div class="default_button nav_button next_button disabled">
                        <button type="button">Next</button>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('includes.home-valuation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button">×</span>
                <h5>Online Valuation Disclaimer</h5>
                <hr>
                <p>Prices shown here are subject to market change and we do not guarantee that, it may vary based on the geographical location and property type. For more accurate valuation of your property, you may contact us directly or schedule a Home Valuation by clicking below.</p>
                <hr>
                <div class="modal__footer">
                    <!-- <a class="close-this" href="#">Close</a> -->
                    <!-- <a class="confirm-button" href="#">Confirm</a> -->
                </div>
            </div>
        </div>
    </main>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page-js'); ?>
    <script>
    const api_url = "<?php echo e(url('/')); ?>/getvaluationAddress";
    let form_data = {
        address1: "2 Kenilworth Road",
        address2: "",
        bedrooms: "",
        contact_situation: "planning_to_sell",
        email: "tester@gmail.com",
        first_name: "",
        full: "2 Kenilworth Road, Scunthorpe, DN16 1EX",
        is_covered_by_foxtons: "0",
        is_covered_by_office: "0",
        last_name: "",
        legal_owner: "no",
        optout_to_marketing: false,
        phone: "",
        postcode: "DN16 1EX",
        property_sub_type: "mid_terrace",
        property_type: "house",
        title: "Mr",
        town: "Scunthorpe",
        valuation_method: "online",
        valuation_type: "both"
    };
    let form_data2 = {
        address1: "2 Kenilworth Road",
        address2: "",
        bedrooms: "",
        contact_situation: "planning_to_sell",
        email: "tester@gmail.com",
        first_name: "",
        full: "2 Kenilworth Road, Scunthorpe, DN16 1EX",
        // is_covered_by_foxtons: "0",
        is_covered_by_office: "0",
        last_name: "",
        legal_owner: "no",
        optout_to_marketing: false,
        phone: "",
        postcode: "DN16 1EX",
        property_sub_type: "mid_terrace",
        property_type: "house",
        title: "Mr",
        town: "Scunthorpe",
        valuation_method: "online",
        valuation_type: "both"
    };
    //  const api_url = "<?php echo e(url('/')); ?>/calculateValuation";
    async function getaddr(url, addr) {
        // document.getElementById("address").innerHTML = `<div class="loader"></div> `;

        // Storing response
        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        const response = await fetch(api_url, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                "X-CSRF-Token": csrfToken
            },
            body: JSON.stringify({
                address: addr
            })
        });

        // Storing data in form of JSON
        var data = await response.json();
        //    console.log(data)
        let ul = '';

        if (data.status_code == 200) {
            for (let r of data.data) {
                // console.log(r.address)
                ul += `<li data-postcodekey="${r.postcode_key}" data-address="${r.address}">${r.address}</li>`;
                $('.input_error').remove();
                $('.address_results, .address_results2').show();
                $('.address_results ul, .address_results2 ul').html(ul);
            }
        } else {
            $('address_results, .address_results2').hide();
            $('.address_results ul, .address_results2 ul').html('');
            $('.input_error').remove();
            $('#address, #address2').after(`<div class="input_error">We do not recognise that as a postcode in England</div>`);
        }
        if (data.status_code == 404) {
            $('.address_results, .address_results2').hide();
            $('.address_results ul, .address_results2 ul').html('');
            $('.input_error').remove();
            $('#address, #address2').after(`<div class="input_error">We do not recognise that as a postcode in England</div>`);
        }

    }
    async function postcode_lookup(post_code) {
        const api_url = "<?php echo e(url('/')); ?>/postcodeLookup";
        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        const response = await fetch(api_url, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                "X-CSRF-Token": csrfToken
            },
            body: JSON.stringify({
                post_code: post_code
            })
        });

        // Storing data in form of JSON
        var data = await response.json();
        form_data.postcode = data.data.postcode;

        // console.log(data);
    }

    async function getvaluation(form_data, form_data2) {
        // console.log(form_data2)
        // document.getElementById("address").innerHTML = `<div class="loader"></div> `;
        const api_url = "<?php echo e(url('/')); ?>/calculateValuation";

        // Storing response
        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        
        // console.log('Form data new: '+JSON.stringify(form_data))
        const modal = document.querySelector(".custom-modal");
        const response = await fetch(api_url, {
            method: 'POST',
            mode: 'cors',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                "X-CSRF-Token": csrfToken
            },
            body: JSON.stringify(form_data)
        });

        // Storing data in form of JSON
        var data = await response.json();
        // console.log("data: "+JSON.stringify(data));
        // console.log(data.hasOwnProperty('average_price_estimates'))
        if(data.hasOwnProperty('average_price_estimates')) {
            $('.result-loader').addClass('hidden');
            $('.address').html(form_data.full);
            $(`.${steps_data.nextStep}`).removeClass('hidden');
        }
        if(data.average_price_estimates == null) {
            $('.actual_result').addClass('hidden')
            $('.suggested_result').removeClass('hidden')
        }
        modal.classList.toggle("show-modal");
        $.ajax({
        type:'POST',
        url:'/bookvaluation',
        data:{form_data2},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
            console.log(data);
        }
        });
        $('#tab1').html(` <object data="<?php echo e(url('/images/valuation_graph.svg?min_range=${numberWithCommas(data.average_price_estimates.estimate_value_lower)}&max_range=${numberWithCommas(data.average_price_estimates.estimate_value_upper)}')); ?>" type="image/svg+xml"> <img src="defualt.jpg" /></object>`)
        $('#tab2').html(` <object data="<?php echo e(url('/images/valuation_graph.svg?min_range=${numberWithCommas(data.average_price_estimates.rental_estimate_value_lower)}&max_range=${numberWithCommas(data.average_price_estimates.rental_estimate_value_upper)}')); ?>" type="image/svg+xml"> <img src="defualt.jpg" /></object>`)
    }
    function numberWithCommas(x) {
        return x.toLocaleString("en-US")
        //toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
    }
    $('#address, #address2').on('input', function(e) {
        let addr = $(this).val();
        // console.log(addr)
        getaddr(api_url, addr)

    });

    $('.close-button').click(function(){
            // modal.classList.toggle("show-modal");
            $('.custom-modal').removeClass('show-modal');
            return false;
    })
    $('.modal-trigger').click(() => {
        $('#modal1').find('#lettings-form').css('display', 'block');
    });
    </script>
    <script type="text/javascript" src="<?php echo e(asset('/js/valuation.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/js/homeValuation.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('footer'); ?>
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
    #address, #address2 {
        position: relative;
        width: 100%;
        border: none;
        padding: 0 10px;
        margin: 0;
        height: 50px;
        font-size: 17px;
        border-radius: 2px;
        box-sizing: border-box;
        outline: inherit;
        -webkit-appearance: none;
        background: #fff;
    }

    .input_error {
        position: relative;
        background-color: #dc2008;
        padding: 2px;
        padding-left: 12px;
        border-radius: 2px;
        margin: 4px 0 0px 0;
        color: white;
        font-size: 12px;
        text-align: left;
        line-height: 20px;
        width: 100%
    }

    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .step h2 {
        font-size: 25pt;
    }

    .step h3 {
        color: #dfab25  ;
        font-weight: normal;
        margin-bottom: 1rem;
    }

    .input_wrapper {
        text-align: center;
        width: 100%;
    }

    .building .input_container button {
        width: calc(100% / 3.3);
    }

    .option_button .is_selected {
        color: #fff;
        background-color: #5a4717;
    }

    .name input[type="text"],
    .default_input input {
        position: relative;
        width: 100%;
        border: none !important;
        padding: 0 10px;
        margin: 0;
        height: 50px !important;
        font-size: 20px;
        border-radius: 2px !important;
        box-sizing: border-box;
        outline: inherit;
        background: #fff !important;
        margin-bottom: 5px;
        -webkit-appearance: none;
    }

    .step svg.caret {
        z-index: 99 !important;
        fill: #000 !important;
    }

    .step .select-dropdown.dropdown-trigger {
        color: #000;
    }

    div#valuation_card_new h3 {
        font-size: 10pt;
    }

    div#valuation_card_new h2 {
        font-size: 17pt;
        margin-top: 0px;
    }

    .default_button.option_button.btn_collection_6 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }

    .results_wrapper h4 {
        font-size: 11px;
    }

    .result-loader {
        background: linear-gradient(to bottom, #152430, #152430);
        height: 100%;
        width: 100%;
        position: absolute;
        z-index: 999;
        top: 0;
        left: 0;
        display: flex;
    }
    .tabs {
        display: flex;
        flex-direction: row;
    }
    .home_steps.starting_point {
        text-align: center;
        padding: 6rem;
    }
    .suggested_result {
        background: #fff;
        padding: 10px 30px;
        margin: 7% auto 5%;
        border-radius: 5px;
        color: #000;
    }
    input#optout_to_marketing {
        margin: 0 5px;
    }
    [type=checkbox]:not(:checked), [type=checkbox]:checked {
        position: relative;
        opacity: 1;
        pointer-events: all;
    }
    </style>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\guardsre-web\resources\views/pages/valuation-tool.blade.php ENDPATH**/ ?>