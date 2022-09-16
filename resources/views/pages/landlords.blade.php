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
        <img src="{{ asset('images/landlords.jpg')}}" class="responsive-img ">
        <div class="header-row-heading">
            <div class="header-row">
                <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">Landlords</h1>
            </div>
        </div>
    </div>
    <div class="privacy-container">
        <div class="container">
            <div class="row first-row-block">
                <div class="col s12">
                    <div class="guards-heading-box">
                        <h4 class="heading-guards guards-border guards-bottom-border">Marketing</h4>
                    </div>
                        <p class="textbox" dir="ltr">Upon receipt of signed Terms of Business, your property will immediately be uploaded to our regal website guardsrealestate.com</p>
                        <p class="textbox" dir="ltr">Our team of highly trained and experienced property advisors, will be promoting your property to our extensive database of prospective tenants &amp; corporate contacts ensuring that viewings are booked quickly &amp; efficiently.</p>
                        <p class="textbox" dir="ltr"><strong>We have three business functions in how we will collect the relevant tenant/buyer for your property:</strong></p>
                        <ol>
                            <li class="textbox" dir="ltr">&nbsp;ASSOCIATE PLATFORM</li>
                            <li class="textbox" dir="ltr">&nbsp;GLOBAL PORTALS / WEBSITE</li>
                            <li class="textbox" dir="ltr">&nbsp;PRIVATE ELITE / REGAL NETWORK</li>
                        </ol>
                    </div>
                <div class="col s12">
                        <div class="page" title="Page 4">
                            <div class="section">
                                <div class="layoutArea">
                                    <div class="column">
                                        <p><strong>When it comes to short stays we deal with many parts in this sector, the types of applicants that would generally take a short let experience would be :</strong></p>
                                        <ul>
                                            <li>CORPORATE CLIENTS FOR SHORT BUSINESS STAYS</li>
                                            <li>CITY BREAKS / SEASONAL (CHRISTMAS / SUMMER ETC)</li>
                                            <li>BUYERS VOID STAYS (AWAITING FOR NEW PROPERTY SALE COMPLETION)</li>
                                            <li>GENERAL SHORT LETS</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <p>We deal with a variety of short let rentals, these sources are all from trust worthy resources been mainly brought forward from huge corporate accounts &amp; organisations with in the group from Guards Real Estate database. These resources will be needing somewhere to stay for 1-6 months depending on work schedules &amp; business reasons.</p>
                                        <p>We aim to ensure that with short lets the full flexibility is all in hand, ensuring it works for you, depending on what it is you are looking for within a short let.</p>
                                        <p><strong>Some of the reasons why you would consider a short let:</strong></p>
                                        <ul>
                                            <li><em><em>Is it to earn extra money whilst your on holiday?</em></em></li>
                                            <li><em>Having an occupant securing your residence whilst your not at home for insurance liability purposes?</em></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="layoutArea">
                                    <div class="column">
                                        <ul>
                                            <li><em><em>Have you sold your apartment &amp; it is empty?</em></em></li>
                                            <li><em>You have a property on with sales &amp; your waiting for it sell, need a source to pay for the mortgage?</em></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page" title="Page 5">
                            <div class="section">
                                <div class="layoutArea">
                                    <div class="column">
                                        <p>Whatever the reason Guards are here to protect you &amp; we have the solution to your problem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p dir="ltr"><strong>LONG LET PACKAGES</strong></p>
                        <p class="textbox" dir="ltr">For information on Long lets, or history of Guards Real Estate please view <strong><a href="/about-us/">About Us</a></strong>, <strong><a href="/services/">Services</a></strong> section and <strong><a href="/guards-protection-management/">Memberships</a></strong>.</p>
                        <p class="textbox" dir="ltr">Alternatively call&nbsp;<strong><a href="tel:+442036331271">020 3633 1271</a></strong> to speak with one of our team.</p>
                    </div>
            </div>

            <div>
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">add</i>HOW DOES THE OFFER PROCESS WORK?</div>
                        <div class="collapsible-body"><p class="textbox" dir="ltr">Once an offer has been agreed with Guards Real Estate and a holding deposit has been taken, we will organise comprehensive referencing for each prospective tenant through an Independent regulated agency or you can choose an in house I.D. check. References include personal, work, bank and previous landlord information and history. Guards Real Estate will have an appointed agent to take you through each stage step by step giving you an easy process. Once paperwork has been completed and Guards Real Estate are in receipt of all required monies from the tenants they can move in.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">add</i>MOVING IN?</div>
                        <div class="collapsible-body">On the day of move in, one of our agents or inventory clerks will meet the tenants at the property and a handover will take place.</div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">add</i>WHAT IS THE TENANCY DEPOSIT PROTECTION SCHEME?</div>
                        <div class="collapsible-body"><p class="textbox" dir="ltr">Security deposits paid by tenants as part of a Assured Shorthold Tenancy (AST) must be protected by a recognised deposit scheme within 30 days of receipt.</p>
                            <p class="textbox" dir="ltr">(Guards Real Estate, can organise this for you)</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">add</i>DO I NEED TO BE AVAILABLE FOR VIEWINGS?</div>
                        <div class="collapsible-body"><p class="textbox" dir="ltr">Guards Real Estate will accompany each viewing. If you prefer to be at home whist viewings take place this is fine, please be aware that the majority of tenants are more comfortable viewing whilst the landlord is out.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">add</i>HOME OWNER FEEDBACK?</div>
                        <div class="collapsible-body"><p class="textbox" dir="ltr">Guards Real Estate Property Advisors are trained to give feedback within a minimum of 24hrs after each viewing. This will be via call or email depending on your preference. Feedback will be constructive and honest.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">add</i>WHAT DEPOSIT AMOUNT SHOULD I EXPECT?</div>
                        <div class="collapsible-body"><p class="textbox" dir="ltr">Generally a minimum of five weeks rent. This can be increased for properties containing valuable furnishings or when pets are involved in the tenancy</p></div>
                    </li>
                </ul>
            </div>
       {{--     <div>
                <div class="guards-heading-box">
                    <h4 class="heading-guards guards-border guards-bottom-border">Rental Advice</h4>
                </div>
                <p><strong><a href="http://www.guardsrealestate.com/blog/">View our Blog</a></strong> for the latest advice and news in the world of property.</p>
            </div>--}}
                <div class="privacy-text-block">
                    <div class="guards-heading-box">
                        <h4 class="heading-guards guards-border guards-bottom-border">Discuss your requirements with one of our Experts</h4>
                    </div>

                    <p class="p-l-text">For more information or to speak with one of our advisors please complete the information below and we will contact yoiu to discuss.</p>
                    <p class="p-l-text">Alternatively, call us on&nbsp;<strong><a href="tel:+442036331271">020 3633 1271</a></strong>&nbsp;to speak with one our team or email&nbsp;<a href="mailto:info@guardsrealestate.com">info@guardsrealestate.com</a></p>
                </div>
                <div class="privacy-text-block">
                    <div class="guards-heading-box">
                        <h4 class="heading-guards guards-border guards-bottom-border">Make an Enquiry</h4>
                    </div>
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
    </div>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.collapsible');
            var instances = M.Collapsible.init(elems, options);
        });
    </script>
</main>
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('page-js')

@endsection

