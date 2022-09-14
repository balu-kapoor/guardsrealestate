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
            <img src="{{asset('images/privacy.png')}}" class="responsive-img ">
            <div class="header-row-heading">
                <div class="header-row">
                    <h1 class="main-heading-row-button guards-border guards-top-border guards-bottom-border">Lettings membership package</h1>
                </div>
            </div>
        </div>

        <div class="about-us">
            <div class="privacy-container">
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                                <p class="textbox" dir="ltr">The London lettings market is unique in its competitiveness and demands. As rents rise so do tenants’ expectations and it is therefore vital to be prepared in order to realise the full benefit of your investment.</p>
                                <p class="textbox" dir="ltr">A well managed tenancy keeps tenants happy and increases the chances of a renewal.</p>
                                <p class="textbox" dir="ltr">Tenants will often ask if we ‘the agents’ are managing the property that they are interested in. Guards Protection research has shown that tenants are more likely to offer on a property managed by us than one that isn’t. In fact, most corporate tenants insist on fully managed properties through fear of encountering an unsafe tenancy.</p>
                                <p class="textbox" dir="ltr">By choosing Guards Real Estate to manage your property you will free yourself from the stress and responsibility of maintaining a property, this will leave you with more time to yourself. Experienced home owners in managing a property can result in been a full time job of hassle &amp; repairs.</p>
                                <p class="textbox" dir="ltr">Guards Real Estate will Protect your life investments : by providing you with a designated property manager that will be well aquatinted to your property &amp; typically ARLA (Association of Residential Lettings Agents) qualified, but perhaps more importantly have the experience to know what to do, what to say, how to say it and how to provide you the best possible outcome for you and your property.</p>
                                <p class="textbox" dir="ltr">High Quality tenants looking for property to rent in London expect the best &amp; we are proud to be able to deliver a regal service. Guards Protection membership package will leave you comfortable in the knowledge that your property is in safe hands.</p>

                        </div>
                    </div><div class="privacy-text-block">
                        <div class="guards-heading-box">
                            <h4 class="heading-guards guards-border guards-bottom-border">Whats Included In Our Protection Management Service</h4>
                        </div>
                    </div>
                    <ul class="horse-list">
                        <li class="textbox" dir="ltr">Includes Tenancy Regulations (Gas Cert, Check in, Tenancy agreement ‘’ask for more information’’)</li>
                        <li class="textbox" dir="ltr">Two Annual property Inspections</li>
                        <li class="textbox" dir="ltr">Includes Management if property is vacant</li>
                        <li class="textbox" dir="ltr">Key holding service</li>
                        <li class="textbox" dir="ltr">Sourcing Tenants &amp; referencing Tenants</li>
                        <li class="textbox" dir="ltr">Deposit holding services inline with legislation</li>
                        <li class="textbox" dir="ltr">Negotiating Renewals at the end of tenancies</li>
                        <li class="textbox" dir="ltr">24hrs emergency service</li>
                        <li class="textbox" dir="ltr">Arranging payment of any outgoings associated with the property</li>
                        <li class="textbox" dir="ltr">Qualified Contractors</li>
                        <li class="textbox" dir="ltr">Value For Money</li>
                        <li class="textbox" dir="ltr">Extra Care</li>
                        <li class="textbox" dir="ltr">Loyalty Card (Find out more about the <strong><a href="#">Guards Loyalty Card</a></strong>)</li>
                    </ul>
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
    </main>
@endsection

@section('page-js')

@endsection


@section('footer')
    @include('includes.footer')
@endsection
