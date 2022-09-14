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
    <div class="container">
        <div class="search-bar">
            <div class="results">{{count($properties)}} search results</div>
            <div class="sort-container" >
                <span>Sort by:</span>
                <div class="input-field">
                    <select id="sortby" onchange="sortBy(this)">
                        <option value="" disabled selected>Featured</option>
                        <option value="phl">Price (High to Low))</option>
                        <option value="plh">Price (Low to High)</option>
                        <option value="bd">Number of beds</option>
                    </select>
                </div>
                <div class="h-divider "></div>
            </div>
            <div class="action">
                <a href="#" data-target="slide-out-search" class="sidenav-trigger show-on-large btn-guards hvr-underline-from-left">Show Filter</a>
            </div>
        </div>

        <div id="slide-out-search" class="sidenav adv-search">
            <div>
                <span class="search-hd left">Advanced Search</span>
                <a class="sidenav-close white-text" href="#!"><i class="material-icons">close</i></a>
            </div>
            <div class="btn-select">
                <input type="radio" name="propind" id="lettingspropind" value="L" checked="checked">
                <label  id="rent" onclick="setType('rent','buy')" class=" waves-effect waves-light selected"  for="lettingspropind" id="lettingspropindlabel">Rent</label>
                <input type="radio" name="propind" id="salespropind" value="S" >
                <label  id="buy" onclick="setType('buy','rent')" class=" waves-effect waves-light" for="salespropind" id="salespropindlabel">Buy</label>
            </div>
            <form method="get" id="form_rent" action="{{route('website-property-search')}}">
                <input type="hidden" name="list" value="L">
            <div class="search-wrapper">
                <div class="input-field">
                    <input type="text" name="postcode"  id="autocomplete-input" class="autocomplete rent" placeholder="Location">
                    <i class="material-icons">search</i>
                </div>
            </div>
            <div class="input-field">
                <select name="type">
                    <option value="" disabled selected>Property Type</option>
                    @foreach($filterOptions['rent']['property_type_list'] as $type)
                        <option>{{$type}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-field">
                <select name="pricerange">
                    <option value="" disabled selected>Price</option>
                    @foreach($filterOptions['rent']['price_bracket_list'] as $pricebracket)
                        <option value="{{$pricebracket['min']}}|{{$pricebracket['max']}}">&#163; {{$pricebracket['min']}} - &#163; {{$pricebracket['max']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-field">
                <div class="num-ip">
                    <span>Bedrooms</span>
                    <div class="number-ip-field">
                        <input name="beds" type="number" placeholder="+1" min="0" max="10" step="1" value="1">
                        <div class="num-nav">
                            <div class="num-button num-up">+</div>
                            <div class="num-button num-down">-</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row srch-am">
                <span class="search-hd col s12">Ameneties</span>
                <div class="col s6">
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>Air Conditioning</span>
                    </label>
                </div>
                <div class="col s6">
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>Wifi</span>
                    </label>
                </div>
                <div class="col s6">
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>Barbeque</span>
                    </label>
                </div>
                <div class="col s6">
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>Sauna</span>
                    </label>
                </div>
                <div class="col s6">
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>Gym</span>
                    </label>
                </div>
                <div class="col s6">
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>Dryer</span>
                    </label>
                </div>
                <div class="col s6">
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>TV</span>
                    </label>
                </div>
                <div class="col s6">
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>Washer</span>
                    </label>
                </div>
                <div class="col s6">
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>Lawn</span>
                    </label>
                </div>
                <div class="col s6">
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>Refrigerator</span>
                    </label>
                </div>
                <div class="col s12">
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>Pool</span>
                    </label>
                </div>

            </div>-->
            <div class="btn-find-wrapper" style="margin-top: 1.5rem;"><button type="submit" class="btn-guards">Find Properties</button> </div>
            </form>
            <form method="get" id="form_buy" class="hide" action="{{route('website-property-search')}}">
                <input type="hidden" name="list" value="S">
                <div class="search-wrapper">
                    <div class="input-field">
                        <input type="text" name="postcode" id="autocomplete-input" class="autocomplete buy" placeholder="Location">
                        <i class="material-icons">search</i>
                    </div>
                </div>
                <div class="input-field">
                    <select name="type">
                        <option value="" disabled selected>Property Type</option>
                        @foreach($filterOptions['buy']['property_type_list'] as $type)
                            <option>{{$type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-field">
                    <select name="pricerange">
                        <option value="" disabled selected>Price</option>
                        @foreach($filterOptions['buy']['price_bracket_list'] as $pricebracket)
                            <option value="{{$pricebracket['min']}}|{{$pricebracket['max']}}">&#163; {{$pricebracket['min']}} - &#163; {{$pricebracket['max']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-field">
                    <div class="num-ip">
                        <span>Bedrooms</span>
                        <div class="number-ip-field">
                            <input name="beds" type="number" placeholder="+1" min="0" max="10" step="1" value="1">
                            <div class="num-nav">
                                <div class="num-button num-up">+</div>
                                <div class="num-button num-down">-</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-find-wrapper" style="margin-top: 1.5rem;"><button type="submit" class="btn-guards">Find Properties</button> </div>
            </form>

        </div>
        @if(count($properties) >0)
            @php $i=0; @endphp
            @foreach($properties as $property)
                @php /** @var \App\Models\Properties\GB_PropertySync $property  */ @endphp
                <a class="card row list-item hoverable" href="{{route('website-property-detail',['property'=>$property,'slug'=>\Illuminate\Support\Str::slug($property->title)])}}">
            <div class="col m6 s12 list-img"><img src="{{($property->img_listingIcon)}}" class="responsive-img">
{{--                <div class="card-overlay"><img src="{{asset('images/landscape.svg')}}"><span class="text">1/6</span></div>--}}
            </div>
            <div class="col m6 s12 list-info">
                <h3 class="prop-name">{!! $property->title !!}<div class="pricecol right">{!! $property->price_display !!}</div></h3>

                <div class="s-text light list-addr">{{$property->type}} @if($property->status!='Available')<span class="new badge red" data-badge-caption="">{{$property->status}}</span>@endif</div>
                <div class="s-text list-spec">
                    <img src="{{asset('images/bath.svg')}}"><span>{{$property->bathrooms}} bath</span>
                    <img src="{{asset('images/bed.svg')}}"><span>{{$property->beds}} Beds</span>
                    <img src="{{asset('images/sqft.svg')}}"><span>{{$property->area}}</span>
                </div>
                <p class="m-text light">{{$property->summary}}</p>
                <span class="btn-guards modal-trigger" data-target="modal_viewing" href="#modal_viewing">Book viewing</span>
            </div>
        </a> @if($i%6 == 0 && $i > 0)
                    <div class="v-widget row">
            <div class="col l8 m6 s12 val-info">
                <img src="{{asset('images/houseIcon.svg')}}" class="responsive-img">
                <span><span  class="v-widget-hd">Free property valuation</span><br/>
                <span class="v-widget-txt">Book a virtual appraisal for your property today</span>
            </span>
            </div>
            <div class="col l4 m6 s12 btn-container"> <a class="btn-guards modal-trigger" data-target="modal1" href="#modal1" >Book valuation</a></div>
        </div>
                @endif
            @php $i++; @endphp
            @endforeach
        @else
            <div class="v-widget row">
                <div class="col l12 m12 s12 center-align">
                   <span>
                        <span  class="v-widget-hd">Oops! Cant find any matching results!</span><br/>
                        <span class="v-widget-txt">Here are some other properties you might be interested in</span>
                    </span>
                </div>
            </div>

            @if(count($allproperties) >0)
                @php $i=0; @endphp
                @foreach($allproperties as $property)
                    @php /** @var \App\Models\Properties\GB_PropertySync $property  */ @endphp
                    <a class="card row list-item hoverable" href="{{route('website-property-detail',['property'=>$property,'slug'=>\Illuminate\Support\Str::slug($property->title)])}}">
                        <div class="col m6 s12 list-img"><img src="{{asset($property->img_listingIcon)}}" class="responsive-img">
                            {{--                <div class="card-overlay"><img src="{{asset('images/landscape.svg')}}"><span class="text">1/6</span></div>--}}
                        </div>
                        <div class="col m6 s12 list-info">
                            <h3 class="prop-name">{{$property->title}}<div class="pricecol right">{!! $property->price_display !!}</div></h3>

                            <div class="s-text light list-addr">{{$property->type}} @if($property->status!='Available')<span class="new badge red" data-badge-caption="">{{$property->status}}</span>@endif</div>
                            <div class="s-text list-spec">
                                <img src="{{asset('images/bath.svg')}}"><span>{{$property->bathrooms}} bath</span>
                                <img src="{{asset('images/bed.svg')}}"><span>{{$property->beds}} Beds</span>
                                <img src="{{asset('images/sqft.svg')}}"><span>{{$property->area}}</span>
                            </div>
                            <p class="m-text light">{{$property->summary}}</p>
                            <span class="btn-guards modal-trigger" data-target="modal_viewing" href="#modal_viewing">Book viewing</span>
                        </div>
                    </a> @if($i%6 == 0 && $i > 0)
                        <div class="v-widget row">
                            <div class="col l8 m6 s12 val-info">
                                <img src="{{asset('images/houseIcon.svg')}}" class="responsive-img">
                                <span><span  class="v-widget-hd">Free property valuation</span><br/>
                <span class="v-widget-txt">Book a virtual appraisal for your property today</span>
            </span>
                            </div>
                            <div class="col l4 m6 s12 btn-container"> <a class="btn-guards modal-trigger" data-target="modal1" href="#modal1" >Book valuation</a></div>
                        </div>
                    @endif
                    @php $i++; @endphp
                @endforeach

            @endif
        @endif

{{--        <div class="center-align more-container"><a class="btn-guards">Load more</a></div>--}}

        <div class="back-to-top-wrapper">
            <a href="#top" class="back-to-top-link" aria-label="Scroll to Top"><span class="material-icons">arrow_upward</span></a>
        </div>
    </div>
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('page-js')
<script type="text/javascript">
    $(document).ready(function () {
        $('#go-to-top').click(function(e){
            $('html, body').stop().animate({ scrollTop: 83 }, 500);
            e.preventDefault();
        });
    });
    function sortBy(selected) {
       /* const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        urlParams.set("sort",  selected.value);
        history.pushState(null, null, "?"+urlParams.toString());*/


        var url = new URL(window.location.href);
        var search_params = url.searchParams;

        search_params.set("sort",  selected.value);

        url.search = search_params.toString();

        window.location.href = url.toString();

// output : http://demourl.com/path?id=100&id=101&id=102&topic=main
    }

</script>
@endsection
