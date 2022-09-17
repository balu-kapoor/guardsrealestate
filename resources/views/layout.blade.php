<html lang="en">
<head>
    @yield('page-head')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('app.css')}}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        #whatsapp_call_button{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
    @yield('page-css')
</head>
<body>
@yield('navigation')
<!-- END nav -->

@yield('page-body')
<div id="modal_viewing" class="modal home-modal">

    <a class="modal-close white-text home-modal-close" href="#!"><i class="material-icons">close</i></a>
    <div class="modal-content home-modal-content home-first-modal-content">
        <div class="row adv-search home-page-modal-row">
            <div class="col s12 tab-content">
                <form action="" method="" id="viewing_form">
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="search-wrapper">
                                <div class="input-field">
                                    <input required name="name" type="text" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6">

                            <div class="search-wrapper">
                                <div class="input-field">
                                    <input required name="phone" type="text" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12">

                            <div class="search-wrapper">
                                <div class="input-field">
                                    <input required name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6">

                            <div class="search-wrapper">
                                <div class="input-field">
                                    <input required readonly name="bookingdate" type="text" class="datepicker" placeholder="Date of booking">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6">

                            <div class="search-wrapper">
                                <div class="input-field">
                                    <input required name="property" type="text" placeholder="Property Name">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12">

                            <div class="search-wrapper">
                                <div class="input-field">
                                    <textarea name="message"  placeholder="Message" class="materialize-textarea"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12">

                            <div id="bookviewing-button-submit-container" class="btn-find-wrapper home-modal-wrapper"><button type="submit" class="btn-guards">Book Viewing</button> </div>
                            <div id="bookviewing-success-msg">Thankyou for contacting us. One of our representatives will get back to you shortly.</div>
                            <div id="bookviewing-error-msg">Oops! There was an error with your request. Please try again later.</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<a href="{{ url('valuation/online') }}" class="valuation__pop">Book Valuation</a>
<a href="https://api.whatsapp.com/send?phone=+447936988095" id="whatsapp_call_button" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
{{--END page body--}}

@yield('footer')
{{--END page footer--}}
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{asset('js/plugins/jquery.visible.js')}}"></script>

<!-- Compiled and minified JavaScript -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/velocity/2.0.6/velocity.min.js" integrity="sha256-bmt3BbgVysQlyLNBF++N4sPOw46FOwCU7m5pAYZz9bk=" crossorigin="anonymous"></script>

<script>

var FILTEROPTIONS = {!! json_encode($filterOptions) !!};

    jQuery('.number-ip-field').each(function() {
        var spinner = jQuery(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.num-up'),
            btnDown = spinner.find('.num-down'),
            min = input.attr('min'),
            max = input.attr('max');
        if(!max){
            max = 1000000;
        }

        btnUp.click(function() {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        btnDown.click(function() {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        $(document).ready(function () {


            $(".home-second-modal-content").hide();
            $(".advance-row-button").click(function(){

                $(".home-second-modal-content").toggle();
            })
            $(".tab-one").click(function(){

                $(".home-second-modal-content").hide();
            })
            $(".tab-two").click(function(){

                $(".home-second-modal-content").hide();
            })
            $(".tab-three").click(function(){

                $(".home-second-modal-content").hide();
            })
            $(".modal-close").click(function(){

                $(".home-second-modal-content").hide();
            })
        });

    });

    jQuery(function () {

        $('#bookviewing-success-msg').hide();
        $('#bookviewing-error-msg').hide();
        $('#bookvaluation-success-msg').hide();
        $('#bookvaluation-error-msg').hide();

        jQuery('form#viewing_form').submit(function (e) {
            e.preventDefault();
            $formdata = $('form#viewing_form').serializeArray();
            $('#bookviewing-button-submit-container').hide();
            $.post('{{route('api-bookviewing')}}',$formdata,function (response)
            {
                $('#bookviewing-success-msg').fadeIn();
                $('form#viewing_form').trigger('reset');
            }).fail(function (){
                $('#bookviewing-error-msg').fadeIn();
            }).always(function (){
                $('#bookviewing-button-submit-container').show();
            });
            e.returnValue = false;
        });

        jQuery('form#book-valuation-form-el').submit(function (e) {
            e.preventDefault();
            $formdata = $('form#book-valuation-form-el').serializeArray();
            $('#bookvaluation-button-submit-container').hide();
            $.post('{{route('api-bookvaluation')}}',$formdata,function (response)
            {
                $('#bookvaluation-success-msg').fadeIn();
                $('form#book-valuation-form-el').trigger('reset');
            }).fail(function (){
                $('#bookvaluation-error-msg').fadeIn();
            }).always(function (){
                $('#bookvaluation-button-submit-container').show();
            });
            e.returnValue = false;
        });
    })
</script>
<script src="{{asset('index.js')}}"></script>
@yield('page-js')
</body>
</html>
