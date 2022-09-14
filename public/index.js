/**HOME PAGE **/
var win = $(window);
var allMods = $(".slide-in-box");

// Already visible modules
allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
        el.addClass("already-visible");
    }
});

win.scroll(function(event) {

    allMods.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("come-in");
        }
    });

});
var allModsLeft = $(".slide-in-left-box");// Already visible modules
allModsLeft.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
        el.addClass("already-visible");
    }
});win.scroll(function(event) {allModsLeft.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
        el.addClass("come-in-left-x");
    }
});});
$('#scroll-to').click(function(e){
    var jump = $(this).attr('href');
    var new_position = $(jump).offset();
    $('html, body').stop().animate({ scrollTop: new_position.top -83 }, 500);
    e.preventDefault();
});
/** COMMON**/
$("#hd-logo").mouseenter(function(e) {
    $("#hd-logo").fadeOut(500, function() {
        this.className="";
        $("#hd-logo").attr("src",'/images/full_logo.png');
    }).fadeIn(500);
    //this.src = 'images/horseicon.svg';
});
$("#hd-logo").mouseleave(function(e) {
    $("#hd-logo").fadeOut(500, function() {
        this.className="horse";
        $("#hd-logo").attr("src",'/images/horseicon.svg');
    }).fadeIn(500);
});
var modal_instances;
let options ={
    'preventScrolling':true
}
document.addEventListener('DOMContentLoaded', function() {
    let sidenav_options = {
        inDuration:1400,
        outDuration:1200,
        onOpenStart:function(elem){
            $(elem).find('li').each(function(m,a){
                $(a).addClass('animate__animated animate__slideInLeft');
            })
        },
        onOpenEnd:function(elem){
            $(elem).find('li').each(function(m,a){
                $(a).removeClass('animate__animated animate__slideInLeft');
            })
        },
        onCloseStart:function(elem){
            $(elem).find('li').each(function(m,a){
                $(a).addClass('animate__animated animate__slideOutLeft');
            })
        },
        onCloseEnd:function(elem){
            $(elem).find('li').each(function(m,a){
                $(a).removeClass('animate__animated animate__slideOutLeft');
            })
        },
    }
    let search_options = {
        inDuration:1000,
        outDuration:1000,
    }
    var elems = document.querySelectorAll('.sidenav.menu');
    var sidenav_instances = M.Sidenav.init(elems, sidenav_options);
     elems = document.querySelectorAll('.sidenav.adv-search');
    var search_instances = M.Sidenav.init(elems, search_options);
    // options.fullWidth = true;
    let car_options ={}
     elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, car_options);
     elems = document.querySelectorAll('.modal');
    modal_instances = M.Modal.init(elems, options);
     elems = document.querySelectorAll('select:not(.flatpickr-monthDropdown-months):not(#repair-form select)');
    var select_instances = M.FormSelect.init(elems, options);
     elems = document.querySelectorAll('.tabs');
    var tab_instance = M.Tabs.init(elems, options);
    let datePicker_options = {
        defaultDate:new Date()
    }
     elems = document.querySelectorAll('.datepicker');
    var date_instances = M.Datepicker.init(elems, datePicker_options);
    let postcode_list ={};
    for(let i=0; i<FILTEROPTIONS.rent.postcode_list.length; i++){
        postcode_list[FILTEROPTIONS.rent.postcode_list[i]] = null;
    }

    let autocomplete_rent_options = {
        data:postcode_list
    }
     elems = document.querySelectorAll('.autocomplete.rent');
    var autocomplete_instances = M.Autocomplete.init(elems, autocomplete_rent_options);
    postcode_list ={};
    for(let i=0; i<FILTEROPTIONS.buy.postcode_list.length; i++){
        postcode_list[FILTEROPTIONS.buy.postcode_list[i]] = null;
    }
    let autocomplete_buy_options = {
        data:postcode_list
    }
    elems = document.querySelectorAll('.autocomplete.buy');
    var autocomplete_instances = M.Autocomplete.init(elems, autocomplete_buy_options);

    elems = document.querySelectorAll('.collapsible');
    var collapse_instances = M.Collapsible.init(elems, options);
});
function setType(onId,ofId){
    let onBtn = $('#' + onId);
    let ofBtn = $('#' + ofId);
    let onForm = $('#form_' + onId);
    let ofForm = $('#form_' + ofId);
    ofBtn.removeClass('selected');
    onBtn.addClass('selected');
    onForm.removeClass('hide');
    ofForm.addClass('hide');
}
$('.moveCarousel.next').click(function(e){
    e.preventDefault();
    e.stopPropagation();
    $('.carousel').carousel('next');
});
$('.moveCarousel.prev').click(function(e){
    e.preventDefault();
    e.stopPropagation();
    $('.carousel').carousel('prev');
});
$('#floor-map, #epc').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('#floor-map-img, #epc-img').hide()
    $('#'+$(this).attr('data-img')).show()
    modal_instances[0].open()
    //$('#modal1').open();
});
