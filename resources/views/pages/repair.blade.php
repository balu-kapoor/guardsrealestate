@extends('layout')

@section('page-head')
    @include('includes.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <!-- Latest compiled and minified CSS -->        
@endsection

@section('page-css')
    {{--    load page css here--}}
@endsection

@section('navigation')
    @include('includes.navigation')
@endsection

@section('page-body')
    <main>

        <div class="main-heading-row">
            <!-- <img src="{{asset('images/serviceNew.jpg')}}" class="responsive-img "> -->
            <div class="header-row-heading">
                <div class="header-row">
                    <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">Report a repair</h1>
                </div>
            </div>
        </div>
        <h6 class="steps"><span>1</span>What is the problem?</h6>
        <form id="repair-form" action="{{ route('send-repair-issue') }}" method="post">
            @csrf
            <div class="all_steps first-step">
                <div class="repair">
                    <div class="bread"></div>
                    <div id="repair-and-maintenance"> 
                        <div class="loader"></div>                              
                    </div>
                </div>
                <div class="form">@include('includes.forms')</div>
                <div class="go-to-next">
                    <button class="go-next" disabled><i class="fa fa-level-down" aria-hidden="true"></i>Next</button><span>Click on a picture to continue</span>
                </div>
            </div>
            <h6 class="steps"><span>2</span>Add Photos</h6>
            <div class="all_steps second-step" style="display: none;">
                <p>Please add up to 10 photos, video or audio files (max: 30mb each) to help explain the problem.</p>
                <label for="file-upload" id="custom-file-upload" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i>  Click to upload
                    <input id="files" type="file" name="files[]" multiple="multiple" class="multi with-preview" accept="gif|jpg|png|jpeg|mov|avi|mp4" maxlength="10"/>
                </label>
                <div class="bar">
                <button class="back" data-class="first-step"><i class="fa fa-level-up" aria-hidden="true"></i>Back</button><button class="next" data-class="third-step"><i class="fa fa-level-down" aria-hidden="true"></i>Next</button>
                </div>
            </div>
            <h6 class="steps"><span>3</span>Address details</h6>
            <div class="all_steps third-step" style="display: none;">
                <label for="address">Address</label>
                <input type="text" name="address" id="address">
                <div class="bar">
                <button class="back" data-class="second-step"><i class="fa fa-level-up" aria-hidden="true"></i>Back</button><button class="next" data-class="fourth-step"><i class="fa fa-level-down" aria-hidden="true"></i>Next</button>
                </div>
            </div>
            <h6 class="steps"><span>4</span>Your contact details</h6>
            <div class="all_steps fourth-step" style="display: none;">
                @include('includes.contact-form')
                    <div class="bar">
                        <button class="back" data-class="third-step"><i class="fa fa-level-up" aria-hidden="true"></i>Back</button><button class="next" data-class="fifth-step"><i class="fa fa-level-down" aria-hidden="true"></i>Next</button>
                    </div>
                </div>
            <h6 class="steps"><span>5</span>Confirm and send</h6>
            <div class="all_steps fifth-step" style="display: none;">
                @include('includes.confirm-form')
                <div class="bar">
                    <button class="back" data-class="fourth-step"><i class="fa fa-level-up" aria-hidden="true"></i>Back</button><button type="submit" class="next" data-class="final-step"><i class="fa fa-level-down" aria-hidden="true"></i>Submit Issue</button>
                </div>
            </div>
        </form>      
<!-- Modal -->
@include('includes.confirm-modal')
        </main>
@endsection

@section('page-js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('js/plugins/multi.upload.js') }}"></script>
    <script>
        const api_url = "{{ url('/') }}/getRepairData";
        const sub_cat = "{{ url('/') }}/getSubCategory";
        // Defining async function to get all categories
        async function getapi(url) {
            
            // Storing response
            const response = await fetch(url);
            
            // Storing data in form of JSON
            var data = await response.json();
            // console.log(data);
           
            show(data);
        }
        // get subcategories
        async function getsubcat(url, id) {
            document.getElementById("repair-and-maintenance").innerHTML = `<div class="loader"></div> `;
            
            // Storing response
            const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
            const response = await fetch(sub_cat, {
                                method: 'POST',
                                headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                "X-CSRF-Token": csrfToken
                                },
                                body: JSON.stringify({cat: id})
                            });
            
            // Storing data in form of JSON
            var data = await response.json();
           console.log(data)
           console.log(data.Fault.ParentId)
           if(data.Fault.Depth > 0) {
            let crumb_name = data.Fault.ParentFaultTitle;
            if(crumb_name == 'Property Home') {
                crumb_name = 'Start';
            }
            $('.bread').html(`<a class="go-back" href="${data.Fault.ParentId}"><i class="fa fa-level-up" aria-hidden="true"></i>${crumb_name}</a> / <span>${data.Fault.Title}</span>`);
           } else {
            $('.bread').html('');
           }
            show(data);
        }
        // Calling that async function
        getapi(api_url);
        // Function to define innerHTML for HTML table
        function show(data) {
            let tab = '';
            
            // Loop to access all rows 
            for (let r of data.ChildFaults) {
            //    console.log(r)
            if(r.Image) {
                tab += `<a class="repair-item" href="${r.Id}">
                    <div><img src="${r.Image}" alt=""></div>
                    <p>${r.Title}</p>
                    </a>`;
            } else {
                tab+=`<a class="last-item" data-notes-class='${r.NotesClasses}'   href="#" data-id="${r.Id}">
                            <p>${r.Title}</p>
                        </a>`;
            }
               
            }
            // Setting innerHTML as tab variable
            document.getElementById("repair-and-maintenance").innerHTML = tab;
        }

        $(document).on('click', '.repair-item',function() {
            let id = $(this).attr('href');
            getsubcat(sub_cat,id);
            return false;
        })

        $(document).on('click', '.go-back',function() {
            $('#fault-notes').hide();
            let id = $(this).attr('href');            
            $('.next button').attr('disabled', 'disabled');
            getsubcat(sub_cat,id);
            return false;
        })

        $(document).on('click', '.go-next',function() {
            let check = $('#InputFaultNotes').val();
            $('#fault-notes > div:visible').find('.validate').each(function() {
                // $(this).find('.validate')
                if($(this).val() == '') {
                    // console.log($(this).attr('id'))
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                    $('.first-step').slideUp('medium');
                    $('.second-step').slideDown('medium');
                }
            });
            
            return false;
        })

        $(document).on('click', '.last-item',function() {
            let id = $(this).attr('data-id');    
            $('.last-item').each(function() {
                $(this).removeClass('active');
            });
            $(this).addClass('active'); 
            let notes_classes = $(this).attr('data-notes-class');
            let json_classes = JSON.parse(notes_classes);
            let form_class = null;     
            for (var key in json_classes) {
                if (json_classes[key] == true) {
                    form_class = key;
                }
            }    
            // console.log('.fault-notes-class-'+key.toLowerCase())

            $('#fault-notes > div').not(':last').hide();
            $('#fault-notes').show();
            $('#fault-notes').find('.fault-notes-class-'+form_class.toLowerCase()).show();
            $('.go-to-next button').removeAttr('disabled');                  
            return false;
        })

        $('.back').click(function() {
            let step_class = $(this).attr('data-class');
            console.log('check this')
            $('.all_steps').slideUp('medium');            
            $('.'+step_class).slideDown('medium');
            return false;
        })

        $('.next').click(function() {
            let step_class = $(this).attr('data-class');           
            if(step_class == 'third-step') {
                var file=document.getElementsByName('files[]');
                // console.log(file.length)
                if(file.length <2) {
                    $('#custom-file-upload').addClass('error');                    
                } else {
                    $('#custom-file-upload').removeClass('error');
                    $('.all_steps').slideUp('medium');            
                    $('.'+step_class).slideDown('medium');   
                    return false;
                }
            }        
            if(step_class == 'fourth-step') {
                let add = $('#address').val();
                if(add == '') {                   
                    $('#address').addClass('error');                   
                } else {                    
                    $('.all_steps').slideUp('medium');            
                    $('.'+step_class).slideDown('medium'); 
                    $('#address').removeClass('error');                    
                }
            }   
            if(step_class == 'fifth-step') {
                $('.input-tenant-details').find('.validate').each(function() {
                    // $(this).find('.validate')
                    let phone = $('#inputContactNo').val();
                    let email = $('#inputEmail').val();
                    if($(this).val() == '') {                                            
                        $(this).addClass('error');     
                    } else {
                        $(this).removeClass('error');                        
                    }
                    
                    // console.log($(this).attr('name'))
                    if($(this).attr('name') == 'ContactNo' && !validatePhone(phone)) {
                        $(this).addClass('error');
                    }

                    if($(this).attr('name') == 'EmailAddress' && !validateEmail(email)) {
                        $(this).addClass('error');
                    }
                    
                });
                if($('.input-tenant-details').find('.error').length == 0) {
                    $('.all_steps').slideUp('medium');            
                    $('.'+step_class).slideDown('medium');   
                    return false;
                }
            }        
               
            if(step_class == 'final-step') {
                // console.log($('.fifth-step').find('input[type=radio]').length)
                $('.fifth-step').find('input.validate').each(function() {                   
                    let name = $(this).prop('name');
                        if($(`input[name=${name}]:checked`).length == 0)
                        {                            
                            $(this).addClass('error');                                                  
                        }
                        else
                        {
                            $(this).removeClass('error');
                        }  
                    });
                    if($('.fifth-step').find('input.error').length == 0) {
                        // console.log('time to submit')
                        toggleModal()
                    }                                                    

            }   
            // $(this).animate({ scrollTop: 120 }, "fast");         
            return false;
        })

        $('#TenantPresence .radio-nice label').click(function(){
            let checked = $(this).prev().val();
            // console.log('check label click event')
            if(checked == 'true') {
                $('.hide-if-tenant-present').hide();
            } else {
                $('.hide-if-tenant-present').show();
            }
        })
       
        // modal
        const modal = document.querySelector(".custom-modal");
        const trigger = document.querySelector(".trigger");
        const closeButton = document.querySelector(".close-button");

        function toggleModal() {
            modal.classList.toggle("show-modal");
        }

        function windowOnClick(event) {
            if (event.target === modal) {
                toggleModal();
            }
        }

        // trigger.addEventListener("click", toggleModal);
        closeButton.addEventListener("click", toggleModal);
        window.addEventListener("click", windowOnClick);
        $('.close-this').click(function(){
            toggleModal();
            return false;
        })
        
        $('.confirm-button').click(function(){
            $("#repair-form").submit();
            return false;
        });

        function validatePhone(txtPhone) {            
            var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
            if (filter.test(txtPhone)) {
                return true;
            }
            else {
                return false;
            }
        }

        function validateEmail(textEmail) {
            var filter = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if (filter.test(textEmail)) {
                return true;
            }
            else {
                return false;
            }
        }
    </script>
@endsection


@section('footer')
    @include('includes.footer')
    <style>
        [type=radio]:not(:checked), [type=radio]:checked {
            opacity: 1;
            position: relative;
            margin-right: 5px;
        }
        .warning-section {
            border: 2px solid orange;
            margin: 1rem 0;
            padding: 1rem;
        }
        label {
            cursor: pointer;
        }
        input[type="radio"]:checked {
            background-color: orange !important;
            width: 15px;
            height: 15px;
        }
        input[type="radio"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            display: inline-block;
            width: 15;
            height: 15;
            padding: 3px;
            background-clip: content-box;
            border: 2px solid #bbbbbb;
            background-color: #e7e6e7;
            border-radius: 50%;
        }
        input[type="checkbox"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            display: inline-block;
            width: 15;
            height: 15;
            padding: 3px;
            background-clip: content-box;
            border: 2px solid #bbbbbb;
            background-color: #e7e6e7;
        }
        [type=checkbox]:not(:checked), [type=checkbox]:checked {
            position: relative !important;
            opacity: 1;
        }
        input[type="checkbox"]:checked {
            background-color: orange !important;
            width: 15px;
            height: 15px;
        } 
        input[type=radio], input[type=checkbox] {
            pointer-events: all !important;
            cursor: pointer;
        }       
        .main-heading-row {
            /* display: none; */
        }
        select {
            display: block !important;
            background: #fff !important;
            border: 1px solid #9e7f27 !important;
        }
    </style>
@endsection
