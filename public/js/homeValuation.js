let home_step_data = {
    nextStepNo : 1,
    prevStepNo : 0
};

var example = flatpickr('#flatpickr');

$('#flatpickr').change(function() {
    // $('.home_next_button').removeClass('disabled');
    $('.time').removeClass('hidden')
})

$('.time > button').click(function(){
    $('.all_home_steps > div').addClass('hidden');
    $(this).parent().find('button').removeClass('is_selected');
    $(this).addClass('is_selected');     
    $(`.all_home_steps > div:nth-child(2)`).removeClass('hidden');
    $('.filler').css('width', `${home_step_data.nextStepNo * 12.5}%`);
    home_step_data.nextStepNo += 1;
    home_step_data.prevStepNo += 1;
    $('.home_next_button').addClass('disabled'); 
})

$('.home_collection_2 > button').click(function(){
    $('.all_home_steps > div').addClass('hidden');
    $(this).parent().find('button').removeClass('is_selected');
    $(this).addClass('is_selected');     
    $('.filler').css('width', `${home_step_data.nextStepNo * 12.5}%`);
    home_step_data.nextStepNo += 1;
    home_step_data.prevStepNo += 1;
    $(`.all_home_steps > div:nth-child(${home_step_data.nextStepNo})`).removeClass('hidden');
    $('.home_next_button').addClass('disabled'); 
})

$('.home_collection_3 > button').click(function(){
    $('.all_home_steps > div').addClass('hidden');
    $(this).parent().find('button').removeClass('is_selected');
    $(this).addClass('is_selected');     
    $('.filler').css('width', `${home_step_data.nextStepNo * 12.5}%`);
    home_step_data.nextStepNo += 1;
    home_step_data.prevStepNo += 1;
    $(`.all_home_steps > div:nth-child(${home_step_data.nextStepNo})`).removeClass('hidden');
    $('.home_next_button').addClass('disabled'); 
})

$('.home_btn_collection_6 > button').click(function(){
    $('.all_home_steps > div').addClass('hidden');
    $(this).parent().find('button').removeClass('is_selected');
    $(this).addClass('is_selected');     
    $('.filler').css('width', `100%`);
    $('.home_valuation_nav').addClass('hidden');
    // home_step_data.nextStepNo += 1;
    // home_step_data.prevStepNo += 1;
    // $(`.all_home_steps > div:nth-child(${home_step_data.nextStepNo})`).removeClass('hidden');
    // $('.home_next_button').addClass('disabled'); 
    $('.result-loader').removeClass('hidden');
    setTimeout(function(){
        $('.result-loader').addClass('hidden');
        $('.home_final_step').removeClass('hidden');
    }, 3000);
})

$('.home_next_button').click(function() {
    
    home_step_data.nextStepNo += 1;
    home_step_data.prevStepNo += 1;
    $('.filler').css('width', `${(home_step_data.nextStepNo -1 ) * 12.5}%`);
    console.log(home_step_data.nextStepNo, home_step_data.prevStepNo)
    $('.all_home_steps > div').addClass('hidden');
    $(`.all_home_steps > div:nth-child(${home_step_data.nextStepNo})`).removeClass('hidden');
   
    if($('.home_collection_2 button.is_selected').length < 1 && home_step_data.nextStepNo ==2) {
        $('.home_next_button').addClass('disabled');        
    } else {
        $('.home_next_button').removeClass('disabled');
    }
    if($('.home_collection_3 button.is_selected').length < 1 && home_step_data.nextStepNo ==3) {
        $('.home_next_button').addClass('disabled');        
    } else {
        $('.home_next_button').removeClass('disabled');
    }
    console.log('step no '+home_step_data.nextStepNo)
    if(home_step_data.nextStepNo == 4) {
        if($('.fourth_step .address_results2 ul').html() == '') {
            $('.home_next_button').addClass('disabled');        
        }
    }
    if(home_step_data.nextStepNo == 7) {
        $('.home_next_button').addClass('hidden');
    }
    if(home_step_data.nextStepNo == 5) {
        if($('input[name="home_first_name"]').val() == '' || $('input[name="home_last_name"]').val== '') {
            $('.home_next_button').addClass('disabled');
        }
    }
    if(home_step_data.nextStepNo == 6) {
        $('.f__name').html($('input[name="home_first_name"]').val());
        if($('#home_phone').val() == '' || $('#home_email"]').val== '') {
            $('.home_next_button').addClass('disabled');
        }
    }
    if( $('#address2').val().length === 0 ) {
        $('.home_next_button').addClass('disabled');

    }
})

$('.home_prev_button').click(function() {
    if(home_step_data.prevStepNo == 0) {
        $('.starting_point, .valuation_card_content').removeClass('hidden');
        $('.all_home_steps').addClass('hidden');
        $('.home_valuation_content').addClass('hidden');
        home_step_data.prevStepNo = 0;
        home_step_data.nextStepNo = 1;
        $('.filler').css('width', `0.00%`);
        $('.postcode .input_error, .fourth_step .input_error').remove();
        $('.address_results ul').html('');
        $('.address_results').hide();
        // $( "#valuation_card_new" ).load(window.location.href + " #valuation_card_new" );
        return false;
    }
    home_step_data.nextStepNo -= 1;
    home_step_data.prevStepNo -= 1;
    console.log(home_step_data.nextStepNo, home_step_data.prevStepNo)
    $('.filler').css('width', `${home_step_data.prevStepNo * 12.5}%`);
    $('.all_home_steps > div').addClass('hidden');
    $(`.all_home_steps > div:nth-child(${home_step_data.nextStepNo})`).removeClass('hidden');
    
    if($('.time button.is_selected').length < 1 && home_step_data.nextStepNo ==1) {
        $('.home_next_button').addClass('disabled');        
    } else {
        $('.home_next_button').removeClass('disabled');
    }
    if(home_step_data.nextStepNo != 7) {
        $('.home_next_button').removeClass('hidden');
    }
})

$(document).on("click", ".all_home_steps .address_results2 li", function(){    
    $('.filler').css('width', `${home_step_data.nextStepNo * 12.5}%`);
    home_step_data.nextStepNo += 1;
    home_step_data.prevStepNo += 1;
    $('.all_home_steps > div').addClass('hidden');
    $(`.all_home_steps > div:nth-child(${home_step_data.nextStepNo})`).removeClass('hidden');
    // $('.home_next_button').removeClass('disabled');
})

$('input[name="home_first_name"], input[name="home_last_name"]').on("change paste keyup", function() {
    // console.log('test input change')
    $('.input_error').remove();
    if($(this).val() == '') {
        $(this).after(`<div class="input_error">Field is required! </div>`);
        $('.next_button').addClass('disabled');
    } else {
                      
        if($('input[name="home_first_name"]').val() == '' || $('input[name="home_last_name"]').val() == '') {
            return false;
        }
        $('.home_next_button').removeClass('disabled');       
        // step_count++; 
        // console.log('control is here now')
        return false;
    }
    // console.log('test this input')
    
})

$('#home_email').on("change paste keyup", function() {
    // console.log('test input change')
    let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    $('.input_error').remove();
    if(!regex.test($(this).val())) {
        $('#home_email').after(`<div class="input_error">Please enter a valid email address  </div>`);
        $('.home_next_button').addClass('disabled');
        return false;
    }
    if($('#home_phone').val != '') {
        $('.home_next_button').removeClass('disabled');
    }
})
$('#home_phone').on("change paste keyup", function() {
    // console.log('test input change')
    
    $('.input_error').remove();
    if($(this).val() == '' || $(this).val().length < 10) {
        $('#home_phone').after(`<div class="input_error">Please enter a valid phone no.  </div>`);
        $('.next_button').addClass('disabled');
    } 
    if($('#home_email').val != '') {
        $('.home_next_button').removeClass('disabled');
    }
    
})