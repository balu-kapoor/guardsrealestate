<footer  class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col m3 s6 social-block left-align">
                <div><img src="{{asset('images/full_logo.png')}}" ></div>
                <p >Protecting your life investments</p>
                <div class="row icons">
                    <a class="col s3" href="https://www.facebook.com/GuardsRealEstate/"><i class="fa fa-facebook fa-fw"></i></a>
                    <a class="col s3" href="https://uk.linkedin.com/company/guardsrealestate"><i class="fa fa-linkedin fa-fw"></i></a>
                    <a class="col s3" href="https://twitter.com/guardsrealestat"><i class="fa fa-twitter fa-fw"></i></a>
                    <a class="col s3" href="https://www.instagram.com/guardsrealestate/"><i class="fa fa-instagram fa-fw"></i></a>
                </div>
            </div>
            <div class="col offset-m2 m3 s6 nav-links">
                <h5 class="amber-text text-darken-1">Navigation</h5>
                <ul>
                    <li><a href="{{route('website-property-search')}}?list=L">Lettings</a></li>
                    <li><a href="{{route('website-property-search')}}?list=S">Sales</a></li>
                    <li><a href="{{route('website-about')}}">About Us</a></li>
                    <li><a href="{{route('website-contact')}}">Get in touch</a></li>
                    <li><a  href="/payments">Payments</a></li>
                    <li><a  href="{{route('website-fees')}}">Fees & Terms</a></li>
                    <li><a href="{{route('repair-maintenance')}}?list=L">Report a repair</a></li>
                    <li><a href="/privacy">Privacy Policy</a></li>
                    <li><a href="{{route('website-certificates')}}" >Certificates</a></li>
                </ul>
            </div>
            <div class="col m4 s12 contact">
                <h5 class="amber-text text-darken-1">Contact</h5>
                <p style="text-transform: uppercase;">Head Office</p>
                <p style="text-transform: uppercase;">North Yorkshire</p>
                <p>43 BERKELEY SQUARE<br>
                    LONDON<br>
                    W1J 5AP<br>
                    <br>
                    <p style="text-transform: uppercase;">north yorkshire</p>
                    <p style="text-transform: uppercase;">5 Yarm Rd<br>
                        Stockton-on-Tees<br>
                        TS18 3SF
                    </p>
                    <strong>T</strong>
                    <a href="tel:+442036331271">+44 (0) 20 3633 1271</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<div id="modal1" class="modal home-modal">

    <a class="modal-close white-text home-modal-close" href="#!"><i class="material-icons">close</i></a>
    <div class="modal-content home-modal-content home-first-modal-content">
        <div class="row adv-search home-page-modal-row">
            <div class="col s12">
                <ul class="tabs">
                    <!-- <li class="tab col s4 tab-one"><a class="active" href="#valuation-form">Valuation</a></li> -->
                    <li class="tab col s4 tab-two"><a  class="active" href="#lettings-form">To Let</a></li>
                    <li class="tab col s4 tab-three"><a href="#sales-form">For Sale</a></li>
                </ul>
            </div>

            
            <div id="lettings-form" class="col s12 tab-content active" style="display: block">
                <form action="{{route('website-property-search')}}" method="get">
                    <input type="hidden" name="list" value="L">
                <div class="col s12">
                    <div class="search-wrapper">
                        <div class="input-field">
                            <input type="text" name="postcode" id="autocomplete-location" class="autocomplete rent" placeholder="Location">
                            <i class="material-icons">search</i>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="input-field">
                        <select name="type">
                            <option value="" disabled selected>Property Type</option>
                            @foreach($filterOptions['rent']['property_type_list'] as $type)
                                <option>{{$type}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="input-field">
                        <select name="pricerange">
                            <option value="" disabled selected>Price</option>
                            @foreach($filterOptions['rent']['price_bracket_list'] as $pricebracket)
                                <option value="{{$pricebracket['min']}}|{{$pricebracket['max']}}">&#163; {{$pricebracket['min']}} - &#163; {{$pricebracket['max']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col s12 m6">

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
                </div>
                <div class="col s12 m6 btn-find-wrapper ">

                    <button type="submit" class="btn-guards home-modal-wrapper">Search</button>
                </div>
                <!--<div class="col s12">
                    <div class="input-field">
                        <p class="p-m-text advance-row-button">
                            Advanced &nbsp; <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span>
                        </p>
                    </div>
                </div>-->
                </form>
            </div>

            <div id="sales-form" class="col s12 tab-content">
                <form action="{{route('website-property-search')}}" method="get">
                    <input type="hidden" name="list" value="S">
                <div class="col s12">
                    <div class="search-wrapper">
                        <div class="input-field">
                            <input type="text" name="postcode"  class="autocomplete buy" placeholder="Location">
                            <i class="material-icons">search</i>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="input-field">
                        <select name="type">
                            <option value="" disabled selected>Property Type</option>
                            @foreach($filterOptions['buy']['property_type_list'] as $type)
                                <option>{{$type}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="input-field">
                        <select name="pricerange">
                            <option value="" disabled selected>Price</option>
                            @foreach($filterOptions['buy']['price_bracket_list'] as $pricebracket)
                                <option value="{{$pricebracket['min']}}|{{$pricebracket['max']}}">&#163; {{$pricebracket['min']}} - &#163; {{$pricebracket['max']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col s12 m6">

                    <div class="input-field">
                        <div class="num-ip">
                            <span>Bedrooms</span>
                            <div class="number-ip-field">
                                <input name="beds"  type="number" placeholder="+1" min="0" max="10" step="1" value="1">
                                <div class="num-nav">
                                    <div class="num-button num-up">+</div>
                                    <div class="num-button num-down">-</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 btn-find-wrapper">

                    <button type="submit" class="btn-guards home-modal-wrapper">Search</button>
                </div>
                <!--<div class="col s12">
                    <div class="input-field">
                        <p class="p-m-text advance-row-button">
                            Advanced &nbsp; <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span>
                        </p>
                    </div>
                </div>-->
                </form>
            </div>
        </div>

    </div>
    <!--<div class="modal-content home-modal-content home-second-modal-content">

        <div class="row srch-am ameneties-section">
            <span class="search-hd col s12">Ameneties</span>
            <div class="col s6 m4">
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Air Conditioning</span>
                </label>
            </div>
            <div class="col s6 m4">
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Wifi</span>
                </label>
            </div>
            <div class="col s6 m4">
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Barbeque</span>
                </label>
            </div>
            <div class="col s6 m4">
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Sauna</span>
                </label>
            </div>
            <div class="col s6 m4">
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Gym</span>
                </label>
            </div>
            <div class="col s6 m4">
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Dryer</span>
                </label>
            </div>
            <div class="col s6 m4">
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>TV</span>
                </label>
            </div>
            <div class="col s6 m4">
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Washer</span>
                </label>
            </div>
            <div class="col s6 m4">
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Lawn</span>
                </label>
            </div>
            <div class="col s6 m4">
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Refrigerator</span>
                </label>
            </div>
            <div class="col s12 m12">
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Pool</span>
                </label>
            </div>

        </div>
    </div>-->
</div>
