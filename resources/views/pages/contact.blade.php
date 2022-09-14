@extends('layout')

@section('page-head')
    @include('includes.head')
@endsection

@section('page-css')
{{--    load page css here--}}
@endsection

@section('navigation')
    @include('includes.navigation')
@endsection

@section('page-body')
    <main >
        <div class="main-heading-row">
            <img src="{{asset('images/get-in-touch.jpg')}}" class="responsive-img ">
            <div class="header-row-heading">
                <div class="header-row">
                    <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">get in touch</h1>
                </div>
            </div>
        </div>
        <div class="privacy-container">
            <div class="container contact-us">
                <div class="row">
                    <div class="col s12 m6">
                        <h4 class="heading-guards guards-border guards-bottom-border">Send us an email</h4>
                        <p class="contact-text p-l-text">
                            Lettings, Sales or Investments - Let's get you connected with a member of our team.<br/>
                            Guards Real Estate is a boutique estate agency offering a personalised service tailored to your needs.
                            Get in touch with us and let us take care of you. We are covering the whole of London.
                        </p>
                        <div class="form-block">
                            <div class="row">
                                <form class="col s12" method="post" action="{{route('website-contactus-form')}}">
                                    @csrf
                                    <div class="row">
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <div class="input-field col s12 m6 {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <input name="name" id="first_name" type="text" placeholder="Name" value="{{ old('name')}}">
                                        </div>
                                        <div class="input-field col s12 m6 {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <input name="email"  id="email" type="email" placeholder="Email" value="{{ old('email')}}">
                                        </div>
                                        <div class="input-field col s12 m6 {{ $errors->has('phone') ? 'has-error' : '' }}">
                                            <input name="phone"  id="phone" type="text" placeholder="Phone" value="{{ old('phone')}}">
                                        </div>
                                        <div class="input-field col s12 m6 {{ $errors->has('subject') ? 'has-error' : '' }}">
                                            <input name="subject"  id="subject" type="text" placeholder="Subject" value="{{ old('subject')}}">
                                        </div>
                                        <div class="input-field col s12 m12 {{ $errors->has('message') ? 'has-error' : '' }}">
                                            <textarea name="message"  id="message" class="materialize-textarea" placeholder="Your Message">{{ old('message')}}</textarea>
                                        </div>
                                        <div class="col s12">
                                            <button type="submit" value="Send Message" class="btn-guards">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m5 contact-second-block">
                        <h4 class="heading-guards guards-border guards-bottom-border">Contact us</h4>
                        <p class="contact-text p-l-text">If you are a Landlord, Private Seller, Developer, Investor, Buyer or a Tenant, please don't hesitate to contact us via phone or email. Our details are below:</p>
                        <div class="contact-row-block">
                            <p class="heading">Address</p>
                            <p class="content p-l-text">43 Berkeley Square, London  W1J 5AP</p>
                        </div>
                        <div class="contact-row-block extra-top-space">
                            <p class="heading">Phone</p>
                            <p class="content p-l-text">+44 (0) 20 3633 1271</p>
                        </div>
                        <div class="contact-row-block extra-top-space">
                            <p class="heading">Email</p>
                            <p class="content p-l-text">info@guardsrealestate.com</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div id="map"></div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection

@section('page-js')
    <script>
        // Initialize and add the map
        var map,h_location;
        let API_KEY = '{{GMAPS_KEY}}';
        function initMap() {
            $('#street-view').addClass('not-selected');
            $('#map-view').removeClass('not-selected');
                let h_location = {lat:51.509430,lng:-0.146540}
                map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 13, center: h_location});
                // The marker, positioned at Uluru
                let marker = new google.maps.Marker({
                    position: h_location,
                    map: map,
                    icon:'{{asset('images/guards_pin.png')}}'
                });
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
            src="https://maps.googleapis.com/maps/api/js?key={{GMAPS_KEY}}&callback=initMap">
    </script>
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
    </style>
@endsection


@section('footer')
    @include('includes.footer')
@endsection
