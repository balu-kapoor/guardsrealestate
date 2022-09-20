@extends('layout')

@section('page-head')
    @include('includes.head')
@endsection

@section('page-css')
{{--    load page css here--}}
    <style>
    .team-box {
        background-color: #152430;
        padding-bottom: 0.5rem;
    }.team-box .heading-guards {
         color: #fff;
        margin-top: 1rem;
        margin-bottom: 1rem;
     }
    .team-box a{
        font-weight: bold;
        color: #0E1F2F;
    }
        .team-box .card{
            padding: 1rem;
        }
    </style>
@endsection

@section('navigation')
    @include('includes.navigation')
@endsection

@section('page-body')
    <main >
        <div class="hero ">
            <video muted autoplay poster="{{asset('images/hero1.jpg')}}"  class="home-video">
                <source src="{{asset('home.mp4')}}" type="video/mp4">
            </video>
            <!-- <div ><a class="btn-guards white-text modal-trigger" href="#modal1" >Find your home</a></div> -->
            <!-- Modal Structure -->
            <div>
                <a href="#target-element" id="scroll-to" class="scroll-to center white-text">
                    <div>scroll</div><img src="{{asset('images/scroll-arrow.png')}}">
                </a>
            </div>
        </div>
        <!-- <ul class="cards container">
            <li>
                <div href="" class="card card1">
                <div><p>Guards Country</p></div>
                    <img src="{{ asset('images/country.png') }}" class="card__image" alt="" />                
                </div>      
            </li>           
            <li>
                <a href="" class="card card3">
                <div></div>
                <img src="{{ asset('images/london.png') }}" class="card__image" alt="" />                
                </a>      
            </li>
             
        </ul> -->   
        <ul class="cards container">
            <li>
                <a href="{{ url('guards-country') }}" class="card card1">
                <img src="{{ asset('country.png') }}" class="card__image" alt="" />
                
                <div class="card__overlay">
                    <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                                         
                    </div>    
                </div>
                <!-- <div class="card__header-text">
                    <h3 class="card__title">Guards Country</h3>            
                </div> -->
                </a>      
            </li>
            <li>
                <a href="{{ url('guards-london') }}" class="card card2">
                <img src="{{ asset('london.png') }}" class="card__image" alt="" />
                <div class="card__overlay">        
                    <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                                     
                    </div>                    
                </div>
                <!-- <div class="card__header-text">
                    <h3 class="card__title">Guards London</h3>
                </div> -->
                </a>
            </li>    
        </ul>     
        <div class="container" id="target-element">
            <div class="v-widget row">
                <div class="col l8 m6 s12 val-info">
                    <img src="{{asset('images/houseIcon.svg')}}" class="responsive-img">
                    <span><span  class="v-widget-hd">Free property valuation</span><br/>
                <span class="v-widget-txt">Book a virtual appraisal for your property today</span>
            </span>
                </div>
                <div class="col l4 m6 s12 btn-container"> <a class="btn-guards" href="{{ url('valuation/online') }}" >Book valuation</a></div>
            </div>
            @if(!empty($saleproperties))
            <div class="grid grid-1">
                @if(isset($saleproperties[0]))
                <div class="item-1 slide-in-box">
                    <img src="{{$saleproperties[0]['img_600x1200']}}" alt="{{$saleproperties[0]['title']}}" class="responsive-img">
                    <a class="card-hover"  href="{{route('website-property-detail',['property'=>$saleproperties[0]['id'],'slug'=>\Illuminate\Support\Str::slug($saleproperties[0]['title'])])}}">
                        <div class="content">
                            <h3 >{{$saleproperties[0]['title']}}</h3>
                            <p>{{$saleproperties[0]['summary']}}</p>
                            <span class="btn-guards white-text">view more</span>
                        </div>
                    </a>
                </div>
                @endif
                @if(isset($saleproperties[1]))
                <div class="item-2 slide-in-box">
                    <img src="{{$saleproperties[1]['img_1200x600']}}" alt="{{$saleproperties[1]['title']}}" class="responsive-img ">
                    <a class="card-hover"  href="{{route('website-property-detail',['property'=>$saleproperties[1]['id'],'slug'=>\Illuminate\Support\Str::slug($saleproperties[1]['title'])])}}">
                        <div class="content">
                            <h3 >{{$saleproperties[1]['title']}}</h3>
                            <p>{{$saleproperties[1]['summary']}}</p>
                            <span class="btn-guards white-text">view more</span>
                        </div>
                    </a>
                </div>
                @endif
                @if(isset($saleproperties[2]))
                <div class="item-3 slide-in-box">
                    <img src="{{$saleproperties[2]['img_600x600']}}" alt="{{$saleproperties[2]['title']}}" class="responsive-img ">
                    <a class="card-hover"  href="{{route('website-property-detail',['property'=>$saleproperties[2]['id'],'slug'=>\Illuminate\Support\Str::slug($saleproperties[2]['title'])])}}">
                        <div class="content">
                            <h3 >{{$saleproperties[2]['title']}}</h3>
                            <p>{{Str::limit($saleproperties[2]['summary'],120,'...')}}</p>
                            <span class="btn-guards white-text">view more</span>
                        </div>
                    </a>
                </div>
                @endif
                <div class="item-4 slide-in-box text-box" id="review-box-1">
                    <p>Loading...</p>
                </div>
            </div>
            @endif
            @if(!empty($lettingsproperties))
            <div class="grid grid-2">
                <div class="item-1 slide-in-box text-box"  id="review-box-2">
                    <p>Loading...</p>
                </div>
                @if(isset($lettingsproperties[0]))
                <div class="item-2 slide-in-box ">
                    <img src="{{$lettingsproperties[0]['img_600x600']}}" alt="{{$lettingsproperties[0]['title']}}" class="responsive-img">
                    <a class="card-hover"  href="{{route('website-property-detail',['property'=>$lettingsproperties[0]['id'],'slug'=>\Illuminate\Support\Str::slug($lettingsproperties[0]['title'])])}}">
                        <div class="content">
                            <h3 >{{$lettingsproperties[0]['title']}}</h3>
                            <p>{{Str::limit($lettingsproperties[0]['summary'],150,'...')}}</p>
                            <span class="btn-guards white-text">view more</span>
                        </div>
                    </a>
                </div>
                @endif
                @if(isset($lettingsproperties[1]))
                <div class="item-3 slide-in-box ">
                    <img src="{{$lettingsproperties[1]['img_600x1200']}}" alt="{{$lettingsproperties[1]['title']}}" class="responsive-img">
                    <a class="card-hover"  href="{{route('website-property-detail',['property'=>$lettingsproperties[1]['id'],'slug'=>\Illuminate\Support\Str::slug($lettingsproperties[1]['title'])])}}">
                        <div class="content">
                            <h3 >{{$lettingsproperties[1]['title']}}</h3>
                            <p>{{$lettingsproperties[1]['summary']}}</p>
                            <span class="btn-guards white-text">view more</span>
                        </div>
                    </a>
                </div>
                @endif
                @if(isset($lettingsproperties[2]))
                <div class="item-4 slide-in-box ">
                    <img src="{{$lettingsproperties[2]['img_1200x600']}}" alt="{{$lettingsproperties[2]['title']}}" class="responsive-img">
                    <a class="card-hover"  href="{{route('website-property-detail',['property'=>$lettingsproperties[2]['id'],'slug'=>\Illuminate\Support\Str::slug($lettingsproperties[2]['title'])])}}">
                        <div class="content">
                            <h3 >{{$lettingsproperties[2]['title']}}</h3>
                            <p>{{$lettingsproperties[2]['summary']}}</p>
                            <span class="btn-guards white-text">view more</span>
                        </div>
                    </a>
                </div>
                @endif

            </div>
            @endif
            <div class="center-align more-container"><a class="btn-guards" href="{{route('website-property-search')}}?list=L">View All</a></div>

{{--            <div class="team-box">--}}
{{--                <div class="guards-heading-box">--}}
{{--                    <h4 class="heading-guards guards-border guards-bottom-border">our team</h4>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col m2 s12"></div>--}}
{{--                    <div class="col m4 s12" style="text-align: center">--}}
{{--                        <div class="card hoverable profile-image-block">--}}
{{--                            <a  href="/about-us#team-det">--}}
{{--                            <img src="{{asset('images/t2_h.jpg')}}" class="responsive-img" style="max-width: 300px;">--}}
{{--                            <div class="profile-text">--}}
{{--                                <p class="profile-name">Nathan Dicarlo</p>--}}
{{--                                <p class="profile-desg">CEO</p>--}}
{{--                            </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col m4 s12"  style="text-align: center">--}}
{{--                        <div class="card hoverable profile-image-block">--}}
{{--                            <a  href="/about-us#team-det">--}}
{{--                            <img src="{{asset('images/t3_h.jpg')}}" class="responsive-img"  style="max-width: 300px;">--}}
{{--                            <div class="profile-text">--}}
{{--                                <p class="profile-name">Nina Knezevic</p>--}}
{{--                                <p class="profile-desg">Sales/Lettings Director</p>--}}
{{--                            </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col m2 s12"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="grid-6-col">
                <a href="http://www.guardsrealestate.com/"><img class="responsive-img" src="{{asset('images/prs.png')}}"></a>
                <a href="http://www.guardsrealestate.com/"><img class="responsive-img" src="{{asset('images/zoopla.png')}}"></a>
                <a href="http://www.guardsrealestate.com/"><img class="responsive-img" src="{{asset('images/myDeposits.png')}}"></a>
                <a href="http://www.guardsrealestate.com/"><img class="responsive-img" src="{{asset('images/prime.png')}}"></a>
                <a href="http://www.guardsrealestate.com/"><img class="responsive-img" src="{{asset('images/protected.png')}}"></a>
                <a href="http://www.guardsrealestate.com/"><img class="responsive-img img-bw" src="{{asset('images/onthemarket2.jpeg')}}"></a>
            </div>
        </div>
        <div id="map"></div>

    </main>
@endsection

@section('page-js')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?place_id=ChIJQWTBZCkFdkgRhGer0CEJ8cA&libraries=places&key=AIzaSyB7NbVetU5YcRlRUeaw_7Z21h8O8dFT-4A&callback=initMap">
    </script>
    <script>
         $(document).ready(function () {
            
            if ($('.home-video').visible(true)) {
                // console.log('VISIBLE')
                $('.home-video').get(0).play();
            } else {
                $('.home-video').get(0).play();
            }

            $(document).scroll(function() {
                // console.log('scrolling')
                if ($('.home-video').visible(true)) {
                    $('.home-video').get(0).play();
                } else {
                    $('.home-video').get(0).play();
                }
            });
        });

        let reviews=null,currentReview=0;
        function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -33.866, lng: 151.196 },
            zoom: 15
        });
        function setReview(rev_id,is_first) {
            let review = reviews[rev_id];
            let reviewbox =  document.getElementById('review-box-1');
            if(is_first === true)
            {
                let reviewbox_second =  document.getElementById('review-box-2');
                let review_second = reviews[rev_id+1];
                reviewbox_second.innerHTML = "<div><div class='reviewer'><img src='"
                    +review_second.profile_photo_url
                    +"' /> <a href='"
                    +review_second.author_url
                    +"' target='_blank'>"
                    +review_second.author_name
                    +"</a></div>"
                    +review_second.text.slice(0,200)+' ...'
                    +"</div>";

            }
            else
            {
                $r = getRandomReviewBox();
                reviewbox =  document.getElementById('review-box-'+$r);
                $('#review-box-'+$r).hide().fadeIn('slow');
            }

            reviewbox.innerHTML = "<div><div class='reviewer'><img src='"
                +review.profile_photo_url
                +"' /> <a href='"
                +review.author_url
                +"' target='_blank'>"
                +review.author_name
                +"</a></div>"
                +review.text.slice(0,200)+' ...'
                +"</div>";

        }
        const request = {
            placeId: "ChIJQWTBZCkFdkgRhGer0CEJ8cA",
            fields: ["reviews"]
        };

            const service = new google.maps.places.PlacesService(map);
            service.getDetails(request, (place, status) => {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    reviews = place.reviews;
                    setReview(currentReview, true);
                    setInterval(function(){
                        if(currentReview == 4){
                            currentReview=-1;
                        }
                        currentReview++;
                        setReview(currentReview, false);
                    },3000 )

                }
            });
        }
        function getRandomReviewBox() {
            $n = Math.floor(Math.random() >= 0.5) +1;
            console.log($n);
            return $n;
        }
    </script>
@endsection
<style>
    .cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card {
  position: relative;
  display: block;
  height: 100%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card__image {      
  width: 100%;
  height: auto;
  max-width: 200px;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #fff;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: #D7BDCA;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: "MockFlowFont";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}   
.card__header-text {
    position: relative;
    margin-left: 60px;
}
.card {
    height: 140px !important;
    margin-bottom: 0;
} 
.card1 {
    background: #0f553e !important;
}
.card2 {
    background: #040f28 !important;
}
.card svg {
    fill: #152430 !important;
    display: none;
}
.card {
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 1px 1px 20px 3px #00000057;
}
/* .card1 img, .card3 img {
  max-width: 300px;
} */
/* a.card.card1:hover {
  background: #0f553e;
}

a.card.card2:hover {
  background: #152430;
}

a.card.card3:hover {
  background: #040f28;
} */
.card {  
  max-height: 140px;
}
ul.cards.container {
    /* display: none; */
}
ul.cards.container {
    padding: 1rem 0;
    padding-bottom: 0;
    margin-bottom: -10px;
}
.card:hover {
    border: 2px solid #e0ab25;
}
</style>

@section('footer')
    @include('includes.footer')
@endsection
