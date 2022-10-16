<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<div class="valuation_card_content home_valuation_content hidden">
            <div class="result-loader hidden">
                <h2>Sending Your Request</h2>
                <div class="result_progress_bar">
                    <div class="result_blank"></div>
                    <div class="result_filler" style="width: 0.0000%;"></div>
                </div>
            </div>
            
            <div class="progress-container">
                <div class="progress_text"><span class="label">Progress</span></div>
                <div class="progress_bar">
                    <div class="blank"></div>
                    <div class="filler" style="width: 0.0000%;"></div>
                </div>
            </div>
            <div class="all_home_steps">               
                <div class="first_step step" data-progress="1">
                    <h2>Home Valuation</h2>
                    <p>Choose your valuation date</p>
                    <div class="input_wrapper">
                        <div class="input_container">
                            <div class="default_button option_button home_collection_1">
                                <input name="date" id="flatpickr" placeholder="Select date">
                                <div class="default_button option_button time hidden">
                                    <button class="is_disabled" name="time" type="button" value="9am-12pm" disabled="disabled">9am to 12pm</button>
                                    <button class="" name="time" type="button" value="12pm-2pm">12pm to 2pm</button>
                                    <button class="" name="time" type="button" value="4pm-7pm">4pm to 7pm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="second_step step hidden" data-progress="1">
                    <h2>Are you the legal owner of the property?</h2>
                    <div class="default_button option_button home_collection_2">
                        <button class="" name="legal_owner" type="button" value="yes">Yes</button>
                        <button class="" name="legal_owner" type="button" value="no">No</button>
                    </div>
                </div>
                <div class="third_step step hidden" data-progress="1">
                    <h2>Are you looking for a sales or rental valuation?</h2>
                    <div class="default_button option_button home_collection_3">
                        <button class="" name="valuation_type" type="button" value="seller">Sales</button>
                        <button class="" name="valuation_type" type="button" value="landlord">Rental</button>
                        <button class="" name="valuation_type" type="button" value="both">Both</button>
                    </div>
                </div> 
                <div class="fourth_step step hidden" data-progress="1">
                    <h2>Please type your postcode below</h2>
                    <input type="text" name="address" id="address2" placeholder="Enter your postcode"
                        autocomplete="nope">
                    <div class="address_results2" style="display: none">
                        <ul></ul>
                    </div>
                </div> 
                <div class="fifth_step hidden step">
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
                            <div class="default_input"><input type="text" name="home_first_name" placeholder="First name"
                                    class="" value=""></div>
                            <div class="default_input"><input type="text" name="home_last_name" placeholder="Last name"
                                    class="" value=""></div>
                        </div>
                    </div>
                </div>  
                <div class="sixth_step hidden step">
                    <h2>Lastly, what are the best contact details for you, <span class="f__name"></span>?</h2>
                    <div class="input_wrapper">
                        <div class="input_container">
                            <div class="default_input">
                                <input id="home_phone" type="number" name="phone"
                                    placeholder="Phone number" class="" value="">
                                <input id="home_email" type="email" name="email" placeholder="Email" class="">

                            </div>
                        </div>
                    </div>
                </div>  
                <div class="seventh_step hidden step">
                    <h2>What is your situation?</h2>
                    <div class="input_wrapper">
                        <div class="input_container">
                            <div class="default_button option_button home_btn_collection_6"><button class=""
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
                <div class="home_final_step hidden step">
                    <div class="input_wrapper">
                        <div class="input_container">
                            <div class="results_wrapper false"><div>
                                <h2>Thank you</h2>
                                <h4 class="ylw">Your request has been sent to our team and we will contact you shortly to confirm your appointment and explain the process in more detail.</h4>
                                <p class="ylw">For more information about what to expect from a home visit valuation, and how we are conducting them safely, <a href="<?php echo e(url('contact-us')); ?>" target="_blank" style="color: rgb(255, 255, 255);">contact here</a>.</p></div></div></div></div></div>           
            </div>
            <div class="home_valuation_nav valuation_nav hidden">
                <div class="default_button nav_button home_prev_button">
                    <button type="button" data-progress="0.0000%">Back</button>
                </div>
                <div class="default_button nav_button home_next_button disabled">
                    <button type="button">Next</button>
                </div>
            </div>
        </div>
<style>
    .flatpickr-monthDropdown-months {
        display: inline-block;
    }
    input#flatpickr, input.flatpickr-input.flatpickr-mobile {
        border: 1px solid #fff;
        color: #000;
        background: #fff;
    }
    button.is_disabled {
        background: #f0f0f0;
        pointer-events: none;
    }
    .fifth_step input[type="text"], .default_input input {
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
    .home_btn_collection_6 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }
    .all_home_steps {
        padding: 2rem;
    }   
    @media  only screen and (max-width: 600px) {
        .default_button button {
            width: 100%;
            margin-top: 6px;
        }
        .home_btn_collection_6 {
            grid-template-columns: 1fr !important;
            gap: 6px !important;
        }
    }
</style><?php /**PATH C:\xampp\htdocs\guardsre-web\resources\views/includes/home-valuation.blade.php ENDPATH**/ ?>