    let steps_data = {
        stepName : '',
        nextStepProgress : '',
        prevStepProgress : '',
        nextStepNo : '',
        prevStepNo : 0,
        prevStep : '',
        nextStep : '',
        stepSecond: ''
    };

    let step_count = 1;

    $('.btn_collection_0 button').click(function(){        
        if($(this).val() == 'online') {
            $('.home_steps').addClass('hidden');
            $('.steps').removeClass('hidden');
            $('.progress-container').removeClass('hidden');            
            $('.valuation_nav').removeClass('hidden');
        } else {
            $('.valuation_card_content').addClass('hidden');
            $('.home_valuation_content .progress-container').removeClass('hidden'); 
            $('.all_home_steps, .home_valuation_content, .home_valuation_nav').removeClass('hidden');
        }
    });
    // if(steps_data.prevStep == '') {
    //     $('.prev_button').addClass('hide_button');
    // }
    $('.btn_collection_1 button').click(function(){   
        $(this).parent().find('button').removeClass('is_selected');
        $(this).addClass('is_selected');   
        steps_data.stepName = $(this).val();
        steps_data.nextStepProgress = 11.1111;
        steps_data.prevStepProgress = 0;
        steps_data.nextStepNo = 2;
        steps_data.prevStepNo = 1;
        steps_data.prevStep = 'building';
        steps_data.nextStep = $(this).val();
        steps_data.stepSecond = $(this).val();
        form_data.property_type = $(this).val();
        $('.steps > div').addClass('hidden');
        $(`.${steps_data.stepName}`).removeClass('hidden');  

        $('.filler').css('width', `${steps_data.nextStepProgress}%`);
        $('.state').html(`${steps_data.nextStepNo}/10`);

        $('.prev_button').removeClass('hide_button');  
        step_count++;
        return false;
    })

    $('.btn_collection_2 button').click(function(){
        $(this).parent().find('button').removeClass('is_selected');
        $(this).addClass('is_selected');     
        steps_data.nextStepProgress = 22.2222;
        steps_data.prevStepProgress = 11.1111;
        steps_data.nextStepNo = 3;
        steps_data.prevStepNo = 2;
        steps_data.prevStep = parent;
        steps_data.nextStep = 'rooms';
        form_data.property_sub_type = $(this).val();
        $('.steps > div').addClass('hidden');
        $(`.${steps_data.nextStep}`).removeClass('hidden');  
        
        $('.filler').css('width', `${steps_data.nextStepProgress}%`);
        $('.state').html(`${steps_data.nextStepNo}/10`);

        step_count++;
        return false;   
    })

    $('.btn_collection_3 button').click(function(){
        $(this).parent().find('button').removeClass('is_selected');
        $(this).addClass('is_selected');     
        steps_data.nextStepProgress = 33.3333;
        steps_data.prevStepProgress = 22.2222;
        steps_data.nextStepNo = 4;
        steps_data.prevStepNo = 3;
        steps_data.prevStep = 'rooms';
        steps_data.nextStep = 'postcode'; 
        $('.steps > div').addClass('hidden');
        form_data.bedrooms = $(this).val();
        $(`.${steps_data.nextStep}`).removeClass('hidden');  
        $('.next_button').addClass('disabled');
        $('.filler').css('width', `${steps_data.nextStepProgress}%`);
        $('.state').html(`${steps_data.nextStepNo}/10`);

        step_count++; 
        return false;    
    })


    // $('.address_results li').on('click',function(){
    $(document).on("click", ".address_results li", function(){
        steps_data.nextStepProgress = 44.4444;
        steps_data.prevStepProgress = 55.5555;
        steps_data.nextStepNo = 5;
        steps_data.prevStepNo = 4;
        steps_data.prevStep = 'postcode';
        steps_data.nextStep = 'owner'; 
        $('.steps > div').addClass('hidden');
        $('.owner').removeClass('hidden');  
        $('.next_button').addClass('disabled');
        $('.filler').css('width', `${steps_data.nextStepProgress}%`);
        $('.state').html(`${steps_data.nextStepNo}/10`);
        let full_addr = $(this).data('address');
        let post_code = $(this).data('postcodekey');
        let post_key = post_code.substring(0, 8);
        form_data.full = `${full_addr}, ${post_key}`;
        postcode_lookup(post_code);
        let town = $(this).data('address').split(",");
        let town_result = town[town.length - 1];
        let address_result = town[0];
        form_data.address1 = address_result;
        
        form_data.town = town_result;
        console.log(form_data)
        // $('.prev_button').removeClass('hide_button');  
        step_count++; 
    })

    $('.btn_collection_5 button').click(function() {
        $(this).parent().find('button').removeClass('is_selected');
        $(this).addClass('is_selected');     
        steps_data.nextStepProgress = 55.5555;
        steps_data.prevStepProgress = 44.4444;
        steps_data.nextStepNo = 6;
        steps_data.prevStepNo = 5;
        steps_data.prevStep = 'owner';
        steps_data.nextStep = 'email'; 
        $('.steps > div').addClass('hidden');
        $(`.${steps_data.nextStep}`).removeClass('hidden');  
        $('.next_button').addClass('disabled');
        $('.filler').css('width', `${steps_data.nextStepProgress}%`);
        $('.state').html(`${steps_data.nextStepNo}/10`);

        // $('.next_button').removeClass('hide_button');  
        step_count++; 
        return false;   
    })

    $('.btn_collection_6 button').click(function() {
        $(this).parent().find('button').removeClass('is_selected');
        $(this).addClass('is_selected');     
        steps_data.nextStepProgress = 100.0000;
        steps_data.prevStepProgress = 99.9999;
        steps_data.nextStepNo = 10;
        steps_data.prevStepNo = 9;
        steps_data.prevStep = 'situation';
        steps_data.nextStep = 'final_results'; 
        $('.steps > div').addClass('hidden');
        $('.next_button').addClass('disabled');
        $('.filler').css('width', `${steps_data.nextStepProgress}%`);
        $('.state').html(`${steps_data.nextStepNo}/10`);
        form_data.contact_situation = $(this).val();
        $('.prev_button').removeClass('hide_button');  
        // progress bar for final result
        $('.result-loader').removeClass('hidden');
        $('.valuation_nav').hide();
        getvaluation(form_data);
        // setTimeout(()=> {
        //     $('.result-loader').addClass('hidden');
        //     $('.address').html(form_data.full);
        //     $(`.${steps_data.nextStep}`).removeClass('hidden');
        // }, 3000)
        step_count++; 
        return false;   
    })



    $('.prev_button').click(function(){   
        
        if(step_count == 1) {
            $('.starting_point').removeClass('hidden');
            $('.steps').addClass('hidden');
            $('.home_valuation_content, .valuation_nav, .progress-container').addClass('hidden');
            $('.postcode .input_error, .fourth_step .input_error').remove();
            $('.address_results2 ul').html('');
            $('.address_results2').hide('');
            return false;   
        }
        
        steps_data.nextStepProgress -= 11.1111;
        steps_data.prevStepProgress -= 11.1111;
        steps_data.nextStepNo -= 1;
        steps_data.prevStepNo -= 1;
        let step = steps_data.stepName;
        let step_no = steps_data.prevStepNo;    
        let all_steps = ['','building','building_type','rooms', 'postcode', 'owner', 'email', 'name', 'phone', 'situation', 'final_results']; 
        step_count -=1;
        if(step_count == 8) {
            $('.next_button').removeClass('hidden')
        }
        $('.filler').css('width', `${steps_data.nextStepProgress}%`);
        $('.state').html(`${step_count}/10`);   
        // console.log(all_steps[step_count])
        $('.steps > div').addClass('hidden');
        if(step_count == 2) {
            $(`.${steps_data.stepSecond}`).removeClass('hidden');  
            // console.log('in step 2',all_steps[step_count])
        } else {
            $(`.${all_steps[step_count]}`).removeClass('hidden');  
        }
        // console.log(all_steps[step_count], step_count)
        if(step_count == 1) {
            // $('.prev_button').addClass('hide_button');
        }
        $('.next_button').removeClass('disabled');
        return false;   
    });

    $('.next_button').click(function(){
        if(step_count == 10) {
            return false;   
        }    
    
        // console.log('step: ',step_count)
        steps_data.nextStepProgress += 11.1111;
        steps_data.prevStepProgress += 11.1111;
        steps_data.nextStepNo += 1;
        steps_data.prevStepNo += 1;
        let step = steps_data.stepName;
        let step_no = steps_data.prevStepNo;    
        let all_steps = ['','building','building_type','rooms', 'postcode', 'owner', 'email', 'name', 'phone', 'situation', 'final_results']; 
        $('.filler').css('width', `${steps_data.nextStepProgress}%`);
        $('.state').html(`${step_count+1}/10`);   
        step_count +=1;
        // if(step_count != 1) {
        //     $('.prev_button').removeClass('hide_button');
        // }

        if(form_data.phone == '' && step_count==8) {
            $('.f__name').html($('input[name="first_name"]').val());
            $('.next_button').addClass('disabled');
        }

        if(form_data.first_name == '' || form_data.last_name == '' && step_count==7) {
            $('.next_button').addClass('disabled');
        } else {
            $('.next_button').removeClass('disabled');
        }

        if(step_count == 9) {
            $('.next_button').addClass('hidden');
        }

        if($('.btn_collection_2 button.is_selected').length < 1 && step_count ==2) {
            $('.next_button').addClass('disabled');        
        } else {
            $('.next_button').removeClass('disabled');
        }
        
        if($('.btn_collection_3 button.is_selected').length < 1 && step_count ==3) {
            $('.next_button').addClass('disabled');        
        } else {
            $('.next_button').removeClass('disabled');
        }

        if($('#address').val() == '' && step_count ==4) {
            $('.next_button').addClass('disabled');        
        }

        if($('#step_email').val() == '' && step_count ==6) {
            $('.next_button').addClass('disabled');        
        }

        if($('input[name=first_name]').val() == '' || $('input[name=last_name]').val() == '' && step_count ==7) {
            $('.next_button').addClass('disabled');        
        }

        if($('.btn_collection_5 button.is_selected').length < 1 && step_count ==5) {
            $('.next_button').addClass('disabled');        
        }



        $('.steps > div').addClass('hidden');
        if(step_count == 2) {
            $(`.${steps_data.stepSecond}`).removeClass('hidden');  
            // console.log('in step 2',all_steps[step_count])
        } else {
            $(`.${all_steps[step_count]}`).removeClass('hidden');  
        }   
        return false;  
    });


    $('#step_email').on("change paste keyup", function() {
        // console.log('test input change')
        let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        $('.input_error').remove();
        if(!regex.test($(this).val())) {
            $('#step_email').after(`<div class="input_error">Please enter a valid email address  </div>`);
            $('.next_button').addClass('disabled');
        } else {
            // steps_data.nextStepProgress = 66.6666;
            // steps_data.prevStepProgress = 55.5555;
            steps_data.nextStepNo = 7;
            steps_data.prevStepNo = 6;
            steps_data.prevStep = 'email';
            steps_data.nextStep = 'name';                
            $('.next_button').removeClass('disabled');
            // step_count++; 
            // console.log(step_count)
            return false;
        }
        
    })

    $('input[name="first_name"], input[name="last_name"]').on("change paste keyup", function() {
        // console.log('test input change')
        $('.input_error').remove();
        if($(this).val() == '') {
            $(this).after(`<div class="input_error">Field is required! </div>`);
            $('.next_button').addClass('disabled');
        } else {
            
            steps_data.nextStepNo = 7;
            steps_data.prevStepNo = 6;
            steps_data.prevStep = 'name';
            steps_data.nextStep = 'phone';       
            if($('input[name="first_name"]').val() == '' || $('input[name="last_name"]').val() == '') {
                return false;
            }
            $('.next_button').removeClass('disabled');
            form_data.first_name = 'sarmad';
            form_data.last_name = 'gafoor';
            // step_count++; 
            // console.log(form_data)
            return false;
        }
        // console.log('test this input')
        
    })

    $('#phone').on("change paste keyup", function() {
        // console.log('test input change')
        
        $('.input_error').remove();
        if($(this).val() == '' || $(this).val().length < 10) {
            $('#step_email').after(`<div class="input_error">Please enter a valid phone no.  </div>`);
            $('.next_button').addClass('disabled');
        } else {
            // steps_data.nextStepProgress = 66.6666;
            // steps_data.prevStepProgress = 55.5555;
            steps_data.nextStepNo = 9;
            steps_data.prevStepNo = 8;
            steps_data.prevStep = 'phone';
            steps_data.nextStep = 'situation';     
            form_data.phone = $(this).val();           
            $('.next_button').removeClass('disabled');
            // step_count++; 
            console.log(step_count)
            return false;
        }
        
    })
 

    // tabs
    // Show the first tab and hide the rest
    $('#tabs-nav li:first-child').addClass('active');
    $('.tab-content').hide();
    $('.tab-content:first').show();

    // Click function
    $('#evaluation-tabs-nav li').click(function(){
    $('#evaluation-tabs-nav li').removeClass('active');
    $(this).addClass('active');
    $('.tab-content').hide();
    
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
    });
    // $('#evaluation-query').click(function() {
    //     $('#modal1').modal('open'); 
    //     $('#valuation-form').show();
    //     return false;        
    // });
   