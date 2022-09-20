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
    <main>

        <div class="main-heading-row">
            <img src="{{asset('images/aboutusTop.jpg')}}" class="responsive-img ">
            <div class="header-row-heading">
                <div class="header-row">
                    <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">about us</h1>
                </div>
            </div>
        </div>

        <div class="about-us">
            <div class="privacy-container">
                <div class="container">

                    <div class="guards-heading-box">
                        <h4 class="heading-guards guards-border guards-bottom-border">Who is Guards Real Estate?</h4>
                    </div>
                    <div class="row">
                        <div class="col s12">

                            <div class="about-first-row">
                                <div class="text-row">
                                    <p class="about-us-text p-l-text">Guards real estate is a boutique real estate agency based in Central London & North Yorkshire, County Durham and surrounding areas. We primarily focus on providing exceptional personal service to both clients and customer satisfaction. We pride ourselves on strong client confidentiality, integrity and professionalism. We aim to be completely transparent and we will make you aware of every step we organise towards achieving the target goal. We are here to take all the hustle away from you whether it is regarding managing, renting, letting, buying or selling a property.
 </p>
                                    <p class=" p-l-text about-us-text">We are experts with a strong passion for real estate and we will take care of your property and your needs as if you were one of us.</p>

                                     <div class="icon-row-grid">
                                        <?php /* ?><div >
                                            <div class="icon-box">
                                                <div class="icon-image">
                                                    <img src="{{asset('images/user.png')}}" class="img-responsive">
                                                </div>
                                                <div class="icon-text">
                                                    <p class="numbers p-l-text">80.123</p>
                                                    <p class="text p-s-text">Customers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div >
                                            <div class="icon-box">
                                                <div class="icon-image">
                                                    <img src="{{asset('images/house.png')}}" class="img-responsive">
                                                </div>
                                                <div class="icon-text">
                                                    <p class="numbers p-l-text">£74 million</p>
                                                    <p class="text p-s-text">In home sales</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div >
                                            <div class="icon-box">
                                                <div class="icon-image">
                                                    <img src="{{asset('images/money.png')}}" class="img-responsive">
                                                </div>
                                                <div class="icon-text">
                                                    <p class="numbers p-l-text">£74 million</p>
                                                    <p class="text p-s-text">In Savings</p>
                                                </div>
                                            </div>
                                        </div><?php */ ?>
                                    </div>
                                </div>
                                <div class="video-row">
                                    <img src="{{asset('images/aboutUs.jpg')}}" class="img-responsive" style="max-width: 100%;">

                                  {{--  <video autoplay muted playsinline  poster="{{asset('images/hero1.png')}}">
                                        <source src="{{asset('images/v2.mp4')}}" type="video/mp4">
                                    </video>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row facility-card">
                        <div class="col s12">
                            <div class="guards-heading-box">
                                <h4 class="heading-guards guards-border guards-bottom-border">why choose us?</h4>
                            </div>
                            <div class="row cards-box">
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box">
                                            <img src="{{asset('images/globe60.png')}}" class="img-responsive">
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Global Platform</p>
                                            <p class="card-text-block-text p-s-text">
                                                Our clients and customers are national and international; we are extremely flexible in facilitating all of our customers and clients needs virtually and face to face.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box">
                                            <img src="{{asset('images/building.svg')}}" class="img-responsive">
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Your goal is our goal!</p>
                                            <p class="card-text-block-text p-s-text">
                                                We will go above and beyond to meet your expectations and make your wishes come true!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box">
                                            <img src="{{asset('images/horseicon.svg')}}" style="height: 60px;width: 60px;" class="img-responsive">
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Protecting your life investments</p>
                                            <p class="card-text-block-text p-s-text">
                                                We are a problem-solving service helping you be protected with headache free solutions; we take the problems away so you can live your life and collect your income stress free.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col12">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">add</i>Who is Guards Real Estate?</div>
                            <div class="collapsible-body">
                            Guards Real Estate is a boutique agency with Guards London office covering Central London and the City of London, we also have Guards Country covering ; North Yorkshire , County Durham and surrounding areas. We pride ourselves with content clients nationwide.</div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">add</i>Why Choose Guards Real Estate?</div>
                            <div class="collapsible-body">

                                <ul class="horse-list">
                                    <li>Covering the Whole of London</li>
                                    <li>Tailor-made Packages to Suit Your Preferences & Needs</li>
                                    <li>Great Customer Care</li>
                                    <li>Dedicated Property Manager </li>
                                    <li>We <b>manage</b> properties for clients.</li>
                                    <li>Dedicated Agent at Your Hand (we will meet you anytime and anyplace)</li>
                                    <li>Minimising Void Periods with Out of the Box Thinking</li>
                                        <li>Attention to Details
                                        </li><li>Efficiency
                                    </li><li>Ensuring Fair Negotiations
                                    </li><li>Unique Artistic Photography
                                    </li><li>Offering Interior Design
                                    </li><li>Real-Time Landlord Feedback (You Will be Kept in the Loop at all Times)
                                    </li><li>Reliability & Trustworthiness
                                    </li><li>Accredited Valuers </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">add</i>What Does Guards Real Estate Offer?</div>
                            <div class="collapsible-body">
                                <ul class="horse-list">
                                    <li>Valuing the Properties.
                                    </li><li>Letting Properties within London
                                    </li><li>Selling Properties (Leasehold, Freehold & Share of Freehold)
                                    </li><li>Providing Advice on Mortgages, Bridge Loans & Development Funding (FCA accredited partnerships)
                                    </li><li>We Manage Properties so you don't have to.</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">add</i>Our Standard Packages (Can be Tailored to Your Needs)</div>
                            <div class="collapsible-body"><p class="textbox" dir="ltr">
                                    <ol>
                                    <li>Lettings (Introduction Only)</li>
                                    <li>Lettings (Guards Heritage Package - everything you need to have a smooth process)</li>
                                    <li>Fully Managed (Guards Protection Package) - Let us take the Headache Away from You.</li>
                                </ol></div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="team-box">
                <div class="privacy-container">
                    <div class="container">
                        <div class="row" id="team-det">

                            <div class="guards-heading-box">
                                <h4 class="heading-guards guards-border guards-bottom-border">our team</h4>
                            </div>
                            <div class="row profile">
                                <div class="col m6 s12">
                                     <img src="{{asset('images/t2.jpg')}}" class="responsive-img">
                                        <div class="card profile-card hoverable">
                                            <div class="profile-header">Nathan Dicarlo, CEO</div>
                                            <div class="divider"></div>
                                            <p>My passion is to shake up the property industry also to be innovative, creative & always offer an impeccable service. I like
                                                the challenges the property industry offers as I really enjoy solving complex problems especially for those who don't
                                                always have the solutions.  </p>
                                        </div>
                                </div>
                                <div class="col m6 s12">
                                        <img src="{{asset('images/t3.jpg')}}" class="responsive-img">
                                        <div class="card profile-card hoverable">
                                            <div class="profile-header">Nina Knezevic, Sales/Lettings Director</div>
                                            <div class="divider"></div>
                                            <p>My passion is the property investment and making the most out of the
                                                properties which are on my radar. Having a luxury travel background
                                                helped me develop customer relationship skills which were transferred
                                                onto my new role.  </p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-box-container">
                <div class="container">

                    <div class="guards-heading-box">
                        <h4 class="heading-guards guards-border guards-bottom-border">our partners</h4>
                    </div>
                    <div class="row">
                        <div class="grid-6-col partner-col">
                            <a href="http://www.guardsrealestate.com/"><img class="responsive-img" src="{{asset('images/prs.png')}}"></a>
                            <a href="http://www.guardsrealestate.com/"><img class="responsive-img" src="{{asset('images/zoopla.png')}}"></a>
                            <a href="http://www.guardsrealestate.com/"><img class="responsive-img" src="{{asset('images/myDeposits.png')}}"></a>
                            <a href="http://www.guardsrealestate.com/"><img class="responsive-img" src="{{asset('images/prime.png')}}"></a>
                            <a href="http://www.guardsrealestate.com/"><img class="responsive-img" src="{{asset('images/protected.png')}}"></a>
                            <a href="http://www.guardsrealestate.com/"><img class="responsive-img img-bw" src="{{asset('images/onthemarket.jpeg')}}"></a>
                        </div>
                        <div class="col s12 button-area">
                            <a href="{{route('website-contact')}}" data-target="slide-out-search" class="btn-guards ">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.collapsible');
                var instances = M.Collapsible.init(elems, options);
            });
        </script>
    </main>
@endsection

@section('page-js')

@endsection


@section('footer')
    @include('includes.footer')
@endsection
