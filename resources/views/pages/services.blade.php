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

@section('page-body')<main class="privacy">
    <div class="main-heading-row">
        <img src="{{asset('images/serviceNew.jpg')}}" class="responsive-img ">
        <div class="header-row-heading">
            <div class="header-row">
                <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">Services we Offer</h1>
            </div>
        </div>
    </div>
    <div class="about-us">
        <div class="container">
            <div class="row first-row-block">
                <div>


                </div>
                <div class="row facility-card">
                        <div class="col s12">
                            <div class="row cards-box">
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box ">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Official Opening Hours</p>
                                            <p class="p-s-text"><strong>Monday – Friday</strong><br>
                                                9:00am – 6:00pm</p>
                                            <!--<p class="p-s-text"><strong>Friday</strong><br>
                                                9:00am – 5:30pm</p>
                                            <p class="p-s-text"><strong>Saturday<br>
                                                </strong>10:00am – 3:30pm</p>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box">
                                            <i class="fa fa-handshake-o"></i>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Golden Service</p>
                                            <p class="card-text-block-text p-s-text">
                                                We are available at all times a day to provide you with the highest quality service possible. You will have a dedicated person who will report to you and who you can call.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box">
                                            <i class="fa fa-whatsapp"></i>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Flexibile Communicators</p>
                                            <p class="card-text-block-text p-s-text">We are a what’s app friendly service meaning you can contact your portfolio manager anytime with a simple what’s app message, we understand that living in the fast lane can mean sometimes a phone call can be too tedious when running from one destination to the next!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row cards-box">
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box">
                                            <i class="fa fa-key"></i>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Management Packages</p>
                                            <p class="card-text-block-text p-s-text">
                                                Our management packages are tailored specifically to suit your needs. Please do
                                                <a href="/contact-us">contact us</a> for more details
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box">
                                            <i class="fa fa-headphones"></i>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Live Landlord Feedback</p>
                                            <p class="card-text-block-text p-s-text">
                                                As our landlord, you will receive real-time feedback immediately after the viewing has been conducted. This is a constructive report informing you of what the potential tenant thinks of your property. We feel you deserve to know every step we make towards letting your property let.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box">
                                            <i class="fa fa-building-o"></i>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Our Team</p>
                                            <p class="card-text-block-text p-s-text">
                                                We have a team dedicated to working with our corporate clients including some of the leading international banks, law firms and technology companies.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row cards-box">
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Protecting You from Unfair Negotiation</p>
                                            <p class="card-text-block-text p-s-text">
                                                We will make sure that you are receiving absolute honesty and transparency of information at all times.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box">
                                            <i class="fa fa-calculator"></i>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Accredited Valuers</p>
                                            <p class="card-text-block-text p-s-text">
                                                All our Associates are NAEA and ARLA certified or undergoing qualification. Our clients deserve only the best!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col m4 s12">
                                    <div class="card hoverable">
                                        <div class="image-box">
                                            <i class="fa fa-camera-retro"></i>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-block">
                                            <p class="card-text-block-heading p-l-text">Marketing & Photography</p>
                                            <p class="card-text-block-text p-s-text">
                                                We only use carefully picked professional photographers with a true passion for property photography to give your property the exposure it deserves. All our properties will have a virtual tour.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <style>
        .about-us .facility-card .card{
            min-height: 310px;
        }
        .about-us .facility-card .card i{
            color: #D8AC45;
            padding: 30px;
            font-size: 64px;
        }
    </style>
</main>
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('page-js')

@endsection

