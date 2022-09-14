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

    @php /** @var \App\Models\Properties\GB_PropertySync $property  */ @endphp
<main class="details-page">
    <div class="images-container">
        <div class="carousel">
            <a id="carousel-prev" class="moveCarousel prev  waves-effect left"><img src="{{asset('images/i_prev.svg')}}"></a>
            <a id="carousel-next" class="moveCarousel next waves-effect right"><img src="{{asset('images/i_next.svg')}}"></a>

            @php $i=1; @endphp
            @if(!empty($property->imagelist))
                @foreach($property->imagelist as $imgpath)
                <a class="carousel-item" href="#">
                    <img src="{{$imgpath}}?width=1920&height=1200&cropToFill=True">
                    <div class="card-overlay">
                        <div class="img-counter"><img src="{{asset('images/landscape.svg')}}"><span class="text">{{$i}}/{{count($property->imagelist)}}</span></div>
                    </div>
                </a>
                    @php $i++; @endphp
                @endforeach
            @endif
        </div>
        <div class="back-to-search"><a href="{{ url()->previous() }}"><span class="material-icons">arrow_back</span> Back to results</a> </div>
        <div class="image-zoom">
            <span class="guards-border"><img src="{{asset('images/i_gallery.svg')}}">Gallery</span>
            @if(!empty($property->epc))
                <span class="modal-trigger" id="epc" data-img="epc-img" data-target="modal2"><img src="{{asset('images/i_epc.svg')}}">EPC</span>
            @endif
            <a href="#map"><img src="{{asset('images/i_map.svg')}}">Map</a>
            @if(!empty($property->virtual_tour_link))
                <span class="modal-trigger" id="v-tour" data-img="gallery-img" data-target="modal3"><i class="fa fa-houzz"></i>Virtual Tour</span>
            @endif
            @if(!empty($property->floorplan))
                <span class="modal-trigger" id="floor-map" data-img="floor-map-img" data-target="modal2"><img src="{{asset('images/i_floor.svg')}}">Plans</span>
            @endif
        </div>
    </div>
    <div id="modal2" class="modal detail-popup">
        <div class="modal-content">
            <img src="{{$property->floorplan}}" class="responsive-img" id="floor-map-img">
            <img src="{{$property->epc}}" class="responsive-img" id="epc-img">
            <div id="gallery-img"></div>
        </div>
    </div>
    <div id="modal3" class="modal v-tour-popup">
        <div class="modal-content">
            <div id="gallery-img"><iframe style="margin: auto; width: 50vw;height: 60vh" src="{{$property->virtual_tour_link}}"></iframe> </div>
        </div>
    </div>

    <div class="h-summary-wrapper">
        <div class="container h-summary detail-grid">
            <div >
                <h1 class="prop-name">{!! $property->title !!}<div class="pricecol right">{!! $property->price_display !!}</div></h1>
                <div class="h-addr">{{$property->type}} | REF: {{$property->reference}}@if($property->status!='Available')<span class="new badge red" data-badge-caption="">{{$property->status}}</span>@endif</div>
                <div class="divider"></div>
                <div class="h-spec">
                    <img src="{{asset('images/bath.svg')}}"><span>{{$property->bathrooms}} bath</span>
                    <img src="{{asset('images/bed.svg')}}"><span>{{$property->beds}} Beds</span>
                    <img src="{{asset('images/sqft.svg')}}"><span>{{$property->area}}</span>
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
                <p>{{$property->summary}}
                </p>
            </div>
            <div >
                @if(!empty($property->amenities))
                <div class="row det-am">
                    <h3 class=" col s12">Ameneties</h3>
                    @foreach($property->amenities as $ammenity)
                        <div class="col s6">
                            <img src={{asset("images/i_ac-unit.svg")}}><span>{{$ammenity}}</span>
                        </div>
                    @endforeach

                </div>
                @endif
            </div>
        </div>
        <div class="detail-grid">
            <div >
                <h3>Important Note To Purchasers</h3>
                <p>{{$property->disclaimer_text}}</p>
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

@endsection

@section('footer')
    @include('includes.footer')
@endsection
@section('page-js')
    <script>
        // Initialize and add the map
        var map,h_location;
        let API_KEY = '{{GMAPS_KEY}}';
        function initMap() {
            $('#street-view').addClass('not-selected');
            $('#map-view').removeClass('not-selected');
            if('{{$property->latitude}}' != ''){
                let h_location = {lat:{{$property->latitude}},lng:{{$property->longitude}}}
                map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 13, center: h_location});
                // The marker, positioned at Uluru
                let marker = new google.maps.Marker({
                    position: h_location,
                    map: map,
                    icon:'{{asset('images/guards_pin.png')}}'
                });
            }else{
                $.get('https://maps.googleapis.com/maps/api/geocode/json',
                    {  address:'{!!  preg_replace( "/\r\n/", ",",strip_tags($property->full_address) ) !!}',
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
                                icon:'{{asset('images/guards_pin.png')}}'
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

